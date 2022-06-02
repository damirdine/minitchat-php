<?php 
include_once 'header.php';

$sqlMessagesQuery = 'SELECT u.fullname, m.message , m.date FROM users u INNER JOIN messages m ON u.id = m.user_id  ORDER BY m.date  DESC';
$messagesStatement = $db->prepare($sqlMessagesQuery);
$messagesStatement->execute() or die(print_r($db->errorInfo()));
$messages = $messagesStatement->fetchAll();

if(isset($_POST['message']) && isset($_POST['user_id']) && isset($_SESSION['logged_user'])){

    $addMsgSqlREquest = "INSERT INTO messages (user_id,message,date) VALUES (:user_id, :message ,:date); ";
    $addMsg = $db -> prepare($addMsgSqlREquest);
    $addMsg->execute(
        [
            'user_id'=> htmlspecialchars($_POST['user_id']),
            'message'=>htmlspecialchars($_POST['message']),
            'date' => htmlspecialchars($_POST['date'])
        ]
    )or die(print_r($db->errorInfo()));
};
?>
<?php if(isset($_SESSION['logged_user_name'])):?>
    <section class="tchat container w-50 overflow-auto bg-light my-5">
        <h3 class="bg-primary">Chat</h3>
        <div class="messages container">
            <?php foreach($messages as $message):?>
                <?php if($message['fullname']===$_SESSION['logged_user_name']):?>
                    <div class="message d-flex p-4 bg-warning">
                <?php else:?>
                    <div class="message p-4">
                <?php endif;?>
                    <picture>
                        <source srcset="..." type="image/svg+xml">
                        <img src="..." class="img-fluid img-thumbnail" alt="photo profil de <?php echo($message['fullname'])?>">
                    </picture>
            
                    <p class="message-content">
                        <?php echo($message['message'])?>
                    </p>
                    <p class="message-date">
                        <?php echo($message['date'])?>
                    </p>
                </div>
                <hr>
            <?php endforeach;?>
        </div>
        <hr>
        <form class="d-flex justify-content-evenly p-3 bg-dark" action="./index.php" method="post">
            <input class="w-75" type="text" name="message" >
            <input name="user_id" value="<?php echo($_SESSION['logged_user_id']) ?>" hidden>
            <input name="date" value="<?php echo(date("Y-m-d H:i:s")) ?>" hidden>
            <input type="submit" class="btn btn-primary" value="Envoyer">
        </form>
    </section>

<?php endif;?>