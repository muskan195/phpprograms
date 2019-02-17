<?php
session_start();
unset($_SESSION[rn]);
header("location:index.php");
?>