<?php
function connect() {
    $con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
    //$con = mysqli_connect("localhost", "root", "", "piwheel");
    return $con;
}
if(isset ($_FILES['VidFileName'])){
    if ($_FILES["VidFileName"]["error"] > 0)
    {
       echo "Apologies, an error has occurred. ";
       echo "Error Code: " . $_FILES["VidFileName"]["error"];
    }
    else{
       move_uploaded_file($_FILES["VidFileName"]["tmp_name"],
                          "video/" . $_FILES["VidFileName"]["name"]);
    }
}

if(isset ($_POST['UnivId']) && isset ($_POST['CourseLang']) && isset($_FILES['VidFileName']) && isset ($_POST['CourseBio'])){
        $UnivId = $_POST['UnivId'];
        $CourseLang = $_POST['CourseLang'];
        $VidFileName = $_FILES['VidFileName']['name'];
        $courseBio = $_POST['CourseBio'];
        addCourseExtra($UnivId, $CourseLang, $VidFileName,$courseBio);
}
function addCourseExtra($UnivId, $CourseLang, $VidFileName, $courseBio) {
        //echo $UnivId . "<br>" . $CourseLang . "<br>" . $VidFileName . "<br>";
        $con = connect();
        $command = "insert into Course(UniveristyID, Language, Video, Brief) values('" . $UnivId . "','" . $CourseLang . "','" . $VidFileName . "','" .$courseBio . "')";
        //echo $command . "<br>";
        if(mysqli_query($con, $command)){
             echo "inserted"; 
           }else{
               echo "sorry, not inserted";
           }
}

?>