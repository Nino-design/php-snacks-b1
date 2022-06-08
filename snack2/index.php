<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    
<!--Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->

<?php 
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$email_at = strpos($email, "@");
$email_dot = strpos($email, ".");
$name_length = strlen($name);
$age_num = is_nan($age);

?>

<h3>Verifica parametri</h3>

<?php if(($email_at === false && $email_dot === false) || $name_length < 3  || $age_num === true){?>
     <p>Accesso negato</p>
    <?php } else {?>
        <p>Accesso riuscito</p>
        <?php } ?>
</body>
</html>