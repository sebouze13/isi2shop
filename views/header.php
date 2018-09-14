<?php
require_once "functions/constantes.php";
require_once "functions/bdManager.php";

if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
}

$connexionDeconnexion = "";

if ( array_key_exists(IDUSER, $_SESSION)) {
    $connexionDeconnexion = '<a href="functions/logout.php" title="Logout">Logout</a>
                                <div class="content-dropdown">
                                    <ul>
                                        <li class="register-icon"><a href="functions/logout.php" title="Logout" name="Logout"><i class="fa fa-user"></i> Logout</a></li>
                                    </ul>
                                </div>';
} else {
    $connexionDeconnexion = "<a href=\"login.php\" title=\"Login\">Login</a> or
                                <a href=\"register.php\" title=\"Register\">Register</a>
                                <div class=\"content-dropdown\">
                                    <ul>
                                        <li class=\"login-icon\"><a href=\"login.php\" title=\"Login\"><i class=\"fa fa-user\"></i> Login</a></li>
                                        <li class=\"register-icon\"><a href=\"register.php\" title=\"Register\"><i class=\"fa fa-user-plus\"></i> Register</a></li>
                                    </ul>
                                </div>";
}

$prodWish = getAllFavoris();
$nb = count($prodWish);
$panier = null;

if(array_key_exists(IDUSER, $_SESSION)){
    $panier = getPanier($_SESSION[IDUSER]);
    $listFav = getWishlist($_SESSION[IDUSER]);
}

$total = 0;
$existe = false;

if(array_key_exists(OP_NAME, $_GET)){
    if ($_GET[OP_NAME] == OP_RETRAIT){
        deleteFavoris($_SESSION[IDUSER], $_GET['idProd']);
        header('Location:'.$_SERVER['PHP_SELF'].'?idProd='.$_GET['idProd']);
    }elseif ($_GET[OP_NAME] == OP_AJOUT){
        foreach ($listFav as $value){
            if($value->id_user == $_SESSION[IDUSER] && $value->id_produit == $_GET['idProd']) {
                $existe = true;
            }
        }
            if(!$existe){
                addFavoris($_SESSION[IDUSER], $_GET['idProd']);
            }
            header('Location:'.$_SERVER['PHP_SELF'].'?idProd='.$_GET['idProd']);

        
    }elseif ($_GET[OP_NAME] == OP_RETRAIT_CART){
        deleteLignePanier($_SESSION[IDUSER], $_GET['idProd']);
        header('Location:'.$_SERVER['PHP_SELF'].'?idProd='.$_GET['idProd']);
    }
}



?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from aaryaweb.info/html/stylexpo/stx002/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 12:55:06 GMT -->
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>ISI2SHOP - <?= $page_name ?></title>
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/fotorama.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>

<body class="homepage">
<!--<div class="se-pre-con"></div>-->

