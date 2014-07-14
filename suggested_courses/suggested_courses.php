<?php
function connect() {
//    $con = mysqli_connect("localhost","root","","piwheel") OR DIE ("Error connect to DB");
    $con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123") 
            or die("Error connect to DB");
    return $con;
}
//if(isset ($_POST['name'])){
if(isset($_POST['name'])){
    $Sname = $_POST["name"];
    $commandText = "select * from user where Username like '" . $Sname . "'";
   // echo $commandText . "<br/>";
    try {
        $result= mysqli_query(connect(), $commandText) or die("Error:error on mysqli_query-> 0");
        $userId;
        while ($row = mysqli_fetch_array($result)){
             $userId = $row[1];
             getPurCourses($userId);
         }
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}
function getPurCourses($ID) {
    $commandText = "select * from user_courses where user_id = '" . $ID . "'";
    try {
        $result= mysqli_query(connect(), $commandText) or die("Error:error on mysqli_query-> 1");
        $i = 0 ; $j = 0;
        while ($row = mysqli_fetch_array($result)){
             if($row[2] == 1){
                 $arrpur[$i] = $row[1];  
             }
             $i++;
         }
         
         //get pur courses tags_id from courses_tags_link
         $arrpur_to_exclude="'".implode("','",$arrpur)."'";
         $commandText = "select * from courses_tags_link where course_id in ( " . $arrpur_to_exclude .")";
         $res1= mysqli_query(connect(), $commandText) or die("Error:error on mysqli_query-> 11");
         while ($row1 = mysqli_fetch_array($res1)){
                 $arrpurtags[$j] = $row1[2]; 
                 $j++;
         }
         getUnPurCourses($arrpur,$arrpurtags);
         
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}

function getUnPurCourses($arrpur,$arrpurtags) {
    $arrpur_to_exclude="'".implode("','",$arrpur)."'";
    $command = "select * from course where CourseID not in ( " . $arrpur_to_exclude . ")";
    $res= mysqli_query(connect(), $command) or die("Error:error on mysqli_query-> 2");
    $k=0;
    while ($rowpur = mysqli_fetch_array($res)){
        $arrunpur[$k] = $rowpur[1];
        $k++;
     } 
     //loop array un-pur to get tags if tags in atgs of pur
     for($x = 0;$x<count($arrunpur);$x++)
     {
         $commandText = "select * from courses_tags_link where course_id = '" . $arrunpur[$x] . "'";
         $res1= mysqli_query(connect(), $commandText) or die("Error:error on mysqli_query-> 11");
         $l = 0;
         while ($row1 = mysqli_fetch_array($res1)){
             for($y =0;$y<count($arrpurtags);$y++){
                 if($arrpurtags[$y] == $row1[2]){
                     $arrShow[$y] = $arrunpur[$x];
                     $l++;
                 }
             }
         }
     }
     showUnPurCourses($arrShow);
 }
 
 function showUnPurCourses($arrShow) {
     $arrshowpur_to_exclude="'".implode("','",$arrShow)."'";
     $command = "select * from course where CourseID  in ( " . $arrshowpur_to_exclude . ")";
     $res= mysqli_query(connect(), $command) or die("Error:error on mysqli_query-> 2");
    $k=0;
    while ($rowpur = mysqli_fetch_array($res)){
        $arrlast[$k] = array($rowpur[2],$rowpur[3]);
        $k++;
     } 
    echo json_encode($arrlast);
}

?>
