<?php

//Recieve JSON data
/*$Name = $_POST['Name'];
$Tags = $_POST['Tags'];
$Duration = $_POST['Duration'];
$Level = $_POST['Level'];
$Image = $_POST['Image'];
*/
//static values for test
$Name='static test';
$Duration='20';
$Level='2';
$Image='pic.jpg';
$courseID ='52b025f145252';
//Open a new database connection
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Connection is done with no errors
else{
    // Insert command text
    //$commandText = "INSERT INTO Course (Name, Tags, Duration, Level, Image)
    // VALUES ('" . $Name . "', '" . $Tags . "', '" . $Duration . "', " . $Level . ", '" . $Image . "')";
    
    $commandText = "INSERT INTO Course (CourseID, Name,  Duration, Level, Image) 
    VALUES ('" .$courseID ."', '" . $Name . "', '" . $Duration . "', " . $Level . ", '" . $Image . "')";
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
        $tags[0] = 1;
        $tags[1] = 5;
        for($i =0;$i<count($tags);$i++){
            $commandText = "INSERT INTO courses_tags_link (course_id,  tag_id) 
                    VALUES (" . $cID . ", " . $tags[$i]  . ")";
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

//Close database connection
mysqli_close($con);

?>