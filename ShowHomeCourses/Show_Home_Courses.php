<?php
if($_GET['tagsId'] != "")
{
    $tagsId = $_GET['tagsId'];
    $newarray = explode(",", $tagsId);
    
    $tagcondition = "";
    for($i=0;$i<count($newarray);$i++)
    {
        if($i == 0){
            $tagcondition = "('%$newarray[$i]%')";
        }else{
            $tagcondition .= " or Tags like ('%$newarray[$i]%')";
        }
    }
    $tagCommand = " and Tags like " . $tagcondition ;
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
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    $commandText = "select * from Course where Level between " . $levelFromId . " and " . $levelToId .
            " and Price between " . $priceFrom . " and " . $priceTo . " and Duration between " . $periodFrom . " and " . $periodTo . $tagCommand;
    // Try exectuting this query
    try {
        $result= mysqli_query($con, $commandText);
        $num_rows = mysqli_num_rows($result);
        //echo 'num => ' . $num_rows . '<br/>';
        if($num_rows != 0){
            createJsonArray($result);
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

function createJsonArray($result) {
     $i  = 0;
     while ($row = mysqli_fetch_array($result))
     {
         $arr[$i] = array($row[8] , $row[2] , $row[12] , $row[7] , $row[8] , $row[9] , $row[10] , $row[1]);
         $i ++;
     }
     echo json_encode($arr);
}
?>
