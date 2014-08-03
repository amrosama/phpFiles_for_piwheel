<?php

if ($_FILES["File"]["error"] > 0) {
    if ($_FILES["File"]["error"] == 1) {
        echo "ex_max"; //Exceeded maximum file size.
    }
    elseif ($_FILES["File"]["error"] == 7) {
        echo "ex_dsk"; //Not enough space on disk.
    }
} 
else {
    $filepath = $_POST["Path"];
    if (!is_dir($filepath)){ //Directory does not exists.
        mkdir($_POST["Path"], 0777, true);
        move_uploaded_file($_FILES["File"]["tmp_name"], $_POST["Path"].'/'.$_FILES["File"]["name"]);
        echo "true"; //Directory created & File successfuly uploaded.
    }
    else { //Directory exists.
        $filename = $_POST["Path"].'/'.$_FILES["File"]["name"];
        if(!file_exists($filename)) { //File does not exist.
            move_uploaded_file($_FILES["File"]["tmp_name"], $_POST["Path"].'/'.$_FILES["File"]["name"]);
            echo "true"; //File successfuly uploaded.
        }
        else {
            echo "ex_dup"; //Duplicate file names.
        }
    }
}

?>