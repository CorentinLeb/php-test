<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Is Here</title>
</head>
<body>
    <h1>Mon premier site en PHP</h1>

    <!-- PYTHAGORE -->
    <section class="flex_div">
    <div>
    <h2>pythagore</h2>
        <?php 
        $b = 8;
        $c = 12;
        $hypothenuse = $b**2 + $c**2;
        echo "<br>" . sqrt($hypothenuse);
        ?>
    </div>

    <!-- COSINUS SINUS -->
    <div>
    <h2>cosinus / sinus</h2>
        <?php 
        $angle = 30;
        $x = cos($angle); 
        $y = sin($angle); 
        echo $x . " " . $y;
        ?>
    </div>

    <!-- variable for pour afficher les nombres en ordre croissant -->
    
    <div>
    <h2>ordre croissant</h2>
        <?php 
        for ($i = 1; $i <= 25; $i++){
        echo 'The number is ' . $i . '<br>'; 
        if ($i%2 == 1)
        echo "$i est impair <br>";
        else
        echo "$i est pair <br>";
        }; 
        ?>
    </div>

    <!-- variable for pour afficher les nombres en ordre décroissant -->
    <div>
    <h2>ordre décroissant</h2>
        <?php
        for ($var2 = 25; $var2 >= 0; $var2--){
        echo 'The number is ' . $var2 . '<br>';
        if ($var2%2 == 1)
        echo "$var2 est impair <br>";
        else 
        echo "$var2 est pair <br>";
        }
         ?>
    </div>

    <!-- boucle qui affiche les chiffres de 1 à 25 -->
    <div>
    <h2>boucle de chiffres</h2>
    <?php 
    for ($suite = 1; $suite <= 25; $suite++){
        for($u =  1; $u <= $suite; $u++){
            echo $u . " ";
        }
        echo "<br>";
    }
    ?>
    </div>

    <!-- fonction qui me prévient si le chiffre est pair/impair -->
    <div>
    <h2>chiffre pair / impair</h2>
    <?php 
    function estPair($nombre){
        if ($nombre%2 == 0){
            return true;
        }else{
            return false;
        }  
    }
    if (estPair(7)){
        echo "Ce nombre est pair";
    }else{ 
        echo "Ce nombre est impair";
    }  
    ?>
    </div>

    <!-- programme qui additionne les nombres entiers -->
    <div>
    <h2>addition</h2>
    <?php 
    $total = 0;
    for ($var3 = 1; $var3 <= 25; $var3++){
        $total = $var3 + $total;
    }   
    echo 'The result is ' . $total . '<br>';
    ?>
    </div>

    <!-- programme qui additionne les nombres pairs -->
    <div>
    <h2>addition des nombres pairs</h2>
    <?php 
    $totalpair = 0;
    for ($var4 = 1; $var4 <= 30; $var4++){
        if(estPair($var4)){
            $totalpair = $var4 + $totalpair;
        }
    }
    echo 'The result is ' . $totalpair . '<br>';
    ?>
    </div>

    <!-- valeur factorielle -->
    <div>
    <h2>valeur factorielle</h2>
    <?php
    function fact($n){ 
        $f = 1; 
        for ($i = 1; $i <= $n; $i++){ 
          $f = $f * $i; 
        } 
        return $f; 
      } 
      $n = 5; 
      $f = fact($n); 
      echo "La factorielle de $n est $f"; 
    ?>
    </div>

    <!-- échange de valeurs -->

    <div>
    <h2>échange de valeurs</h2>
    <?php 
    $a = 10;
    $b = 20;
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo $a;
    echo $b;
    ?>
    </div>

    <!-- convertisseur secondes -->
    <div>
    <h2>convertisseur de secondes</h2>
    <?php
       function foo($seconds) {
        $t = round($seconds);
        return sprintf('%02d:%02d:%02d', ($t/3600),($t/60%60), $t%60);
      }
      echo foo(347872), "\n";
    ?>
    </div>

    <!-- tableau 6 chaines de caractères -->
    <div>
    <h2>mots de 6 caractères</h2>
    <?php 
    $legumes = ['carotte', 'courgette', 'banane', 'ouinon', 'pamplemousse', 'potiron'];
    foreach($legumes as $legume){
        if(strlen($legume) == 6){
            echo $legume . "<br>";
        }
    }    
    ?>
    </div>

    <!-- plus petite valeur d'un tableau -->
    <div>
    <h2>valeur minimale</h2>
    <?php 
    $chiffres = ['20', '200', '18', '360', '40', '156', '2', '36', '89', '16'];
    echo min($chiffres);
    ?>
    </div>

    <!-- tri d'un tableau -->
    <div>
    <h2>tri d'un tableau</h2>
    <?php 
    sort($chiffres);
    print_r($chiffres);
    ?>
    </div>

    <!-- matin ou après-midi -->
    <div>
    <h2>matin ou soirée</h2>
    <?php
    $heure = 13; 
    if($heure < 12){
        echo "Bon matin";
    }else { 
        echo "Bonne soirée";
    }
    ?>
    </div>

    <!-- foobar -->
    <div>
    <h2>les multiples</h2>
    <?php 
    for ($i = 1; $i <= 100; $i++){
    if($i%5 AND $i%3 == 0){
        echo ' foo ';
    }elseif($i%3 == 0){
        echo ' foobar';
    }elseif($i%5 == 0){
        echo ' bar ';
    }else echo $i;
}
    ?>
    </div>
    </section>
</body>
</html>