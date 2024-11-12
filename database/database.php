<?php

try{
    $dsn ="mysql: host=localhost;dbname=luna";
    $database = new PDO($dsn, 'root', '');
}
catch(PDOException $e){
    echo "Возникла ошибка при подключении бд: ". $e->getMessage();

}
