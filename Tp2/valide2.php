<?php
if (isset($_GET['reference'])&&isset($_GET['lbl'])&&isset($_GET['choix'])&&isset($_GET['choix'])&&isset($_GET['price'])&&isset($_GET['QTE'])) {
    $p=$_GET['reference'];
    $q=$_GET['lbl'];
    $a=$_GET['choix'];
    $r=$_GET['price'];
    $z=$_GET['QTE'];

    if(!empty($p)&&!empty($q)&&!empty($a)&&!empty($r)&&!empty($z)){
        echo "Reference: $p\n";
        echo "libelle:  $q\n";
        echo "Choix: $a\n";
        echo "Price: $r\n";
        echo "Quantite: $z\n";
    }else {
        header("location: authentification.html");
    }
}
?>