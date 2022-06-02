<?php
include_once('header.php');

include_once('login.php');
if(isset($_SESSION['logged_user'])){
    include_once 'tchat.php';
};

include_once('footer.php') 

?>