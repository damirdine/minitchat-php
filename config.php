<?php 
//----------------local DB----------
//$DB_HOST = 'localhost';
//$DB_NAME = 'minitchat';
//$DB_USER = 'root';
//$DB_PASSWORD = "";

//----------------prod DB----------
$DB_HOST = 'spryrr1myu6oalwl.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$DB_NAME = 'qigmuxhxcds0o51i';
$DB_USER = 'h5gcfr5oy6dl2glm';
$DB_PASSWORD = "id5r160qahugwmbb";

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
?>
