<?php
// tangkap input login 
$email = $_POST['email'];
$password = $_POST['password'];

//validasi login 
if($email == 'admin@gmail.com' && $password == '77777777'){
    header('Location: dashboard.php');
}