<?php include_once('header.php');

if(isset($_POST['fullname']) && isset($_POST['email']) && $_POST['password']===$_POST['confirm_password']){
    var_dump($_POST);
    $checkUserSqlREquest = "SELECT * FROM users WHERE email = :email;";
    $checkUser = $db -> prepare($checkUserSqlREquest);
    $checkUser->execute(
        [
            'email'=>$_POST['email'],
        ]
    )or die(print_r($db->errorInfo()));
    $user = $checkUser->fetchAll();
    echo('<br>'.$user);

    //if(isset($_POST['email']) )
    // $addUserSqlREquest = "INSERT INTO users (fullname,email,password) VALUES (:fullname, :email, :password); ";
    // $addUser = $db -> prepare($addUserSqlREquest);
    // $addUser->execute(
    //     [
    //         'fullname'=> $_POST['fullname'],
    //         'email'=>$_POST['email'],
    //         'password'=> password_hash($_POST['password'],PASSWORD_BCRYPT),
    //     ]
    // )or die(print_r($db->errorInfo()));

    // $userSigned=$_POST['fullname'];
    // $_SESSION['logged_user_name'] = $userSigned;
    // $_SESSION['logged_user'] = $_POST['email'];

}else{
    $errorSign = 'error form sign';
};

?>
<?php if(!isset($_SESSION['logged_user_name'])):?>   
    <form class="mt-4" action='./signin.php' method="POST">
        <h1>Inscription</h1>
        <div class="mb-3">
            <label for="email" class="form-label">Nom et prenom</label>
            <input type="text" class="form-control" id="email" name="fullname" aria-describedby="email-help" placeholder="John Doe" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="john.d@exemple.com" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type='password' class="form-control mb-3" placeholder="Votre mot de passe" id="password" name="password" required>
            <input type='password' class="form-control" placeholder="confirmer mot de passe" id="password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
    <?php else:?>
        <p class="alert alert-success">Bienvenue <?php echo(htmlspecialchars(($_SESSION['logged_user_name'])))?>.</p> 
<?php endif; ?>

<?php include_once 'footer.php'?>