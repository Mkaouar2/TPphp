<?php
if (isset($_GET['reference'])&&isset($_GET['lbl'])&&isset($_GET['choix'])&&isset($_GET['choix'])&&isset($_GET['price'])&&isset($_GET['QTE'])) {
    $p=$_GET['reference'];
    $q=$_GET['lbl'];
    $a=$_GET['choix'];
    $r=$_GET['price'];
    $z=$_GET['QTE'];

    if(!empty($p)&&!empty($q)&&!empty($a)&&!empty($r)&&!empty($z)){
        echo "Details of  the product : <br>";
        echo "Reference: $p<br>";
        echo "libelle:  $q<br>";
        echo "Choix: $a<br>";
        echo "Price: $r<br> ";
        echo "Quantite: $z<br>";
    }else {
        header("location: authentification.html");
    }
}
?>