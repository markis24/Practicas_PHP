<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$taules = array();
    for ($i = 0; 0 > $taules; $i++) {
        array_push($taules, rand(0, 9));
    }

    if ($taules > 5) {
        echo "està plena";
    } else {
        echo "està buida";
    }

    // $taules = array_push()
    print_r($taules);
    ?>
    <?php
    $comensals = array();
    for ($i = 0; 0 < $comensals; $i++) {

        array_push($comensals, rand(0, 5));
    }
    print_r($comensals);

    
    if ($comensals > 2){
        echo "2 comensales";

    } 
    ?>
    <ul>
        <li>La taula </li>
    </ul>

    
</body>

</html>