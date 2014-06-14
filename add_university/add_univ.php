<?php
//if(isset ($_POST['name']) && isset ($_POST['description'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
//}
if(isset ($_FILES['image'])){
    if ($_FILES["image"]["error"] > 0)
    {
       echo "Apologies, an error has occurred. ";
       echo "Error Code: " . $_FILES["image"]["error"];
    }
    else{
       move_uploaded_file($_FILES["image"]["tmp_name"],
                          "images/" . $_FILES["image"]["name"]);
    }
}

$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    $command = "insert into university(description,name,image) values('" . $description . "','" . $name . "','" . $_FILES["image"]["name"] . "')";
    if(mysqli_query($con, $command)){
       echo "inserted"; 
    }else{
        echo "sorry, not inserted";
    }
}
?>