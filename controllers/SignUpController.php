<?php
session_start();
// DB
const SERVERNAME = "localhost";
const USERNAME = "admin";
const PASSWORD = "admin";
const DBNAME = "MyShop";
const PORT = "5432";
$dbConnection = pg_connect("host=".SERVERNAME. " port=".PORT." dbname=".DBNAME." user=".USERNAME." password=".PASSWORD);

$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$role = false;


if (!$dbConnection) {
    die("Ошибка подключения: " . pg_last_error());
}
$query = pg_query_params($dbConnection, 'INSERT INTO public.users("UserEmail", "UserPassword", "UserFullName", "UserPhone", "UserRole") VALUES ( $1, $2, $3, $4, false)', array($email, md5($pass), $name." ".$surname, $phone));
if (!$query) {
    die("Ошибка выполнения запроса");
}
else $_SESSION['message'] = 'Регистрация прошла успешно!';
header('Location: /signin');
