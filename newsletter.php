<?php require 'header.php'; ?>
<?php
$error = null;
$email = null;
$success = null;
//verification champ email non vide - true: filtre validation email - else retourne alert "email invalide" sinon "email enregistré"
if(!empty($_POST['email'])){
  $email = $_POST['email'];
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    // chemin fichier emails dans lequel un répertoire avec date du jour sera créé
    $file = __DIR__.DIRECTORY_SEPARATOR.'emails'.DIRECTORY_SEPARATOR.date('Y-m-d');
    // ecriture de la variable $email dans ce fichier
    file_put_contents($file,$email.PHP_EOL, FILE_APPEND);
    $success = "votre email a bien été enregistré.";
    $email = null;
                  } else {
    $error = "email invalide.";
  }$success = null;
}
?>
<h1>S'inscrire à la newsletter</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<form action="/newsletter.php" method="POST" class="form-inline">
<div class="form-group">
  <input type="email" name="email" placeholder="entrez votre email" required class="form-control" value="<?php htmlentities($email) ?>">
  <button type="submit" class="btn btn-primary"/>S'inscrire</button>
</div>
</form>
<?php if($error){ ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $error; ?>
  </div> <?php
}?>
<?php if($success){
  ?><div class="alert alert-success" role="alert">
  <?php echo $success; ?>
</div> <?php
}
 require 'footer.php'; ?>
