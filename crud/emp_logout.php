<?php
session_start();
unset($_SESSION["id"]);
header("Location:emplo_log.php");
?>