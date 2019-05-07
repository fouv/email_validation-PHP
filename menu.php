<?php
//lecture du fichier demo_menu.csv - un tableau de plusieurs lignes.
$content = file(__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'demo_menu.csv');
?>
<h1>Menu</h1>
<?php
//réactualise le tableau en enlevant sur chaque ligne les espaces et les tabs aprèsfaction
//avoir scindé en 3 la ligne (séparateur = tabulation)
foreach($content as $key=>$ligne){
  $content[$key] = explode("\t", trim($ligne));
}

?>
<h2>Menu</h2>
<?php foreach($content as $ligne){
  if($ligne <= 1){
    ?> <h2> <?php echo $ligne[0]; ?></h2><?php
  } else {
    ?> <div class="row">
      <div class="col-sm-8">
        <p>
          <strong><?php echo $ligne[0]; ?></strong><br />
          <?php echo $ligne[1];?>
        </p>
      </div>
      <div class="col-sm-4">
        <?php echo number_format($ligne[2],2,',', ' ');?> €
      </div>
    </div> <?php
  }
}
