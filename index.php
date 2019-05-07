<?php
$aDeviner = 150;
require 'header.php';
?>

<div >
  <h1>Bootstrap starter template</h1>
  <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
<p>
  <form action="/newsletter.php" method="POST" class="form-inline">
  <div class="form-group">
    <input type="email" name="email" placeholder="entrez votre email" required class="form-control" value="<?php htmlentities($email) ?>">
    <button type="submit" class="btn btn-primary"/>S'inscrire</button>
  </div>
  </form>
</p>
</div>
<div class="row">

</div>
<?php include 'main.php' ; ?>

<?php require 'footer.php';?>
