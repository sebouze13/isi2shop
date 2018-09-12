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

function getProdById($id){
    global $servername;
    global $username;
    global $password;
    global $dbname;

    $retour = null;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }

    $selectProduct = "SELECT * FROM produit WHERE id=$id";
    $result = mysqli_query($conn, $selectProduct);
    if (mysqli_num_rows($result) > 0) {
        if($row = mysqli_fetch_assoc($result)) {
            $retour = new Produit($row["id"], $row["id_cat"], $row["libelle"], $row["description"], $row["img"], $row["prix"], $row["qte_dispo"]);
        }
    }

    mysqli_close($conn);
    return $retour;
}

function addPanier($id_user, $id_produit, $qte){
    global $servername;
    global $username;
    global $password;
    global $dbname;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $insertFavoris = "INSERT INTO pannier (id_user, id_produit, qte) VALUES ( $id_user , $id_produit, $qte)";

    mysqli_query($conn, $insertFavoris);

    $conn->close();
}

function addFavoris($id_user, $id_produit){
    global $servername;
    global $username;
    global $password;
    global $dbname;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $insertFavoris = "INSERT INTO favoris (id_user, id_produit)
VALUES ( $id_user , $id_produit)";

    if (mysqli_query($conn, $insertFavoris)) {
        echo "<script type=\"text/javascript\">
                                error(\"SUCCES\");
                                window.location = '" . $_SERVER['PHP_SELF'] . "';
                            </script>";
    } else {
        echo "<script type=\"text/javascript\">
                                error(\"There has been a problem... Message not sent\");
                                window.location = '" . $_SERVER['PHP_SELF'] . "';
                            </script>";
    }

    $conn->close();
}

function getAllFavoris(){
    global $servername;
    global $username;
    global $password;
    global $dbname;

    $retour = array();

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $selectFavoris = "SELECT * FROM favoris";
    $result = $conn->query($selectFavoris);

    //  if (mysqli_num_rows($result) > 0) {
    //      while($row = mysqli_fetch_assoc($result)) {
    //          $prod = new Produit($row["id"], $row["id_cat"], $row["libelle"], $row["description"], $row["img"], $row["prix"], $row["qte_dispo"]);
    //          array_push($retour, $prod);
    //       }
    //   }
    //  return $retour;

    $conn->close();
}

function deleteFavoris($id_user, $id_produit){
    global $servername;
    global $username;
    global $password;
    global $dbname;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $deleteFavoris = "DELETE FROM favoris WHERE id_user='" . $id_user . "' and id_produit ='" . $id_produit . "'";

    if ($conn->query($deleteFavoris) === TRUE) {
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}