<div class="main">

    <!-- HEADER START -->
    <header class="navbar navbar-custom container-full-sm" id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="top-link top-link-left select-dropdown">
                            <fieldset>
                                <select name="speed" class="country option-drop">
                                    <option selected="selected">English</option>
                                    <option>French</option>
                                </select>
                                <select name="speed" class="currency option-drop">
                                    <option selected="selected">USD</option>
                                    <option>CAD</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-8 col-6">
                        <div class="top-right-link right-side">
                            <ul>
                                <li class="login-icon content">
                                    <a class="content-link">
                                        <span class="content-icon"></span>
                                    </a>
                                    <?=$connexionDeconnexion?>
                                </li>
                                <!--                            <li class="track-icon">-->
                                <!--                                <a href="#" title="Track your order"><span></span> Track your order</a>-->
                                <!--                            </li>-->
                                <!--                            <li class="gift-icon">-->
                                <!--                                <a href="#" title="Gift card"><span></span> Gift card</a>-->
                                <!--                            </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-3 col-lgmd-20per">
                        <div class="header-middle-left">
                            <div class="navbar-header float-none-sm">
                                <a class="navbar-brand page-scroll" href="index.php">
                                    <img alt="logo ISI2SHOP" src="images/logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lgmd-60per">
                        <div class="header-right-part">
                            <div class="category-dropdown select-dropdown">
                                <fieldset>
                                    <select id="search-category" class="option-drop" name="search-category">
                                        <option value="">All Categories</option>
                                        <option value="<?=WOMEN?>">Women</option>
                                        <option value="<?=MEN?>">Men</option>
                                        <option value="<?=KID?>">Kid</option>
                                        <option value="<?=ELECTRO?>">Electro</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="main-search">
                                <div class="header_search_toggle desktop-view">
                                    <form>
                                        <div class="search-box">
                                            <input class="input-text" type="text" placeholder="Search entire store here...">
                                            <button class="search-btn"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-lgmd-20per">
                        <div class="right-side float-left-xs header-right-link">
                            <ul>
                                <li class="wishlist-icon">
                                    <a href="wishlist.php">
                                        <span>
                                            <?php if(count($prodWish) !=0){
                                                ?>
                                                <small class="cart-notification"><?= count($prodWish) ?></small>
                                            <?php } ?>
                                        </span>
                                    </a>
                                    <div class="cart-dropdown header-link-dropdown">
                                        <ul class="cart-list link-dropdown-list">
                                            <?php if(count($prodWish) > 0 ){
                                                foreach ($prodWish as $value) {
                                                    $prod = $value->id_produit;
                                                    $produit = getProdById($prod);
                                                    switch($produit->id_cat){
                                                        case 1:
                                                            $dossierImage = MEN;
                                                            break;
                                                        case 2:
                                                            $dossierImage = WOMEN;
                                                            break;
                                                        case 3:
                                                            $dossierImage = KID;
                                                            break;
                                                        case 4:
                                                            $dossierImage = ELECTRO;
                                                            break;
                                                        default:
                                                            break;
                                                    }
                                                    ?>
                                                    <li> <a class="close-cart" href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_RETRAIT , '&idProd=', $produit->id ?>"><i class="fa fa-times-circle"></i></a>
                                                        <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/<?=$dossierImage . '/' . $produit->img?>"></a>
                                                            <div class="media-body"> <span><a href="product-page.php?idProd=<?=$produit->id?>"><?=$produit->libelle?></a></span>
                                                                <p class="cart-price">$<?=$produit->prix?></p>
                                                                <div class="product-qty">
                                                                    <label>Qty:</label>
                                                                    <div class="custom-qty">
                                                                        <?php if($produit->qte_dispo > 0){
                                                                            echo 'In Stock';
                                                                        }else{
                                                                            echo'Out of Stock';
                                                                        }?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                            }else{
                                                ?>
                                                <p>No product in wishlist</p>
                                                <?php
                                            }

                                            ?>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <div class="mt-20"> <a href="shop.php" class="btn-color btn">Shop</a> <a href="wishlist.php" class="btn-color btn right-side">My wishlist</a> </div>
                                    </div>
                                </li>
                                <li class="cart-icon"> <a href="#"> <span>
                                        <?php if(count($panier) !=0){
                                            ?>
                                            <small class="cart-notification"><?= count($panier) ?></small>
                                        <?php } ?>
                                        </span> </a>
                                    <div class="cart-dropdown header-link-dropdown">
                                        <ul class="cart-list link-dropdown-list">
                                            <?php if(count($panier) > 0 ){
                                                foreach ($panier as $value) {
                                                    $prod = $value->idProd;
                                                    $produit = getProdById($prod);
                                                    switch($produit->id_cat){
                                                        case 1:
                                                            $dossierImage = MEN;
                                                            break;
                                                        case 2:
                                                            $dossierImage = WOMEN;
                                                            break;
                                                        case 3:
                                                            $dossierImage = KID;
                                                            break;
                                                        case 4:
                                                            $dossierImage = ELECTRO;
                                                            break;
                                                        default:
                                                            break;
                                                    }
                                                    ?>
                                                    <li> <a class="close-cart" href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_RETRAIT_CART , '&idProd=', $produit->id ?>"><i class="fa fa-times-circle"></i></a>
                                                        <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/<?=$dossierImage."/".$produit->img?>"></a>
                                                            <div class="media-body"> <span><a href="#"><?=$produit->libelle?></a></span>
                                                                <p class="cart-price">$<?=$produit->prix*$value->qte?></p>
                                                                <div class="product-qty">
                                                                    <label>Qty:</label>
                                                                    <div class="custom-qty">
                                                                        <label><?=$value->qte?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php
                                                    $total += $produit->prix*$value->qte;
                                                }
                                            }else{
                                                ?>
                                                <p>No product in cart</p>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$<?=$total?></strong></span> </p>
                                        <div class="clearfix"></div>
                                        <div class="mt-20"> <a href="cart.php" class="btn-color btn">Cart</a> <a href="checkout.php" class="btn-color btn right-side">Checkout</a> </div>
                                    </div>
                                </li>
                                <li class="side-toggle">
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container position-s">
                <div class="row">
                    <div class="col-lg-8 col-md-7 position-initial">
                        <div id="menu" class="navbar-collapse collapse" >
                            <div class="top-right-link mobile right-side">
                                <ul>
                                    <li class="login-icon content">
                                        <a class="content-link">
                                            <span class="content-icon"></span>
                                        </a>
                                        <a href="login.php" title="Login">Login</a> or
                                        <a href="register.php" title="Register">Register</a>
                                        <div class="content-dropdown">
                                            <ul>
                                                <li class="login-icon"><a href="login.php" title="Login"><i class="fa fa-user"></i> Login</a></li>
                                                <li class="register-icon"><a href="register.php" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--                                <li class="track-icon">-->
                                    <!--                                    <a title="Track your order"><span></span> Track your order</a>-->
                                    <!--                                </li>-->
                                    <!--                                <li class="gift-icon">-->
                                    <!--                                    <a href="#" title="Gift card"><span></span> Gift card</a>-->
                                    <!--                                </li>-->
                                </ul>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="level"><a href="shop.php" class="page-scroll">All  </a></li>
                                <li class="level"><a href="shop.php?categ=<?=WOMEN?>" class="page-scroll"><?=WOMEN?> </a></li>
                                <li class="level"><a href="shop.php?categ=<?=MEN?>" class="page-scroll"><?=MEN?> </a></li>
                                <li class="level"><a href="shop.php?categ=<?=KID?>" class="page-scroll"><?=KID?> </a></li>
                                <li class="level"><a href="shop.php?categ=<?=ELECTRO?>" class="page-scroll"><?=ELECTRO?> </a></li>
                            </ul>
                            <div class="header-top mobile">
                                <div class="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="top-link top-link-left select-dropdown">
                                                <fieldset>
                                                    <select name="speed" class="country option-drop">
                                                        <option selected="selected">English</option>
                                                        <option>French</option>
                                                    </select>
                                                    <select name="speed" class="currency option-drop">
                                                        <option selected="selected">USD</option>
                                                        <option>CAD</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="top-link right-side">
                                                <div class="help-num" ><i class="fa fa-phone"> </i> Need Help? : (+1) 514-842-2426</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 ">
                        <div class="right-side float-left-xs header-right-link">
                            <div class="right-side">
                                <div class="help-num" ><i class="fa fa-phone"> </i> Need Help? : (+1) 514-842-2426</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-links ">
            <div class="popup-links-inner">
                <ul>
                    <li class="categories">
                        <a class="popup-with-form" href="#categories_popup"><span class="icon"></span><span class="icon-text">Categories</span></a>
                    </li>
                    <li class="cart-icon">
                        <a class="popup-with-form" href="#cart_popup"><span class="icon"></span><span class="icon-text">Cart</span></a>
                    </li>
                    <li class="search">
                        <a class="popup-with-form" href="#search_popup"><span class="icon"></span><span class="icon-text">Search</span></a>
                    </li>
                    <li class="scroll scrollup">
                        <a href="#"><span class="icon"></span><span class="icon-text">Scroll-top</span></a>
                    </li>
                </ul>
            </div>
            <div id="popup_containt">
                <div id="categories_popup" class="white-popup-block mfp-hide popup-position">
                    <div class="popup-title">
                        <h2 class="main_title heading"><span>categories</span></h2>
                    </div>
                    <div class="popup-detail">
                        <ul class="cate-inner">
                            <li class="level">
                                <a href="shop.php" class="page-scroll"><i class="fa fa-camera-retro"></i>All</a>
                            </li>
                            <li class="level">
                                <a href="shop.php?categ=<?=MEN?>" class="page-scroll"><i class="fa fa-camera-retro"></i>Men</a>
                            </li>
                            <li class="level">
                                <a href="shop.php?categ=<?=WOMEN?>" class="page-scroll"><i class="fa fa-camera-retro"></i>Women</a>
                            </li>
                            <li class="level">
                                <a href="shop.php?categ=<?=KID?>" class="page-scroll"><i class="fa fa-camera-retro"></i>Kid</a>
                            </li>
                            <li class="level">
                                <a href="shop.php?categ=<?=ELECTRO?>" class="page-scroll"><i class="fa fa-camera-retro"></i>Electro</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="cart_popup" class="white-popup-block mfp-hide popup-position">
                    <div class="popup-title">
                        <h2 class="main_title heading"><span>cart</span></h2>
                    </div>
                    <div class="popup-detail">
                        <div class="cart-dropdown ">
                            <ul class="cart-list link-dropdown-list">
                                <?php
                                if(count($panier) > 0 ){
                                    $i = 0;
                                    foreach ($panier as $value) {
                                        $idProd = $value->idProd;
                                        $produit = getProdById($idProd);
                                        switch($produit->id_cat){
                                            case 1:
                                                $dossierImage = MEN;
                                                break;
                                            case 2:
                                                $dossierImage = WOMEN;
                                                break;
                                            case 3:
                                                $dossierImage = KID;
                                                break;
                                            case 4:
                                                $dossierImage = ELECTRO;
                                                break;
                                            default:
                                                break;
                                        }

                                        ?>
                                        <li> <a class="close-cart" href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_RETRAIT_CART , '&idProd=', $produit->id ?>"><i class="fa fa-times-circle"></i></a>
                                            <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/<?=$dossierImage."/".$produit->getImg()?>"></a>
                                                <div class="media-body"> <span><a href="product-page.php?idProd=<?=$produit->id?>"><?=$produit->getLibelle()?></a></span>
                                                    <p class="cart-price">$<?=$produit->prix?></p>
                                                    <div class="product-qty">
                                                        <label>Qty:</label>
                                                        <div class="custom-qty">
                                                            <label><?=$value->qte?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                            <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$<?=$total?></strong></span> </p>
                            <div class="clearfix"></div>
                            <div class="mt-20"> <a href="cart.php" class="btn-color btn">Cart</a> <a href="checkout.php" class="btn-color btn right-side">Checkout</a> </div>
                        </div>
                    </div>
                </div>
                <div id="search_popup" class="white-popup-block mfp-hide popup-position">
                    <div class="popup-title">
                        <h2 class="main_title heading"><span>Search</span></h2>
                    </div>
                    <div class="popup-detail">
                        <div class="main-search">
                            <div class="header_search_toggle desktop-view">
                                <form>
                                    <div class="search-box">
                                        <input class="input-text" type="text" placeholder="Search entire store here...">
                                        <button class="search-btn"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
