<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$matches = [
    [
        "squadracasa" => "roma",
        "squadraospite" => "milano",
        "punticasa" => 20,
        "puntiospite" => 30

    ],

    [
        "squadracasa" => "genova",
        "squadraospite" => "torino",
        "punticasa" => 40,
        "puntiospite" => 27

    ],

    [
        "squadracasa" => "venezia",
        "squadraospite" => "trieste",
        "punticasa" => 15,
        "puntiospite" => 26

    ],

    [
        "squadracasa" => "cagliari",
        "squadraospite" => "palermo",
        "punticasa" => 36,
        "puntiospite" => 53

    ],

    [
        "squadracasa" => "bari",
        "squadraospite" => "ancona",
        "punticasa" => 41,
        "puntiospite" => 39

    ],
];
 
?>
<ul>
 <?php 
 for($i = 0; $i < count($matches); $i++){
     $match = $matches[$i];
 
 ?>

 <li>
    
    <?php  echo $match["squadracasa"];?> - <?php echo $match["squadraospite"]; ?> | <?php echo $match["punticasa"]; ?> - <?php echo $match["puntiospite"]; }?>
      
 </li>

</ul>
    
</body>
</html>