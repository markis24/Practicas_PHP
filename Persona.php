<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = "Kurt";
    $apellido ="Cagle";
    $edad = 40;
    $fecha = new DateTime();
    $fecha->setDate(1983, 05, 12);
    $num_movil = 654332211;
    $num_casa = 933332211;
    $calle = "Carrer de turin,";
    $num_calle = 15;
    $correo = "kurt.cagle@example.com"; 
    $trabaja = True;
    $altura = 1.67;
    ?>
    
    <div>
        
        <?php
        echo "<h1>";
        echo "Descrivint a Kurt Cagle";
        echo "</h1>";
        

        echo "<h2>";
        echo "Les dades de Kurt son:";
        echo "</h2>";

        echo "<ul>";
        echo "<li>" ."Es diu: " . $nombre ."</li>";
        echo "<br>";
        echo "<li>" ."Te " . $edad ." anys" . "</li>";
        echo "<br>";
        echo "<li>" ."Va neixer l'any: " . "<b>" . $fecha->format("Y/m/d") ."</b>". "\r" . "</li>";
        echo "<br>";
        echo "<li>" . "Els seus telèfons són:  " . $num_movil . " - " . $num_casa . "</li>";
        echo "<br>";
        echo "<li>" . "Viu a: ". $calle . $num_calle . "</li>";
        echo "<br>";
        echo "<li>" ."El seu email és: ". $correo . "</li>";
        echo "<br>";
        echo "<li>" ."Treballa: ". $trabaja. "</li>";
        echo "<br>";
        echo "<li>"  . "I medeix: " . $altura . "</li>";
        echo "</ul>";

      //  $prof = array("Roger","Carlota","Oriol");

        
    
       <div>
       define("IVA",0.21);
       $cursos = array(
        array("1","PHP","Introduccio a PHP","15.5"),
        array("2","Laravel","Laravel per experts","30"),
        array("3","Django","Dominant Django","10")
       );

       for($i =0;$i < 3, $i++ ){
        echo $cursos[$i];
       }
            
       
         </div>
        ?>
        
        
    </div>
    
</body>
</html>