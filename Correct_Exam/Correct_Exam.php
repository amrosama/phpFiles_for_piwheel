<?php
function connect() {
    $con=mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    //$con = mysqli_connect("localhost","root","","PiWheel");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $con;
}
    // insert in  table (student_exams)
    $command = "insert into student_exams(userID, ExamID) values('" . $_POST["userId"] ."','" . $_POST["examId"] . "')";
    //echo $command . "<br>";
    if(mysqli_query(connect(), $command)){
       //insert correction in table (student_exams_correction)
        $arr = str_replace('[', '', $_POST['correction']);
        $correction = str_replace(']', '', $arr);
        $correctionIndex = explode(",", $correction);
        $j =0;
        $x =$j+2;
         for($i =0; $i<count($correctionIndex)/3; $i++){
             //echo str_replace('[', '', $correctionIndex[$x]) . "<br>";
             $test = str_replace('[', '', $correctionIndex[$x]);
             $test = str_replace('\\', '', $test);
             //echo "test-->" . $test . "<br>";
             $command = "insert into student_exams_correction (studentExamID, Qnumber, grade, comment)" .
                        "values(" . getStudentExamID() . "," . $correctionIndex[$x-2] . "," 
                                . $correctionIndex[$x-1]. "," . $test . ")";
             if(mysqli_query(connect(), $command)){
                 $inserted = 1;
             }else{
                 $inserted = 0;
             }
             //echo $command . "<br>";
             $x = $x + 3;
         }
         if($inserted == 1){
             echo "1";
             return 1;
         }else{
             echo "0";
             return 0;
         }
    }else{
        echo "0";
        return 0;
    }
mysqli_close(connect());

function getStudentExamID() {
    $command = "select max(studentExamID) from student_exams";
    $result= mysqli_query(connect(), $command);
    while ($row = mysqli_fetch_array($result))
    {
        $id = $row[0];
    }
    return $id;
}
?>