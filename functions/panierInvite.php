<?php
/**
 * Created by PhpStorm.
 * User: gblain
 * Date: 2018-09-14
 * Time: 10:16
 */
require_once "constantes.php";

if(!array_key_exists(SESS_CART, $_SESSION)) {
    $_SESSION[SESS_CART] = array();
}
$cart =& $_SESSION[SESS_CART];

function updatePanierInvite($id_produit, $qte){
    global $cart;
    foreach($cart as $value){
        if($value->idProd == $id_produit){
            $value->qte = $qte;
        }
    }

}

function addPanierInvite($id_produit, $qte){
    global $cart;
    $panier = new Panier(0, $id_produit, $qte);
    array_push($cart, $panier);
}

function getPanierInvite(){
    global $cart;
    return $cart;
}