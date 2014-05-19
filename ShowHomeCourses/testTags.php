<?php

//$levelFromId = 1;
//$levelToId = 2;
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    $commandText = "select * from Course where Level between 1 and 3 and Price between 100 and 1000 and Duration between 30 and 60 and Tags in (1,5)"   ;
 
    echo $commandText . "<br/>";
    // Try exectuting this query
    try {
        $result= mysqli_query($con, $commandText);
        $num_rows = mysqli_num_rows($result);
        createJsonArray($result); 
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
     $encode = array($arr);
     echo json_encode($arr);

}
?>
