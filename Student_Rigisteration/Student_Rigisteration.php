<?php

//Recieve JSON data
$email = $_POST['email'];
$password = $_POST['password'];
$fullName = $_POST['fullName'];
$Gendar = $_POST['Gendar'];
$BirthDate = $_POST['BirthDate'];

//Open a new database connection
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Connection is done with no errors
else{
    // Insert command text
    $commandText = "INSERT INTO User (tmp_email, Password, Fullname, Gender, Birthdate, RoleID) 
    VALUES ('" . $email . "', '" . $password . "', '" . $fullName . "', " . $Gendar . ", '" . $BirthDate . "', '2')";
    
    // Try exectuting this query
    try {
        mysqli_query($con, $commandText);
        echo mysqli_insert_id($con);
    }
    catch(Exception $e){ //Catch any unexpected exception
        echo 'Message: ' .$e->getMessage();
    }
    
}

//Close database connection
mysqli_close($con);

?>