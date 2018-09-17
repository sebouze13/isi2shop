<?php
/**
 * Created by PhpStorm.
 * User: gblain
 * Date: 2018-09-12
 * Time: 14:50
 */

require_once "functions/constantes.php";
require_once "functions/bdManager.php";
require_once "functions/panierInvite.php";

if(array_key_exists(IDUSER, $_SESSION)){
    $panier = getPanier($_SESSION[IDUSER]);
    $panierInvite = false;
} else {
    $panier = getPanierInvite();
    $panierInvite = true;
}

$existe = false;

if(array_key_exists('id', $_GET)){
    if($_GET['qte'] == 0){
        $qte = "qty";

    } else {
        $qte = "qte";
    }
    if ($panierInvite){
        foreach($panier as $value){
            if($value->idProd == $_GET['id']){
                $existe = true;
                $lignePanier = $value;
            }
        }
        if($existe){
            updatePanierInvite($_GET['id'], $_GET[$qte]);
        } else{
            addPanierInvite( $_GET['id'], $_GET[$qte]);
        }
    } else {
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
    }

} else {
    //header("Location:shop.php");
}

//header("Location:cart.php");

