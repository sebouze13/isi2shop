<?php
$page_name = "My cart";
require_once  'views/header.php';

require_once  'functions/bdManager.php';
require_once  'functions/constantes.php';
require_once  'classes/produit.php';

$panier = null;

if ( array_key_exists(IDUSER, $_SESSION)) {
    $panier = getPanier($_SESSION[IDUSER]);
}
?>
  
  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Shopping Cart</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index-2.html">Home</a>/</li>
            <li><span>Shopping Cart</span></li>
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
        <div class="col-12">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    if(count($panier) > 0 ){
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
                  <tr>
                    <td>
                      <a href="product-page.php">
                        <div class="product-image">
                          <img alt="Stylexpo" src="images/<?=$dossierImage."/".$produit->getImg()?>">
                        </div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title"> 
                        <a href="product-page.php"><?=$produit->getLibelle()?></a>
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box"> 
                            <span class="price">$<?=$produit->getPrix()?></span>
                          </div>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <select data-id="100" class="quantity_cart option-drop" name="quantity_cart">
                            <option selected="" value="<?=$value->qte?>"><?=$value->qte?></option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </fieldset>
                      </div>
                    </td>
                    <td>
                      <div class="total-price price-box"> 
                        <span class="price">$<?=$produit->getPrix()*$value->qte?></span>
                      </div>
                    </td>
                    <td>
                      <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i>
                    </td>
                  </tr>
                            <?php
                        }
                    }else{

                ?>
                  <tr>
                      <td>
                      </td>
                      <td>
                          <div class="product-title">
                              <p>No product in cart</p>
                          </div>
                      </td>
                      <td>
                      </td>
                      <td>
                      </td>
                      <td>
                      </td>
                  </tr>
                  <?php
                  }

                  ?>

                </tbody>
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
                <span><i class="fa fa-angle-left"></i></span>
                Continue Shopping
              </a> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="mt-30 right-side float-none-xs"> 
              <a class="btn btn-color">Update Cart</a> 
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mtb-30">
        <div class="row">
          <div class="col-md-6 mb-xs-40">
            <div class="estimate">
              <div class="heading-part mb-20">
                <h3 class="sub-heading">Estimate shipping and tax</h3>
              </div>
              <form class="full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-box select-dropdown mb-20">
                      <fieldset>
                        <select id="country_id" class="option-drop">
                          <option selected="" value="">Select Country</option>
                          <option value="1">India</option>
                          <option value="2">China</option>
                          <option value="3">Pakistan</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-box select-dropdown mb-20">
                      <fieldset>
                        <select id="state_id" class="option-drop">
                          <option selected="" value="1">Select State/Province</option>
                          <option value="2">---</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-box select-dropdown mb-20">
                      <fieldset>
                        <select id="city_id" class="option-drop">
                          <option selected="" value="1">Select City</option>
                          <option value="2">---</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cart-total-table commun-table">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Cart Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Item(s) Subtotal</td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">$160.00</span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td>
                        <div class="price-box"> 
                          <span class="price">$0.00</span> 
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Amount Payable</b></td>
                      <td>
                        <div class="price-box"> 
                          <span class="price"><b>$160.00</b></span> 
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-12">
            <div class="right-side float-none-xs"> 
              <a href="checkout.php" class="btn btn-color">Proceed to checkout
                <span><i class="fa fa-angle-right"></i></span>
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