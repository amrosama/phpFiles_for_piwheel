<?php

//Recieve JSON data
$Name = $_POST['Name'];
//$Tags = $_POST['Tags'];
$Duration = $_POST['Duration'];
$Level = $_POST['Level'];
//$Image = $_POST['Image'];
$courseID =  getRandomString();
//static values for test
//$Name='static test';
//$Duration='20';
//$Level='2';
//$Image='pic.jpg';
//$courseID ='52b025f145252';
//$tags[0] = 1;
//$tags[1] = 5;
$tag = explode(",", $_POST['Tags']);
//Open a new database connection
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
//$con = mysqli_connect("localhost","root","","piwheel");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Connection is done with no errors
else{
    // Insert command text
    //$commandText = "INSERT INTO Course (Name, Tags, Duration, Level, Image)
    // VALUES ('" . $Name . "', '" . $Tags . "', '" . $Duration . "', " . $Level . ", '" . $Image . "')";
    if(isset ($_FILES['Image'])){
        if ($_FILES["Image"]["error"] > 0)
        {
           echo "Apologies, an error has occurred. ";
           echo "Error Code: " . $_FILES["Image"]["error"];
        }
        else{
           move_uploaded_file($_FILES["Image"]["tmp_name"],
                              "images/" . $_FILES["Image"]["name"]);
        }
    }
    $commandText = "INSERT INTO Course (CourseID, Name,  Duration, Level, Image) 
    VALUES ('" .$courseID ."', '" . $Name . "', '" . $Duration . "', " . $Level . ", '" . $_FILES["Image"]["name"] . "')";
    // Try exectuting this query
    try {
        mysqli_query($con, $commandText);
        echo mysqli_insert_id($con);
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
    $commandText = "SELECT * FROM Course ORDER BY id DESC LIMIT 1";
    try {
        $result= mysqli_query($con, $commandText);
        echo "<br/>";
        while ($row = mysqli_fetch_array($result)) {
            $cID= $row[0];
        }
        
        for($i =0;$i<count($tag);$i++){
            $commandText = "INSERT INTO courses_tags_link (course_id,  tag_id) 
                    VALUES (" . $cID . ", " . $tag[$i]  . ")";
            echo "add Tags => " . $commandText;
            try {
               //mysqli_query($con, $commandText);
                if(mysqli_query($con, $commandText)){
                     echo "tags inserted"; 
                   }else{ 
                       echo "sorry, tags not inserted";
                   }
            }
            catch(Exception $e){ //Catch any unexpected exception
                echo 'Message: ' .$e->getMessage();
            }
        }
    }
    catch(Exception $e){ //Catch any unexpected exception
            echo 'Message: ' .$e->getMessage();
    }
}

function getRandomString($length = 8) 
{ $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
  $string = ''; 
  for ($i = 0; $i < $length; $i++) 
  { $string .= $characters[mt_rand(0, strlen($characters) - 1)]; }
  return $string; 
}

//Close database connection
mysqli_close($con);

?>