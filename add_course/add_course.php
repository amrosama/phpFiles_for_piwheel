<?php

//Recieve JSON data
$Name = $_POST['Name'];
$Tags = $_POST['Tags'];
$Duration = $_POST['Duration'];
$Level = $_POST['Level'];
$Image = $_POST['Image'];

//Open a new database connection
$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Connection is done with no errors
else{
    // Insert command text
    $commandText = "INSERT INTO Course (Name, Tags, Duration, Level, Image) 
    VALUES ('" . $Name . "', '" . $Tags . "', '" . $Duration . "', " . $Level . ", '" . $Image . "')";
    
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