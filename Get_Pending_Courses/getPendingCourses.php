<?php
function connect() {
    $con=mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    //$con = mysqli_connect("localhost","root","","PiWheel");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $con;
}
    $commandText = "select * from User where UserID like '" . $_POST["userId"] . "'";
    // Try exectuting this query
    try {
        $result= mysqli_query(connect(), $commandText);
        while ($row = mysqli_fetch_array($result))
        {
            //check if student or instructor
            if($row[8] == 2){//student
                //search in user_courses table to get courses of this student
                $commandText = "select * from User_Courses where user_id like '" . $_POST["userId"] . "'";
                $UserCourseResult= mysqli_query(connect(), $commandText);
                $count = 0;
                while ($StudentRow = mysqli_fetch_array($UserCourseResult)){
                    $userCourses[$count] = "'" . $StudentRow[1] . "'";
                    $count = $count + 1;
                }
                //select courses for this student 
                $newarray = join(',',$userCourses);
                $commandText = "select * from Course where CourseID in (" . $newarray .")";
                $CourseResult= mysqli_query(connect(), $commandText);
            }else if($row[8] == 3){//instructor
                //search in course table about courses belongs to this instructor
                $commandText = "select * from Course where InstructorID like '" . $_POST["userId"] ."'";
                $CourseResult= mysqli_query(connect(), $commandText);
            }
        }
        createJsonArray($CourseResult);
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }

//Close database connection
mysqli_close(connect());

function createJsonArray($res) {
     $i  = 0;
     while ($row = mysqli_fetch_array($res)){
         //check if this course published or not
         if($row[15] == 0){
             $arr[$i] = array($row[1], $row[2]);
             $i ++;
         }
     }
     echo json_encode($arr);
}
?>
