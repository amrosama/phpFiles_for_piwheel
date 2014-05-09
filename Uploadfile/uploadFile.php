<?php
if ($_FILES["File"]["error"] > 0) {
  echo false;
} else {
  if (!file_exists('/'.$_POST["Path"].'/')){
      mkdir($_POST["Path"], 0700, true);
      echo "path created";
      move_uploaded_file($_FILES["File"]["tmp_name"], $_POST["Path"] . '/' . $_FILES["File"]["name"]);
      echo "done";
  }
}
?>