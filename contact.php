<?php
require 'header.php';
require_once 'config.php';
require 'fonctions.php';
?>
<div class="row">
  <div class="col-md-8">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
qui officia deserunt mollit anim id est laborum.
  </div>
  <div class="col-md-4">
   <h2>Horaires d'ouvertures</h2>
   <ul>
     <?php
     foreach(JOURS as $key=>$jours) { ?>
       <li>
         <?php echo $jours; ?>
       </li>
     <?php } ?>
   </ul>
         <?= creneaux_html(CRENEAUX); ?>
  </div>
</div>
