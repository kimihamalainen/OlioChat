<?php
include("model1_chat.php");
include("control_chat.php");
$ohjain = new Ohjain();
if (isset($_GET["toiminto"])) {
    $toiminto = $_GET["toiminto"];
} else {
    $toiminto = "lista";
}
$ohjain->$toiminto();
?>
