<?php
$page_name = "My wishlist";
require_once  'views/header.php';
require_once  'functions/bdManager.php';
require_once  'classes/produit.php';

$prodWish = getAllFavoris();

?>

    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Wishlist</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="index.php">Home</a>/</li>
                        <li><span>Wishlist</span></li>
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
                <div class="col-12 ">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Descriotion</th>
                                    <th>Price</th>
                                    <th>Stock Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

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
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="product-page.php?idProd=<?=$produit->id?>">
                                                    <div class="product-image"><img alt="Stylexpo" src="images/<?=$dossierImage . '/' . $produit->img?>"></div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-title">
                                                    <a href="product-page.php"><?=$produit->libelle?></a>
                                                </div>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <div class="base-price price-box"><span class="price">$<?=$produit->prix?></span></div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="total-price price-box">
                                                        <span class="price">
                                                            <?php if($produit->qte_dispo > 0){
                                                                echo 'In Stock';
                                                            }else{
                                                                echo'Out of Stock';
                                                            }?>
                                                        </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="<?= $_SERVER['PHP_SELF'],'?' ,OP_NAME , '=' , OP_RETRAIT , '&idProd=', $produit->id ?>"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <?php
                                    }
                                }else{

                                    ?>
                                    <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="product-title">
                                                <p>No product in wishlist</p>
                                            </div>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <?php
                                }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-30">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-30">
                            <a href="shop.php" class="btn btn-color">
                                <span><i class="fa fa-angle-left"></i></span>Continue Shopping
                            </a>
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