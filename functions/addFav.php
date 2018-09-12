<?php
require_once "constantes.php";
require_once "bdManager.php";

if(array_key_exists('id', $_GET)){
    addFavoris($_SESSION[IDUSER], $_GET['id']);
} else {
    header("Location:../shop.php");
}

header("Location:../wishlist.php");