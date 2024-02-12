<?php
if (isset($_GET['saisie'])&&isset($_GET['resultat'])) {
    $p=$_GET['saisie'];
    $q=$_GET['resultat'];
    if(!empty($p)&&!empty($q)){
        echo "inscription réussite $p";
    }else {
        header("location: authentification.html");
    }
}
?>