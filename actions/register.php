<?php

session_start();

require_once '../database/database.php';
require_once '../functions/functions.php';
global $database;

if (!isset($_POST))
    die('поддерживается только метод post');

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$password = trim($_POST['password']);
$password_rep = trim($_POST['password_rep']);

$_SESSION['name'] = $name;
$_SESSION['phone'] = $phone;

if (empty($name)) 
    $_SESSION['errors']['name'] = "Поле Имя должно быть обязательно заполнено";

if (empty($phone)) 
    $_SESSION['errors']['phone'] = "Поле Номер телефона должно быть обязательно заполнено";

// else if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) 
//     $_SESSION['errors']['phone'] = 'Поле Номер телефона некорректно';

else {

    // Получение email из БД
    $sql = "SELECT * FROM `users` WHERE `phone` = '$phone'";
    $query = $database->query($sql);
    $isReg = $query->fetch(PDO::FETCH_ASSOC);

    // Проверка есть ли данный email в БД и если есть, то выводим ошибку
    if (!empty($isReg))
        $_SESSION['errors']['phone'] = 'Номер телефона должен быть уникальным';

}
if(empty($password)){
    $_SESSION['errors']['password'] = "Поле Пароль должно быть обязательно заполнено";
}
else if(strlen($password) < 5){
    $_SESSION['errors']['password'] = "Пароль должен быть больше 5 символов";
}
if(empty($password_rep)){
    $_SESSION['errors']['password_rep'] = "Это поле должно быть обязательно заполнено";
}
else if($password != $password_rep){
    $_SESSION['errors']['password_rep'] = "Пароли не совпадают";
}

if (!empty($_SESSION['errors'])) {
    header('Location: ../index.php?page=search');
    die();
}


$password = password_hash($password, PASSWORD_DEFAULT);

// Регистрация пользователя
$sql = "INSERT INTO `users`( `name`, `phone`, `password`) VALUES (:name,:phone,:password)";


// Параметры
$params = [
    ':name' => $name,
    ':phone' => $phone,
    ':password' => $password,
];

// Подготовка запроса
$prepare = $database->prepare($sql);


// Выполнение запроса
$prepare->execute($params);


// Очистка значения email
// unset($_SESSION['phone']);
// unset($_SESSION['name']);
// unset($_SESSION['fullname']);

// Редирект пользователя
 header('Location: ../index.php?page=home');