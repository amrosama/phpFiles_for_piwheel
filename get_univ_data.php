<?php

$courseID = $_POST['Course_ID'];
//test data
//$courseID='52820ad086851';

$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    //$commandText = "select University.Image,University.Name,University.description from Course,University where University.ID=Course.UniveristyID and Course.CourseID=" . $courseID;
    $commandText = "select University.Image,University.Name,University.description from Course join University on University.ID=Course.UniveristyID where Course.CourseID='".$courseID."'";
    // Try exectuting this query
    try {
        $result= mysqli_query($con, $commandText);
        //createJsonArray($result);
       
	  $row= mysqli_fetch_array($result);
    	echo "[\"".$row[0]."\",";
    	echo "\"".$row[1]."\",";
    	echo "\"".$row[2]."\"]";
    	
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}

//Close database connection
mysqli_close($con);

function createJsonArray($res) {
     $i  = 0;
     $k = 0;
     $arr2[$k] = "";
     while ($row = mysqli_fetch_array($res))
     {
         $arr[$i] = $row[0];
         $newarray = explode(",", $arr[$i]);
         for($j=0 ; $j<count($newarray) ; $j++)
         {
             if (!in_array(strtolower($newarray[$j]),$arr2)){
                 //echo "doesn't exist <br/> " . strtolower ($newarray[$j]) . "<br/>";
                 $arr2[$k] = strtolower ($newarray[$j]);
             $k ++;
             }   
         }
         $i ++;
     }
     $encode = $arr2;
     echo json_encode($encode);

}

?>
