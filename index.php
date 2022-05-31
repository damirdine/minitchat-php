<?php
include_once('header.php');
var_dump($_POST);
if(isset($_POST['message']) && isset($_POST['user_id']) && $_POST['password']===$_POST['confirm_password']){
   echo('heello');
}else{
    $errorSign = 'error form sign';
};
if(isset($_POST['message']) && isset($_POST['user_id'])){
   
};

?>
<section class="tchat container w-50 overflow-auto bg-light my-5">
    <h3 class="bg-primary">Chat</h3>
    <div class="message container">
        <div class="message p-4">
            <picture>
                <source srcset="..." type="image/svg+xml">
                <img src="..." class="img-fluid img-thumbnail" alt="photo profil">
            </picture>
    
            <div class="message-content">
                Lorem ipsum dolor sit amet.
            </div>
        </div>
        <hr>
        <div class="message p-4">
            <picture>
                <source srcset="..." type="image/svg+xml">
                <img src="..." class="img-fluid img-thumbnail" alt="photo profil">
            </picture>
    
            <div class="message-content">
                Lorem ipsum dolor sit amet.
            </div>
        </div>
        <hr>
        <div class="message p-4">
            <picture>
                <source srcset="..." type="image/svg+xml">
                <img src="..." class="img-fluid img-thumbnail" alt="photo profil">
            </picture>
    
            <div class="message-content">
                Lorem ipsum dolor sit amet.
            </div>
        </div>
        <hr>
        <div class="message p-4">
            <picture>
                <source srcset="..." type="image/svg+xml">
                <img src="..." class="img-fluid img-thumbnail" alt="photo profil">
            </picture>
    
            <div class="message-content">
                Lorem ipsum dolor sit amet.
            </div>
        </div>
    </div>
    <hr>
    <form class="d-flex justify-content-evenly" action="./index.php" method="post">
        <input class="w-75" type="text" name="message" >
        <input name="user_id" value="current_user" hidden>
        <input type="submit" class="btn btn-primary" value="Envoyer"> 
    </form>
</section>
<?php include_once('footer.php') ?>