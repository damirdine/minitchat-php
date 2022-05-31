<?php
include_once('header.php');
//include_once('login.php')
if(isset($_POST['message']) && isset($_POST['user_id'])){
   
}
?>
<section class="tchat container w-25 overflow-auto bg-light my-5">
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
    <form action="./index.php" method="post">
        <input type="text" name="message" >
        <input type="text" name="user_id" value="current_user" hidden>
        <input type="submit" class="btn btn-primary" value="Envoyer"> 
    </form>
</section>
<?php include_once('footer.php') ?>