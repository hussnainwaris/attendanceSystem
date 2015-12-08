<form method="post" action="<?php echo($_SERVER['PHP_SELF'])?>">
    <div class="form-group">
        <label for="email"> Email </label>
        <input type="email" name="email" class="form-control" placeholder="username@gmail.com">
    </div>

    <div class="form-group">
        <input type="submit" name="login" class="form-control btn btn-primary" value="Login">
    </div>
</form>

<?php
    $isLogin = 0;
    $teacher =0;
    $student =0;
    if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])){

        $email = $_POST['email'];
        $query = "SELECT * FROM user WHERE email='".$email."'";


        $result = $conn->query($query);

        if ($result && $result->num_rows > 0){
            $isLogin = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) {

                if($row['role']=='teacher'){
                    $teacher=1;
                    header('Location: teacher.php');
                }
                else{
                    $student=1;
                    header('Location: student.php');
                }
            }
        }
        else {
            echo "User does not exist";
        }
        $conn->close();
    }
?>