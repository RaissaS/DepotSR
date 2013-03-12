<?php
include("vues/v_menu.php");
$lesProjetsDetails =$pdo-> getLesProjetsDetail();
include("vues/v_projetDetail.php");
?>
