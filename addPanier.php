<?php
/**
 * Created by PhpStorm.
 * User: gblain
 * Date: 2018-09-12
 * Time: 14:50
 */

require_once "functions/constantes.php";
require_once "functions/bdManager.php";

if(array_key_exists('id', $_GET)){
    if($_GET['qte'] == 0){
        addPanier($_SESSION[IDUSER], $_GET['id'], $_GET['qty']);
    } else {
        addPanier($_SESSION[IDUSER], $_GET['id'], $_GET['qte']);
    }
} else {
    //header("Location:shop.php");
}

//header("Location:cart.php");

