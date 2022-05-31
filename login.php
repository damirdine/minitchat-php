<?php include_once('header.php');
if(isset($_POST['password'])){
    $passwordHash = password_hash($_POST['password'],PASSWORD_BCRYPT);
    if(password_verify($_POST['password'],$passwordHash)){
        echo('supper');
    };
}

?>

<form class="container m-5 d-grid gap-4" method='POST' action='login.php'>
    <h1>Connexion</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Mail</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jhondoe@exemple.com">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
    </div>
    <div class="form-group">       
        <button type="submit" class="btn btn-primary">Connexion</button>
    </div>
</form>

<?php include_once('footer.php')?>