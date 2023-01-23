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

if (!$dbConnection) {
    die("Ошибка подключения: " . pg_last_error());
}

$query = pg_query_params($dbConnection, "SELECT * FROM users WHERE 'UserEmail' = $1 AND 'UserPassword' = $2", array($email, md5($pass)));
if (pg_num_rows($query)>0) {

    $user = pg_fetch_assoc($query);
    $_SESSION['user'] = [
        "id" => $user['UserID'],
        "email" => $user['UserEmail'],
        "fullName" => $user['UserFullName'],
        "role" => $user['UserRole']
    ];
    header('Location: /profile');

}
else {
    $_SESSION['message2'] = 'Неверный логин или пароль';
    header('Location: /signin');
}
