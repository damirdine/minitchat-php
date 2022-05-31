<?php 
$DB_HOST = 'localhost';
$DB_NAME = 'minitchat';
$DB_USER = 'root';
$DB_PASSWORD = "";

try{
    $db = new PDO(
        "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8",
        "$DB_USER",
        "$DB_PASSWORD",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


$tchatSqlQuery= 'SELECT * FROM messages WHERE tchat_id = :tchat_id';
$tchatStatement = $db->prepare($tchatSqlQuery);
$tchatStatement->execute(
    ['tchat_id' => 1,]
);
$tchat = $tchatStatement->fetchAll();


?>