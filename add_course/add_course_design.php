<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include_once './add_course.php';
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta http-equiv="content-type" content="text/html" />
	    <title>Add Course</title>
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-theme.min.css" rel="stylesheet">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="add_course.js"></script>
    </head>
    <body style="padding-top: 70px;">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Add Course - By Heba Kamel</a>
                </div>
                <div class="navbar-collapse collapse"></div>
            </div>
        </div>
    
        <div class="container">
            <form id="myform" enctype="multipart/form-data" method="post" action="add_course.php" >
                <input type="checkbox" name="formDoor[]" value="A" />Acorn Building<br />
                <input type="checkbox" name="formDoor[]" value="B" />Brown Hall<br />
                <div class="form-group">
                    <label for="Name">Name: </label>
	                 <input class="form-control" type="text" id="C_Name" name="Name" />
                </div>
                
                <div class="form-group">
                    <label for="Tags">Tags: </label>
	                 <div><?php getTags()?></div>
                </div>
                
                <div class="form-group">
                    <label for="Period">Period: </label>
	                 <input class="form-control" type="text" id="C_Period" name="Duration" />
                </div>
                
                <div class="form-group">
                    <label for="Level">Level: </label>
	                 <input class="form-control" type="text" id="C_Level" name="Level" />
                </div>
                
                <div class="form-group">
                    <label for="Image">Image: </label>
	                 <input class="form-control" type="text" id="C_Image" name="Image" />
                </div>

                <button type="submit" class="btn btn-info" id="sub">Add Course</button>
           </form>
        
        </div>
    </body>
</html>
