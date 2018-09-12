<?php
require_once "constantes.php";

if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
}

unset($_SESSION[IDUSER]);
header("Location:../index.php");