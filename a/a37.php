<?php
session_start(); /* jb  data mangna r asign krna h to session capital m oterwise small*/ 
unset($_SESSION[@uid]);
echo"Logout done";
?>