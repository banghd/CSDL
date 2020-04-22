<?php
    session_start();
    $is_pass = true;
    $con = mysqli_connect('remotemysql.com','Y8ozx8Lvfd','KTxuOcdYX2');
    mysqli_select_db($con,'Y8ozx8Lvfd');
    $email = trim($_POST['email']);
    $name = trim($_POST['user']);
    $pass = trim($_POST['password']);
    $passCf = trim($_POST['passwordConfirmation']);
    if($passCf!=$pass){
        echo "please re fill password confirmation <br>";
        echo "<a href='login.php'>Re fill</a>";
        $is_pass = false;
    } else {
    $s = " select * from users where email = '$email';";
    $result =  mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num > 0){
        echo "User already taken<br>";
        $is_pass = false;
        echo "<a href='login.php'>Re fill</a>";
    } else {
        $reg = "insert into users(email,name,password,dateModified) values
         ('$email','$name','$pass',NOW())";
         mysqli_query($con,$reg);
         setcookie('email',$email,time()+ 86400*30,'/');
         header('Location: mainpage/Mainpage.php');
         exit();
    }
  
}
?>