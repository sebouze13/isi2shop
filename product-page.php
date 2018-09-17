<?php
$page_name = "Product page";
require_once  'views/header.php';
require_once "functions/constantes.php";
require_once "functions/bdManager.php";

$produit = null;

if(array_key_exists("idProd", $_GET)){
    $id = $_GET["idProd"];
    $produit = getProdById($id);
} else {
    header("Location:index.php");
}

switch($produit->getIdCat()){
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

<!-- Bread Crumb STRAT -->
<div class="banner inner-banner1 ">
    <div class="container">
        <section class="banner-detail center-xs">
            <h1 class="banner-title"><?=$dossierImage?></h1>
            <div class="bread-crumb right-side float-none-xs">
                <ul>
                    <li><a href="index.php">Home</a>/</li>
                    <li><span><?=$dossierImage?></span></li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- Bread Crumb END -->

<!-- CONTAIN START -->
<section class="pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 mb-xs-30">
                        <img src="images/<?=$dossierImage."/".$produit->getImg()?>" alt="Stylexpo">
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-detail-main">
                                    <div class="product-item-details">
                                        <h1 class="product-item-name"><?=$produit->getLibelle()?></h1>
                                        <form class="price-box"> <span class="price">$<?=$produit->getPrix()?></span>
                                            <div class="product-info-stock-sku">
                                                <div>
                                                    <label>Availability: </label>
                                                    <span class="info-deta">In stock</span>
                                                </div>
                                            </div>
                                        </form>
                                            <p><?=$produit->getDescription()?></p>
                                            <form action="addPanier.php" method="get">
                                                <input type="hidden" name="id" value="<?=$produit->getId()?>">
                                                <input type="hidden" name="qte" value="0">
                                                <div class="mb-20">
                                                    <div class="product-qty">
                                                        <label for="qty">Qty:</label>
                                                        <div class="custom-qty">
                                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-detail cart-button">
                                                        <ul>
                                                            <li class="pro-cart-icon">
                                                                <button title="Add to Cart" class="btn-color"><span></span>Add to Cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="bottom-detail">
                                                <ul>
                                                    <li class="pro-wishlist-icon"><a href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_AJOUT , '&idProd=', $produit->id ?>"><span></span>Wishlist</a></li>
                                                </ul>
                                            </div>
                                            <div class="share-link">
                                                <label>Share This : </label>
                                                <div class="social-link">
                                                    <ul class="social-icon">
                                                        <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                                                        <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                                                        <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin"> </i></a></li>
                                                        <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss"> </i></a></li>
                                                        <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br/>

<!-- CONTAINER END -->

<!-- News Letter Start -->
<section>
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-inner center-sm">
                <div class="row">
                    <div class=" col-xl-12 col-md-12">
                        <div class="newsletter-bg">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="newsletter-title">
                                        <h2 class="main_title">Subscribe to our newsletter</h2>
                                        <div class="sub-title">Sign up for newsletter and Get upto 50% off</div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <form>
                                        <div class="newsletter-box">
                                            <input type="email" placeholder="Email Here...">
                                            <button title="Subscribe" class="btn-color">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Letter End -->

<?php
require_once  'views/footer.php';
?>
