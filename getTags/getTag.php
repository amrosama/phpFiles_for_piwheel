<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <style>
            #gettags{
                width: 960px;
                height: 400px;
                padding-top: 50px;
                margin: 0 auto; 
            }
            
            .form-control{
                height: 200px;
                background-color: red;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Get Tags</title>
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" ></div>
        
        <div id="gettags">
            <form method="post" action="getTag.php" class="form-control">
                <button type="submit" class="btn btn-danger">Get Tags</button>
           </form>
        </div>
        <?php
            
        ?>
    </body>
</html>
