<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Attendance System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php require("db-connect.php")?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="center-form">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-leg-offset-1">
                <?php
                require("login.php");
                if($isLogin == 1 && $student==1){
                    include("student.php");
                }
                elseif($isLogin == 1 && $teacher==1){
                    include("teacher.php");
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>