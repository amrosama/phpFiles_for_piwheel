<?php
if(isset ($_POST['name'])){
    $name = $_POST['name'];
}
  
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
//$con = mysqli_connect("localhost","root","","PiWheel123");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
      $command = "insert into tags(tags_name) values('". $name ."')";
//    echo $command . "<br/>";
    if(mysqli_query($con, $command)){
       echo "inserted"; 
    }else{
        echo "sorry, not inserted";
    }
}

mysqli_close($con);
?>