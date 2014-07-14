<?php
echo 'php start';

addCourse();   

function connect() {
    //$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123") or die ("error on DB");
    $con = mysqli_connect("localhost", "root", "", "piwheel") or die ("error on local DB");
    return $con;
}

function getTags() {
    $commandText = "select * from tags";
    try {
        $result= mysqli_query(connect(), $commandText);
        echo "<br/>";
        while ($row = mysqli_fetch_array($result))
        {
            echo "<input type='checkbox' name='Tags[]' value='$row[0]' />    $row[1]<br />";
        }
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}

function addCourse() {
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
    if(isset( $_POST['Name']) && isset( $_POST['Duration']) && isset( $_POST['Level'])){
        $con = connect();
        $commandText = "INSERT INTO Course (Name,  Duration, Level, Image) 
                        VALUES ('" . $_POST['Name'] . "', '" . $_POST['Duration'] . "', " . $_POST['Level'] . ", '" . $_FILES["Image"]["name"] . "')";
        try {
           //mysqli_query($con, $commandText);
            if(mysqli_query($con, $commandText)){
                 echo "course inserted"; 
               }else{
                   echo "sorry, course not inserted";
               }
        }
        catch(Exception $e){ //Catch any unexpected exception
            echo 'Message: ' .$e->getMessage();
        }
    }
    addTags();
}

function addTags() {
    if(!empty($_POST['Tags'])) {
        foreach($_POST['Tags'] as $check) {
                echo $check;
                //add checked tag to courses_tags_link
                $commandText = "INSERT INTO courses_tags_link (course_id,  tag_id) 
                        VALUES (" . getCourseID() . ", " . $check  . ")";
                echo "add Tags => " . $commandText;
                try {
                   //mysqli_query($con, $commandText);
                    if(mysqli_query(connect(), $commandText)){
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
}


function getCourseID() {
    $commandText = "SELECT * FROM course ORDER BY id DESC LIMIT 1";
    try {
        $result= mysqli_query(connect(), $commandText);
        echo "<br/>";
        while ($row = mysqli_fetch_array($result))
        {
            return $row[0];
        }
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}
//Close database connection
//mysqli_close($con);
?>