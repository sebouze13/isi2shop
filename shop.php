<?php
$page_name = "SHOP";
require_once  'views/header.php';
require_once "functions/bdManager.php";

$produits = getAllProduct();
$idCategorie = null;

if(array_key_exists("categ", $_GET)){
    $categorie = $_GET["categ"];
} else {
    $categorie = "all";
}

switch ($categorie){
    case MEN:
        $dossierImage = MEN;
        break;
    case WOMEN:
        $dossierImage = WOMEN;
        break;
    case KID:
        $dossierImage = KID;
        break;
    case ELECTRO:
        $dossierImage = ELECTRO;
        break;
    default:
        $dossierImage = "All";
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
<section class="ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-sm-30">
                <div class="sidebar-block">
                    <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3><span>Categories</span></h3>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                                <li><a href="shop.php">All</a></li>
                                <li><a href="shop.php?categ=<?=WOMEN?>"><?=WOMEN?></a></li>
                                <li><a href="shop.php?categ=<?=MEN?>"><?=MEN?></a></li>
                                <li><a href="shop.php?categ=<?=KID?>"><?=KID?></a></li>
                                <li><a href="shop.php?categ=<?=ELECTRO?>"><?=ELECTRO?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shorting mb-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="view">
                                <div class="list-types grid active ">
                                    <a href="shop.php">
                                        <div class="grid-icon list-types-icon"></div>
                                    </a>
                                </div>
                                <div class="list-types list">
                                    <a href="#">
                                        <div class="list-icon list-types-icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-listing">
                    <div class="inner-listing">
                        <div class="row">
                            <?php
                            foreach($produits as $value){
                                switch($categorie){
                                    case "all":
                                        switch ($value->id_cat){
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
                                        break;
                                    case MEN:
                                        $dossierImage = MEN;
                                        $idCategorie = 1;
                                        break;
                                    case WOMEN:
                                        $dossierImage = WOMEN;
                                        $idCategorie = 2;
                                        break;
                                    case KID:
                                        $dossierImage = KID;
                                        $idCategorie = 3;
                                        break;
                                    case ELECTRO:
                                        $dossierImage = ELECTRO;
                                        $idCategorie = 4;
                                        break;
                                    default:
                                        break;
                                }

                                //if($dossierImage == $categorie) {

                                if($idCategorie == null){

                                    ?>
                                    <div class="col-md-4 col-6 mb-30">
                                        <div class="product-item">
                                            <div class="product-image"><a href="product-page.php?idProd=<?=$value->id?>"> <img
                                                            src="images/<?= $dossierImage . "/" . $value->img ?>"
                                                            alt="Stylexpo"> </a>
                                                <div class="product-detail-inner">
                                                    <div class="detail-inner-left align-center">
                                                        <ul>
                                                            <li class="pro-cart-icon">
                                                                <form action="addPanier.php" method="get">
                                                                    <input type="hidden" name="id" value="<?=$value->id?>">
                                                                    <input type="hidden" name="qte" value="1">
                                                                    <button title="Add to Cart"><span></span>Add to Cart
                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li class="pro-wishlist-icon "><a href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_AJOUT , '&idProd=', $value->id ?>"
                                                                                              title="Wishlist"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item-details">
                                                <div class="product-item-name"><a
                                                            href="product-page.php?idProd=<?=$value->id?>"><?= $value->libelle ?></a></div>
                                                <div class="price-box"><span class="price">$<?= $value->prix ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                } else {
                                    if($idCategorie == $value->id_cat){
                                        ?>

                                        <div class="col-md-4 col-6 mb-30">
                                            <div class="product-item">
                                                <div class="product-image"><a href="product-page.php?idProd=<?=$value->id?>"> <img
                                                                src="images/<?= $dossierImage . "/" . $value->img ?>"
                                                                alt="Stylexpo"> </a>
                                                    <div class="product-detail-inner">
                                                        <div class="detail-inner-left align-center">
                                                            <ul>
                                                                <li class="pro-cart-icon">
                                                                    <form action="addPanier.php" method="get">
                                                                        <input type="hidden" name="id" value="<?=$value->id?>">
                                                                        <input type="hidden" name="qte" value="1">
                                                                        <button title="Add to Cart"><span></span>Add to Cart
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                <li class="pro-wishlist-icon "><a href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_AJOUT , '&idProd=', $value->id ?>"
                                                                                                  title="Wishlist"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="product-item-name"><a
                                                                href="product-page.php?idProd=<?=$value->id?>"><?= $value->libelle ?></a></div>
                                                    <div class="price-box"><span class="price">$<?= $value->prix ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                            }
                            ?>
                            <div class="row">
                                <div class="col-12">
                                   <!-- <div class="pagination-bar">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
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
