<?php
    $username   = $_POST['username'];
    $pass       = $_POST['password'];

    include 'koneksi.php';

    $user_login = mysqli_query($connect,"select * from db_admin where username='$username' and password='$pass'");
    $chek       = mysqli_num_rows($user_login);

    if($chek>0){
        session_start();
        $row = mysqli_fetch_array($user_login);
        header("location:admin/index.php");
    }else{
        header("location:index.php");
    }
?>