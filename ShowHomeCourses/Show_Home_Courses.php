<?php
//echo $_GET['levelFromId'];
if($_GET['tagsId'] != "")
{
    $tagsId = $_GET['tagsId'];
    $count = 0;
    for($j = 0 ; $j< strlen($tagsId) ; $j++){     
        if($tagsId[$j] != ","){
            $tagsArr[$count] =  $tagsId[$j];
            $count ++;
        }   
    }
    $newarray = implode(", ", $tagsArr);  
    $tagCommand = "  in ($newarray)";
}else{
    $tagCommand = "";
}

    $levelToId = $_GET['levelToId'];
    $levelFromId = $_GET['levelFromId'];
    $priceFrom = $_GET['priceFrom'];
    $priceTo = $_GET['priceTo'];
    $periodFrom = $_GET['periodFrom'];
    $periodTo = $_GET['periodTo'];
    

$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
//$con = mysqli_connect("localhost", "root", "", "piwheel");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    $command = "select * from courses_tags_link where tag_id " . $tagCommand;
    $res= mysqli_query($con, $command);
    $i  = 0;
    while ($row = mysqli_fetch_array($res))
     {
         $arrTag[$i] =  '"' . $row[1] . '"';
         $i ++;
     }
    $newarr = implode(", ", $arrTag);
    $commandText = "select * from Course where Level between " . $levelFromId . " and " . $levelToId .
                   " and Price between " . $priceFrom . " and " . $priceTo . " and Duration between " . $periodFrom . " and " . $periodTo  . " and CourseID in (" . $newarr . ")";//. $tagCommand;
    //echo $commandText . "<br/>";
    // Try exectuting this query
    try {
        $result= mysqli_query($con, $commandText);
        $num_rows = mysqli_num_rows($result);
        //echo 'num => ' . $num_rows . '<br/>';
        if($num_rows != 0){
            createJsonArray($result,$con);
        }else{
            echo 'No Rows';
        }  
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}
//Close database connection
mysqli_close($con);

function createJsonArray($result,$con) {
     $i  = 0;
     while ($row = mysqli_fetch_array($result))
     {
         $univName = getUniversity($row[5],$con);
         $arr[$i] = array($row[8] , $row[2] , $row[12] , $row[7] , $row[8] , $row[9] , $row[10] , $row[1], $row[11] ,$univName , $row[5]);
         $i ++;
     }
     //$encode = array($arr);
     echo json_encode($arr);
}

function getUniversity($univID,$con) {
    $command = "select * from university where ID = " . $univID;
    $result= mysqli_query($con, $command);
    while ($row = mysqli_fetch_array($result))
     {
        return $row[5];
     }
}
?>
