<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include_once './add_chapter.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-theme.min.css" rel="stylesheet">
        <style>
            body{
                background-color: #eee;
            }
            h3{
                color: white;
            }
            #lessons{
                border: 2px solid #0088cc;
                float: left;
            }
            #lesson-form{
                padding: 20px;
            }
            #add-lessons{
                width: 800px;
                height: 20px;
                background-color: #0081c2;
                float: left;
                margin-left: 156px;
                margin-top: 30px;
                color: white;
                padding-left: 5px;
            }
        </style>
        <script type="text/javascript" src="jquery-2.1.0.min.js"></script>
        <script type="text/javascript">
             $(function() {
                 $("#lessons").hide();
                 $("#add-lessons").click(function(){
                     $("#lessons").toggle();
                 });
                $("#sub").click(function() {
                var Chapter_no = $("#Chapter_no").val();
                var chapter_name = $("#chapter_name").val();
                var course_name = $("#course_name").val();
                $("#chapter_id_lesson").val(course_name)  ;
                var dataString = 'ChapterNo='+ Chapter_no + "& ChapterName=" + chapter_name + "& courseName=" + course_name ;
                $.ajax({
                type: "POST",
                url: "add_chapter.php",
                data: dataString,
                success: function(){
                alert("inserted successfully");
//                $('#Chapter_no').val('');
//                $('#chapter_name').val('');
//                $('#course_name').val(1);
                }
                });
                return false;
                });
                
//                $("#subLesson").click(function() {
//                var Lesson_no = $("#Lesson_no").val();
//                var Lesson_name = $("#Lesson_name").val();
//                var Lesson_type = $("#Lesson_type").val();
//                var File_path = $("#File_path").val();
////                $("#chapter_id_lesson").val(course_name)  ;
//                var dataString = 'LessonNo='+ Lesson_no + "& LessonName=" + Lesson_name + "& LessonType=" + Lesson_type + "$ FilePath=" + File_path ;
//                $.ajax({
//                type: "POST",
//                url: "add_lessons.php",
//                data: dataString,
//                success: function(){
//                alert("inserted successfully");
////                $('#Chapter_no').val('');
////                $('#chapter_name').val('');
////                $('#course_name').val(1);
//                }
//                });
//                return false;
//                });
                
                });
        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" ><h3>Add Chapter</h3></div>
        <div class="col-sm-6 col-sm-offset-3" style="width:500px;margin: 0 auto;margin-top: 100px;">
            <form id="myform" enctype="multipart/form-data" method="post" action="add_chapter.php" >
                <!-- Course Name -->
		<div id="name"  class="form-group">
			<label for="name">Course Name</label>
                        <?php fillCourseName(); ?>
		</div>

		<!-- Chapter Number -->
		<div id="descr" class="form-group">
			<label for="description">Chapter Number</label>
			<input type="text" class="form-control" id="Chapter_no" name="ChapterNo" placeholder="Chapter Number" required=""/>
		</div>
                
                <!-- Chapter Name -->
		<div id="descr" class="form-group">
			<label for="description">Chapter Name</label>
			<input type="text" class="form-control" id="chapter_name" name="ChapterName" placeholder="Chapter Name" required=""/>
		</div>

                <button type="submit" class="btn btn-info" id="sub">Add Chapter</button>
           </form>
        </div>
        
        
            
        <div id="add-lessons">Add Lessons</div>   
        <div id="lessons" class="col-sm-6 col-sm-offset-3" style="width:800px;margin-left: 156px;;margin-bottom: 50px;">
            <form id="lesson-form" enctype="multipart/form-data" method="post" action="add_lessons.php" >

                <input type="hidden" name="ChapterID" id="chapter_id_lesson"/>
                    
		<!-- Lesson Number -->
		<div id="descr" class="form-group">
			<label for="LessonNo">Lesson Number</label>
			<input type="text" class="form-control" id="Lesson_no" name="LessonNo" placeholder="Lesson Number" required=""/>
		</div>
                
                <!-- Lesson Name -->
		<div id="descr" class="form-group">
			<label for="LessonName">Lesson Name</label>
			<input type="text" class="form-control" id="Lesson_name" name="LessonName" placeholder="Lesson Name" required=""/>
		</div>
                
                <!-- Lesson Type -->
		<div id="descr" class="form-group">
			<label for="LessonType">Lesson Type</label>
			<input type="text" class="form-control" id="Lesson_type" name="LessonType" placeholder="Lesson Type" required=""/>
		</div>
                
                <!-- File Path -->
                <div id="file" class="form-group">
			<label for="FilePath">Upload File</label>
                        <input type="file" id="File_path" name="FilePath"  required=""/>
		</div>

                <button type="submit" class="btn btn-info" id="subLesson">Add Lesson</button>
           </form>
        </div> 
        
    </body>
</html>
