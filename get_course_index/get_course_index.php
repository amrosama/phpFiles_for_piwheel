<?php
if(isset ($_POST['courseId'])){
    $courseID = $_POST['courseId'];
}
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123") or die("cannot connect with DB");
//$con = mysqli_connect("localhost", "root", "", "piwheel");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
//    echo $commandText;
    try {
        $commandText = "select * from course_chapter where CourseID like '" . $courseID . "'";
        $result = mysqli_query($con, $commandText) or die("error on select");
        //$num_rows = mysqli_num_rows($result);
        //echo "num_rows=> " . $num_rows . "<br/>";
//        createJsonArray($result);
         $i  = 0;
         //echo "1";
         while($row = mysqli_fetch_array($result)){
             //echo $row[0] . "<br/>";
             $arr[$i] = $row[2];
             $arrId[$i] = $row[5];
             $i ++;
         }
         echo json_encode($arr);
         echo "<br/>";
         getChapter($arrId,$con);
         
         //getChapter($arrId, $con);
//         
//        $commandText = "select ID, Name, Type from Chapter_Lesson where CourseID like '" . $courseID . "'";
//        echo $commandText . "<br/>";
//        $result = mysqli_query($con, $commandText) or die("NOOOOOOO");
//        $num_rows = mysqli_num_rows($result) ;
////        createJsonArray($result);
//         $i  = 0;
//         echo "1";
//         while($row = mysqli_fetch_array($result)){
//             echo $row[0] . "<br/>";
//             $arr[$i] = $row[0];
//             $i ++;
//         }
//         echo json_encode($arr);
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}

//Close database connection
mysqli_close($con);

function createJsonArray($res) {
     $i  = 0;
     while ($row = mysqli_fetch_array($res)){
         $arr[$i] = $row[0];
         $i ++;
     }
     echo json_encode($arr);
}

function getChapter($arrId, $con) {
    $k = 0;
    for($j=0;$j<count($arrId);$j++){
        //echo '$arrId[$j]=>' . $arrId[$j];
        $commandText = "select ID, Name, Type, Viewed from Chapter_Lesson where ChapterID like '" . $arrId[$j] . "'";
        //echo $commandText . "<br/>";
        $result = mysqli_query($con, $commandText) or die("cannot select from Chapter_Lesson");
        //$num_rows = mysqli_num_rows($result) ;
//        createJsonArray($result);
         $i  = 0;
//         echo "1";
         while($row = mysqli_fetch_array($result)){
             //echo $row[0] . "<br/>";
             $arr2[$i] = array($row[0] ,$row[1] ,$row[2] ,$row[3]);
             $i ++;
         }
         
         $arr3[$k] = $arr2;
         $k ++;
    }
    echo json_encode($arr3);
}
?>