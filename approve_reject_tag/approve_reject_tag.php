<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'approve':
            approveTag($_GET['id']);
            break;
        case 'select':
            selectTags();
            break;
    }
}
function connect() {
    $con = mysqli_connect("localhost","root","","PiWheel123");
    return $con;
}
if(isset ($_POST['name'])){
    $name = $_POST['name'];
}

//$con = mysqli_connect("PiWheel123.db.10962756.hostedresource.com","PiWheel123","P@ssw0rd90906","PiWheel123");
//$con = mysqli_connect("localhost","root","","PiWheel123");
// Check connection
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}else{

//}

function selectTags() {
    $con = connect();
      $result = mysqli_query($con, "select * from tags where approved = 0");
      echo "<table id='table-tags' class='table table-bordered table-condensed'>
            <tr>
            <th>Tag Id</th>
            <th>Tag Name</th>
            <th>Approve</th>
            </tr>";
       while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['tags_id'] . "</td>";
          echo "<td>" . $row['tags_name'] . "</td>";
          $id = $row['tags_id'];
          echo "<td> <button class='btn btn-primary' id='approve' onclick='return btnSelete_Click($id);'>Approve</button></td>";
          echo "</tr>";
        } 
}        

function approveTag($id) {
    $con = connect();
    mysqli_query($con, "update tags set approved = 1 where tags_id = " . $id);
    //selectTags();
    echo 'hebaaa';
}
//mysqli_close($con);
?>