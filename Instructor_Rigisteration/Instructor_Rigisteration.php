<?php
if(isset ($_POST['Prefix']) && isset ($_POST['FullName']) &&  isset ($_POST['CurrentPosition']) && 
   isset ($_POST['Bio'])  && isset ($_POST['Email']) && isset ($_POST['Password']) ){
    $Prefix = $_POST['Prefix'];
    $FullName = $_POST['FullName'];
    $CurrentPosition = $_POST['CurrentPosition'];
    $Bio = $_POST['Bio'];
    $email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Certification = $_POST['Certification'];
    $Accreditedby = $_POST['Accreditedby'];
    $VerificationLink = $_POST['VerificationLink'];
    $Username = $_POST['Email'];
    $RoleID = 3;
    $Certification = explode(",", $Certification);
    $Accreditedby = explode(",", $Accreditedby);
    $VerificationLink = explode(",", $VerificationLink);
}

if(isset ($_FILES['Image'])){
        if ($_FILES["Image"]["error"] > 0) {
           echo "Apologies, an error has occurred. ";
           echo "Error Code: " . $_FILES["Image"]["error"];
        }
        else{
           move_uploaded_file($_FILES["Image"]["tmp_name"],
                              "images/" . $_FILES["Image"]["name"]);
        }
    }else{
        echo "else";
    }

$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
//$con = mysqli_connect("localhost","root","","piwheel");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
      $command = "insert into user(Prefix,Username,Fullname,CurrentPosition,Image,Bio,tmp_email,Password,RoleID)" .
                 " values('". $Prefix . "','" .$Username . "','" . $FullName . "','" . $CurrentPosition . "','"  .  $_FILES["Image"]["name"] . "','"
                         .  $Bio ."','" 
                        .  $email ."','"  . $Password ."','"  . $RoleID ."'" . ")";
    //echo $command . "<br/>";
    if(mysqli_query($con, $command)){
       echo "inserted"; 
       $commandText = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
    $result= mysqli_query($con, $commandText);
    echo "<br/>";
    while ($row = mysqli_fetch_array($result))
    {
        $userID =  $row[0];
    }
    for($i = 0; $i<count($Certification); $i++){
        IF($i > count($Accreditedby)){
            $Accreditedby[$i] = null;
        }
        IF($i > count($VerificationLink)){
            $VerificationLink[$i] = null;
        }
        $command = "insert into certification(userID,certName,acreditedby,verificationLink)" .
                 " values('". $userID . "','" .$Certification[$i] . "','" . $Accreditedby[$i] . "','" . $VerificationLink[$i] ."'" . ")";
        //echo $command . "<br/>";
        if(mysqli_query($con, $command)){
           echo " inserted"; 
        }else{
            echo "sorry, not inserted";
        }
        //echo $Certification[$i] . "<br/>";
    }
    }else{
        echo "sorry, not inserted";
    }
    //get user id from user table
    
}

mysqli_close($con);
?>