<?php

require_once "constantes.php";
require_once "classes/produit.php";

if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
}

$servername = SERVERNAME;
$username = USERNAMEBD;
$password = PASSWORDBD;
$dbname = DBNAME;


function login($login, $pwd){
    $retour = false;
    global $servername;
    global $username;
    global $password;
    global $dbname;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }

    $selectUser = "SELECT * FROM user WHERE login='".$login."' AND pwd='".$pwd."'";
    $result = mysqli_query($conn, $selectUser);
    if (mysqli_num_rows($result) > 0) {
        if($row = mysqli_fetch_assoc($result)) {
            if($row["login"] == $login && $row["pwd"] == $pwd){
                $_SESSION["idUser"] = $row["id"];
                $retour = true;
            }
        }
    }

    mysqli_close($conn);
    return $retour;
}

function logout(){
    session_abort();
    header("Location:index.php");
}


function getAllProduct(){
    global $servername;
    global $username;
    global $password;
    global $dbname;

    $retour = array();

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }

    $selectProducts = "SELECT * FROM produit";
    $result = mysqli_query($conn, $selectProducts);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $prod = new Produit($row["id"], $row["id_cat"], $row["libelle"], $row["description"], $row["img"], $row["prix"], $row["qte_dispo"]);
            array_push($retour, $prod);
        }
    }

    mysqli_close($conn);
    return $retour;
}

