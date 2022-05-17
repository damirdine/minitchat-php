<?php 

    if (!isset($_POST['email']) || !isset($_POST['password']))
    {
        echo('Il faut un email et un message valide pour vous connecter.');
        return;
    }else{
        echo($_POST['email'] . $_POST['password']);
    }

    $email = $_POST['email'];
    $password = $_POST['password']

?>
