<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>Welcome</h1>

    <?php 
    $tab = array("Amine","Aziz","Chiheb");
    echo "<ul>";
    foreach($tab as $v){
        echo "<li>Nom d'étudiants: $v</li>";
    }
    echo "</ul>";
    ?>
    
</body>
</html>
