<?php
require_once "functions/constantes.php";
require_once "functions/bdManager.php";

if(array_key_exists('id', $_GET)){
    deleteFavoris($_SESSION[IDUSER], $_GET['id']);
} else {
    header("Location: shop.php");
}

header("Location:wishlist.php");