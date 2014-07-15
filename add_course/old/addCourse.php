
<?php
    include_once './add_course.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    

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
		<div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="C_Name" name="Name" placeholder="name" required=""/>
		</div> 

		<div class="form-group">
                    <label for="description">Duration</label>
                    <input type="text" class="form-control" id="C_Period" name="Duration" placeholder="Period" required=""/>
		</div>

		<div class="form-group">
                    <label for="image">Level</label>
                    <input type="text" class="form-control" id="C_Level" name="Level" placeholder="Level" required=""/>
		</div>
                
                <div class="form-group">
                    <label for="Image">Image</label>
	            <input  type="file" id="C_Image" name="Image" />
                </div>
                
                <div class="form-group">
                    <label for="Tags">Tags :</label>
	            <?php getTags();?>
                </div>
                
                <button type="submit" class="btn btn-info">Add Course</button>
            </form>
        </div>
    </body>
</html>