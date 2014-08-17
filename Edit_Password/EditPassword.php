<?php
function connect() {
    $con=mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    //$con = mysqli_connect("localhost","root","","PiWheel");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $con;
}
//get tag id from tags table
$commandText = "SELECT * FROM `User` WHERE UserID like '" . $_POST["userId"] . "' and Password like '" . $_POST["oldPass"] . "'";
$oldPassword= mysqli_query(connect(), $commandText) or die("error on select old password");
$num_rows = mysqli_num_rows($oldPassword);
if($num_rows == 1){
    $commandText = "update `User` set Password = '" . md5($_POST["newPass"]) . "' where UserID like '" . $_POST["userId"] . "'";
    mysqli_query(connect(), $commandText);
    echo "password edited successfully";
}else{
    echo "old password isn't correct";
}
//Close database connection
mysqli_close(connect());

function createJsonArray($res) {
     $i  = 0;
     $j = 0;
     while ($Trow = mysqli_fetch_array($res))
     {
        $tagName1 = $Trow[0];
        $courses= mysqli_query(connect(), "SELECT * FROM `courses_tags_link` WHERE tag_id = " . $tagName1);
        while ($courow = mysqli_fetch_array($courses)){
               $courseId1 = $courow[1];
        $commandText1 = "SELECT * FROM `course` WHERE ID = " . $courseId1; 
        $result= mysqli_query(connect(), "SELECT * FROM `Course` WHERE ID = " . $courseId1) ;
        while ($row = mysqli_fetch_array($result))
        {
            $instructorName = "";
           $instructor= mysqli_query(connect(), "SELECT * FROM `User` WHERE UserId like '" . $row[11] . "'");
           while ($insrow = mysqli_fetch_array($instructor)){
                  $instructorName = $insrow[0];
           }
           $universityName = "";
           $university= mysqli_query(connect(), "SELECT * FROM `University` WHERE ID =" . $row[5]);
           while ($univrow = mysqli_fetch_array($university)){
                  $universityName = $univrow[1];
           }
           $tags= mysqli_query(connect(), "SELECT * FROM `courses_tags_link` WHERE course_id = " . $row[0] );
           while ($tagrow = mysqli_fetch_array($tags)){
                  $TagName= mysqli_query(connect(), "SELECT * FROM `tags` WHERE tags_id =" . $tagrow[2]);
                       while ($tagnamerow = mysqli_fetch_array($TagName)){
                       $tagsArr[$j] = $tagnamerow[1];
                       $j++;
                   }
           }
            $arr[$i] = array($tagsArr,$row[3],$row[2],$instructorName,$row[11],$universityName,$row[5],$row[6],$row[7],$row[8],$row[9],$row[1]);
            $i ++;
        }
     }}
     echo json_encode($arr);
}
?>