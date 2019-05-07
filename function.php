<?php
$i = 0;
echo '<table style="width:100%">';
while ($i<10){
  if(($i % 2) ==0 )) {
    echo '<tr style="background-color: #CCCCCC;">';
  } else {
      echo '<tr style="background-color: #FFFFFF;">';
  }
      echo '<td style="text-align: center">'; .$i.'</td>';
  echo '</tr>';
  $i++;
  }
echo '</table>';
 ?>
