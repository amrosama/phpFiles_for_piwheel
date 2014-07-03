<?php
function connect() {
    $con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    //$con = mysqli_connect("localhost", "root", "", "piwheel");
    return $con;
}
//addChapter();
//fillCourseName();
////if(isset ($_POST['name']) && isset ($_POST['description'])){
//    $name = $_POST['name'];
//    $description = $_POST['description'];
////}
//if(isset ($_FILES['image'])){
//    if ($_FILES["image"]["error"] > 0)
//    {
//       echo "Apologies, an error has occurred. ";
//       echo "Error Code: " . $_FILES["image"]["error"];
//    }
//    else{
//       move_uploaded_file($_FILES["image"]["tmp_name"],
//                          "images/" . $_FILES["image"]["name"]);
//    }
//}
//
//
//// Check connection
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}else{
//    $command = "insert into university(description,name,image) values('" . $description . "','" . $name . "','" . $_FILES["image"]["name"] . "')";
//    if(mysqli_query($con, $command)){
//       echo "inserted"; 
//    }else{
//        echo "sorry, not inserted";
//    }
//}


if(isset ($_POST['ChapterNo']) && isset ($_POST['ChapterName']) && isset($_POST['courseName'])){
        $chapterNo = $_POST['ChapterNo'];
        $chapterName = $_POST['ChapterName'];
        $courseId = $_POST['courseName'];
        addChapter($chapterNo, $chapterName, $courseId);
}
function addChapter($chapterNo,$chapterName,$courseId) {
//    if(isset ($_POST['ChapterNo']) && isset ($_POST['ChapterName']) && isset($_POST['courseName'])){
//        $chapterNo = $_POST['ChapterNo'];
//        $chapterName = $_POST['ChapterName'];
//        $courseId = $_POST['courseName'];
        echo $chapterNo . "<br>" . $chapterName . "<br>" . $courseId . "<br>";
        //add chapter 
        $con = connect();
        $command = "insert into Chapter_Exam(ChapterID, CourseID, Name) values('" . $chapterNo . "','" . $courseId . "','" . $chapterName . "')";
        echo $command . "<br>";
        if(mysqli_query($con, $command)){
             echo "inserted"; 
           }else{
               echo "sorry, not inserted";
           }
//       }
}

//
// if(isset ($_POST['ChapterNo']) && isset ($_POST['ChapterName']) && isset($_POST['courseName'])){
//     $lesson_no = $_POST['LessonNo'];
//     $Lesson_name = $_POST['LessonName'];
//     $Lesson_type = $_POST['Lessontype'];
//     $File_path = $_POST['FilePath'];
//     addLessons($lesson_no, $Lesson_name, $Lesson_type, $File_path);
// }
//function addLessons($lesson_no, $Lesson_name, $Lesson_type, $File_path) {
//    $con = connect();
//    $command = "insert into Chapter_Lesson(ChapterID, Name, Type, FilePath, LessonNo)" .
//                "values('" . $chapterNo . "','" . $Lesson_name . "','" . $Lesson_type . "','" . $File_path . "','" .$lesson_no . "')";
//    echo $command . "<br>";
//    if(mysqli_query($con, $command)){
//         echo "inserted"; 
//       }else{
//           echo "sorry, not inserted";
//       }
//}


function fillCourseName() {
    $con = connect();
    
    $commandText = "select CourseID,Name from Course";
    try {
        $result= mysqli_query($con, $commandText);
        echo "<select id='course_name' name='courseName' class='form-control'>";
         while ($row = mysqli_fetch_array($result)){
             echo "<option value='$row[0]'>$row[1]</option>";
         }
         echo "</select>";
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}
?>