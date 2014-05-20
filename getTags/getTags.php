<?php
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    $commandText = "select Tags from Course";
    
    // Try exectuting this query
    try {
        $result= mysqli_query($con, $commandText);
        $num_rows = mysqli_num_rows($result);
        //echo $num_rows;
        createJsonArray($result);
        
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
}
    
//Close database connection
mysqli_close($con);


function createJsonArray($res) {
     $i  = 0;
     while ($row = mysqli_fetch_array($res))
     {
         //echo $row[0];
         $arr[$i] = $row[0];
         $i ++;
     }
     $encode = array($arr);
     echo json_encode($encode);

}
?>
