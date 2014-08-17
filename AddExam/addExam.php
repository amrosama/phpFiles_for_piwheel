<?php
function connect() {
    //$con=mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    $con = mysqli_connect("localhost","root","","PiWheel");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $con;
}
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
      $command = "insert into Chapter_Lesson(ChapterID, Name, Type, LessonNo) " .
                  "values('".$_POST['chapterId']."','".$_POST['lessonName']."','Exam',".$_POST['lessonNo'].")";
//    echo $command . "<br/>";
    if(mysqli_query(connect(), $command)){
       echo "inserted"; 
    }else{
        echo "sorry, not inserted";
    }
}
mysqli_close(connect());
?>