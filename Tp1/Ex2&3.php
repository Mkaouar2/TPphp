<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Moyenne</th>
        </tr>
        <?php
     include("util.php");
        foreach ($tab as $v) {
            $color=color($v[1]);
            ?>
            <tr style='background-color:<?= $color ?>'><td><?=$v[0]?></td><td><?=$v[1]?></td></tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
