<?php
function connect() {
    //$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    $con = mysqli_connect("localhost", "root", "", "piwheel123");
    return $con;
}
if(isset ($_FILES['VidFileName'])){
    echo "1";
    if ($_FILES["VidFileName"]["error"] > 0) {
       echo "Apologies, an error has occurred. ";
       echo "Error Code: " . $_FILES["VidFileName"]["error"];
    }
    else{
        echo "2";
       move_uploaded_file($_FILES["VidFileName"]["tmp_name"],
                          "video/" . $_FILES["VidFileName"]["name"]);
    }
}

if(isset ($_POST['UnivId']) && isset ($_POST['CourseLang']) && isset($_FILES['VidFileName'])){
    echo '5';
        $UnivId = $_POST['UnivId'];
        echo '6';
        $CourseLang = $_POST['CourseLang'];
        echo '7';
        $VidFileName = $_FILES['VidFileName']['name'];
        echo '8';
        addCourseExtra($UnivId, $CourseLang, $VidFileName);
}
function addCourseExtra($UnivId, $CourseLang, $VidFileName) {
    echo '9';
        echo $UnivId . "<br>" . $CourseLang . "<br>" . $VidFileName . "<br>";
        $con = connect();
        $command = "insert into Course(UniveristyID, Language, Video) values('" . $UnivId . "','" . $CourseLang . "','" . $VidFileName . "')";
        echo $command . "<br>";
        if(mysqli_query($con, $command)){
             echo "inserted"; 
           }else{
               echo "sorry, not inserted";
           }
}

?>