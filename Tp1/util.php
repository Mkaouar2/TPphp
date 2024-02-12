<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $tab = [["Amine", 20], ["Aziz", 16], ["Ayoub", 7]];
   function color($moyenne){
       $color ;
       if ($moyenne<10) {
           $color = "red";
           return $color; 
       }else {
           $color ="green";
           return $color;
       }
   }
    ?>
</body>
</html>