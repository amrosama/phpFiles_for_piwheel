<?php
function connect() {
    $con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    //$con = mysqli_connect("localhost", "root", "", "piwheel");
    return $con;
}
if(isset ($_FILES['FilePath'])){
    if ($_FILES["FilePath"]["error"] > 0)
    {
       echo "Apologies, an error has occurred. ";
       echo "Error Code: " . $_FILES["FilePath"]["error"];
    }
    else{
        echo '3'; 
       move_uploaded_file($_FILES["FilePath"]["tmp_name"],
                          "files/" . $_FILES["FilePath"]["name"]);
    }
}

 if(isset ($_POST['LessonNo']) && isset ($_POST['LessonName']) && isset($_POST['LessonType']) && isset($_FILES['FilePath'])){
     $lesson_no = $_POST['LessonNo'];
     $Lesson_name = $_POST['LessonName'];
     $Lesson_type = $_POST['LessonType'];
     $File_path = $_FILES["FilePath"]["name"];
     addLessons($lesson_no, $Lesson_name, $Lesson_type, $File_path);
 }
function addLessons($lesson_no, $Lesson_name, $Lesson_type, $File_path) {
    if(isset($_POST['ChapterID'])){
        $chapterNo = $_POST['ChapterID'];
    }
    $con = connect();
    $command = "insert into Chapter_Lesson(ChapterID, Name, Type, FilePath, LessonNo)" .
                "values('" . $chapterNo . "','" . $Lesson_name . "','" . $Lesson_type . "','" . $File_path . "','" .$lesson_no . "')";
    if(mysqli_query($con, $command)){
         echo "inserted"; 
       }else{
           echo "sorry, not inserted";
       }
}

?>
