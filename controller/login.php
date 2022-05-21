<?php

include '../libs/database.php';

$user_name = $_POST['username'];
$passwd = $_POST['password'];




$query = "SELECT * FROM signup WHERE username  = '$user_name' AND password = '$passwd'";

$sql = mysqli_query($conn, $query);




if ($sql->num_rows > 0) {
    echo "Đăng nhập thành công!";
} else {
    die('Đăng nhập thất bại!');
}
