<?php
include("vues/v_menu.php");
$lesProjets=$pdo-> getLesProjets();
include("vues/v_listeProjets.php");
?>
