<?php
    session_start();
    session_destroy();
    include_once('variables.php');
    include_once('header.php');
?>
<p class="alert alert-warning my-5">Vous ete deconnecter</p>
<a class="btn btn-primary" href="./index.php">retouerner a l'acceuil</a>

<?php include_once('footer.php'); ?>