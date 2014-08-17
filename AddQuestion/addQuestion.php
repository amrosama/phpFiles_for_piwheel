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
    //add to exam_question table
    $command = "insert into Exam_Question(`ExamID`, `Type`, `Desc`, `Mark`) " .
                  "values(".$_POST['examId'].",'".$_POST['questionType']."','"
                          .$_POST['question']."','".$_POST['TrueFalse']."')";
//    echo $command . "<br/>";
    if(mysqli_query(connect(), $command)){
       echo "Question inserted <br/>"; 
       if(isset($_POST['option1'])){
           //get Question Id 
           $command = "select max(ID) from Exam_Question";
           $result= mysqli_query(connect(), $command);
           while ($row = mysqli_fetch_array($result))
           {
               $questionId = $row[0];
               //put 4 options in array 
                $option[0] = $_POST['option1'];
                $option[1] = $_POST['option2'];
                $option[2] = $_POST['option3'];
                $option[3] = $_POST['option4'];
                //for loop to add 4 options 
                for($i =0; $i<4; $i++){
                    $mark = 0;
                    if($option[$i] == $_POST['correctOption']){
                        $mark = 1;
                    }
                    $command = "insert into Exam_Answer(`ExamID`, `Desc`, `Mark`, `QuestionID`) " .
                       "values(".$_POST['examId'].",'".$option[$i]."','"
                               .$mark."',".$questionId.")";
//                    echo $command;
                    if(mysqli_query(connect(), $command)){
                              echo "options inserted <br/>"; 
                    }else{
                        echo "sorry, options not inserted";
                    }
                }
           }
       }
    }else{
        echo "sorry, Question not inserted";
    }
}
mysqli_close(connect());
?>