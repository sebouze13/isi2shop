<?php
/**
 * Created by PhpStorm.
 * User: gblain
 * Date: 2018-09-12
 * Time: 14:50
 */

require_once "functions/constantes.php";
require_once "functions/bdManager.php";

$panier = getPanier($_SESSION[IDUSER]);
$existe = false;

if(array_key_exists('id', $_GET)){
    if($_GET['qte'] == 0){
        $qte = "qty";

    } else {
        $qte = "qte";
    }
    foreach($panier as $value){
        if($value->idUser == $_SESSION[IDUSER] && $value->idProd == $_GET['id']){
            $existe = true;
            $lignePanier = $value;
        }
    }
    if($existe){
        updatePanier($_SESSION[IDUSER], $_GET['id'], $_GET[$qte]);
    } else{
        addPanier($_SESSION[IDUSER], $_GET['id'], $_GET[$qte]);
    }
} else {
    header("Location:shop.php");
}

header("Location:cart.php");

