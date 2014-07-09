<?php
function connect() {
    //$con = mysqli_connect("localhost","root","","piwheel") OR DIE ("Error connect to DB");
    $con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123") 
            or die("Error connect to DB");
    return $con;
}
//if(isset ($_POST['name'])){
    $Sname = $_POST["Sname"];
    $commandText = "select * from user where Username like '" . $Sname . "'";
   // echo $commandText . "<br/>";
    try {
        $result= mysqli_query(connect(), $commandText) or die("Error:error on mysqli_query-> 0");
        $userId;
        while ($row = mysqli_fetch_array($result)){
             $userId = $row[0];
             getCourse($userId);
         }
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }

function getCourse($ID) {
    $commandText = "select * from user_courses where user_id = " . $ID;
    try {
        $result= mysqli_query(connect(), $commandText) or die("Error:error on mysqli_query-> 1");
        $i = 0 ; $j = 0;
        while ($row = mysqli_fetch_array($result)){
             $courseId = $row[1];
             if($row[2] == 1){
                $command = "select * from course where ID = " . $courseId;
                $res= mysqli_query(connect(), $command) or die("Error:error on mysqli_query-> 2");
                while ($rowpur = mysqli_fetch_array($res)){
                     $arrpur[$i] = array($rowpur[2], $rowpur[3]);
                 }
                 $i++;
             }
             if($row[3] == 1){
                 $command = "select * from course where ID = " . $courseId;
                $res= mysqli_query(connect(), $command) or die("Error:error on mysqli_query-> 3");
                while ($rowcom = mysqli_fetch_array($res)){
                     $arrcom[$j] = array($rowcom[2], $rowcom[3]);
                 }
                 $j++;
             }
         }
         echo json_encode(array($arrpur,$arrcom));
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}

?>
