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

        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $string_parse = parse_url($url, PHP_URL_QUERY);

        function get_string_between($string, $start, $end){
            $string = ' ' . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) return '';
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            return substr($string, $ini, $len);
        }

        $qty = get_string_between($string_parse, 'qty', '=');

        $qte = 'qty' . $qty;

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
    if($existe){
        updatePanier($_SESSION[IDUSER], $_GET['id'], $_GET[$qte]);
    } else{
        addPanier($_SESSION[IDUSER], $_GET['id'], $_GET[$qte]);
        if(array_key_exists('addToCart-btn', $_GET)){
            deleteFavoris($_SESSION[IDUSER], $_GET['id']);
        }
    }
} else {
    //header("Location:shop.php");
}

//header("Location:cart.php");

