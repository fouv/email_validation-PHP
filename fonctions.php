    <?php
    function checkbox(string $name, string $value, array $data):string
    {
    $attributes = "";
    if (isset($data[$name]) && in_array($value,$data[$name])){
    $attributes .= "checked";
          }
    return <<<HTML
    <input type="checkbox" name="{$name}[]"value="$value" $attributes>
HTML;
    }

    function radio(string $name, string $value, array $data):string
      {
        $attributes = "";
        if (isset($data[$name]) && $value===$data[$name]){
        $attributes .= "checked";
      }
      return <<<HTML
      <input type="radio" name="$name"value="$value" $attributes>
HTML;
    }

    function dump($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    }

    function creneaux_html(array $creneaux) {
      if(empty($creneaux)){
      return "Fermé";
      }
      $phrases = [];
      foreach($creneaux as $creneau){
      $phrases [] = "<strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h </strong>";
      }
      return 'Ouvert de ' .implode('et ',$phrases);
    }

    function affiche_creneaux(array $creneaux) {
      $phrases = [];
      foreach($creneaux as $creneau){
        $phrases[] = "{$creneau[0]} à {$creneau[1]}";
      }
      return 'Ouvert de ' .implode(" et ", $phrases);
    }
    ?>
