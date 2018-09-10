<?php
require_once "functions/bdManager.php";
require_once "functions/constantes.php";

if(array_key_exists(CONNEXION_LOGIN, $_POST) && array_key_exists(CONNEXION_PASS, $_POST)){
    if(login($_POST[CONNEXION_LOGIN], $_POST[CONNEXION_PASS])){
        header("Location: index.html");
    }
}
?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from aaryaweb.info/html/stylexpo/stx002/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 12:58:55 GMT -->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Stylexpo</title>
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
<body >
<div class="se-pre-con"></div>
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
                  <option>Frence</option>
                  <option>German</option>
                </select>
                <select name="speed" class="currency option-drop">
                  <option selected="selected">USD</option>
                  <option>EURO</option>
                  <option>POUND</option>
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
                  <a href="login.php" title="Login">Login</a> or
                  <a href="register.php" title="Register">Register</a>
                  <div class="content-dropdown">
                    <ul>
                      <li class="login-icon"><a href="login.php" title="Login"><i class="fa fa-user"></i> Login</a></li>
                      <li class="register-icon"><a href="register.php" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                    </ul>
                  </div>
                </li>
                <li class="track-icon">
                  <a href="#" title="Track your order"><span></span> Track your order</a>
                </li>
                <li class="gift-icon">
                  <a href="#" title="Gift card"><span></span> Gift card</a>
                </li>
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
                <a class="navbar-brand page-scroll" href="index-2.html">
                  <img alt="Stylexpo" src="images/logo.png">
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
                    <option value="20">Electronics</option>
                    <option value="26">■ PC</option>
                    <option value="43">&nbsp;&nbsp;&nbsp;- Dell Inspiron</option>
                    <option value="44">&nbsp;&nbsp;&nbsp;- Hp Notebook</option>
                    <option value="47">&nbsp;&nbsp;&nbsp;- Sony Vio</option>
                    <option value="55">&nbsp;&nbsp;&nbsp;- Samsung Tablet</option>
                    <option value="27">■ Mac</option>
                    <option value="48">&nbsp;&nbsp;&nbsp;- Desktop Mac</option>
                    <option value="49">&nbsp;&nbsp;&nbsp;- Laptop Mac</option>
                    <option value="50">&nbsp;&nbsp;&nbsp;- Samsung Mac</option>
                    <option value="38">&nbsp;&nbsp;&nbsp;- Android tablets</option>
                    <option value="51">■ Laptops</option>
                    <option value="52">&nbsp;&nbsp;&nbsp;- Accer laptop</option>
                    <option value="56">&nbsp;&nbsp;&nbsp;- apple ipad</option>
                    <option value="53">&nbsp;&nbsp;&nbsp;- HP Laptop</option>
                    <option value="54">&nbsp;&nbsp;&nbsp;- DELL Laptop</option>
                    <option value="18">jewellery</option>
                    <option value="25">Components</option>
                    <option value="29">■ Mice and Trackballs</option>
                    <option value="28">■ Monitors</option>
                    <option value="35">&nbsp;&nbsp;&nbsp;- Desktop</option>
                    <option value="36">&nbsp;&nbsp;&nbsp;- LED</option>
                    <option value="30">■ Printers</option>
                    <option value="31">■ Scanners</option>
                    <option value="32">■ Web Cameras</option>
                    <option value="57">Books</option>
                    <option value="17">Interior</option>
                    <option value="24">Fashion</option>
                    <option value="33">House Hold</option>
                    <option value="34">Accessories</option>
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
                <li class="compare-icon">
                  <a href="compare.html">
                    <span></span>
                  </a>
                </li>
                <li class="wishlist-icon">
                  <a href="wishlist.html">
                    <span></span>
                  </a>
                </li>
                <li class="cart-icon"> <a href="#"> <span> <small class="cart-notification">2</small> </span> </a>
                  <div class="cart-dropdown header-link-dropdown">
                    <ul class="cart-list link-dropdown-list">
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/1.jpg"></a>
                          <div class="media-body"> <span><a href="#">Black African Print Skirt</a></span>
                            <p class="cart-price">$14.99</p>
                            <div class="product-qty">
                              <label>Qty:</label>
                              <div class="custom-qty">
                                <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/2.jpg"></a>
                          <div class="media-body"> <span><a href="#">Black African Print Skirt</a></span>
                            <p class="cart-price">$14.99</p>
                            <div class="product-qty">
                              <label>Qty:</label>
                              <div class="custom-qty">
                                <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                    <div class="clearfix"></div>
                    <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
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
                  <li class="track-icon">
                    <a title="Track your order"><span></span> Track your order</a>
                  </li>
                  <li class="gift-icon">
                    <a href="#" title="Gift card"><span></span> Gift card</a>
                  </li>
                </ul>
              </div>
              <ul class="nav navbar-nav">
                <li class="level dropdown"> <span class="opener plus"></span> <a href="shop.php" class="page-scroll">Women</a>
                  <div class="megamenu mobile-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2 "> <a href="shop.php"><span>Women Cloths</span></a>
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.php"><span>■</span>Dresses</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Jeans</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Skirts</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Tops</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                          </ul>
                        </li>
                        <li class="level2"> <a href="shop.php"><span>Women Fashion</span></a>
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Jeans</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Skirts</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Dresses</a></li>
                          </ul>
                        </li>
                        <li class="level2"> <a href="shop.php"><span>Juniors kid</span></a>
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="shop.php"><span>■</span>Sleepwear</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Jeans</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Dresses</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                          </ul>
                        </li>
                        <li class="level2">
                          <div class="megamenu-inner-bottom mt-20 d-none d-lg-block">
                            <a href="shop.php">
                              <img src="images/drop_banner.jpg" alt="Stylexpo">
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="level dropdown"> <span class="opener plus"></span> <a href="shop.php" class="page-scroll">Men</a>
                  <div class="megamenu full mobile-sub-menu">
                    <div class="container">
                      <div class="megamenu-inner">
                        <div class="megamenu-inner-top">
                          <div class="row">
                            <div class="col-lg-10 left-p">
                              <div class="row">
                                <div class="col-lg-4 level2"> <a href="shop.php"><span>Men Fashion</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-4 level2"> <a href="shop.php"><span>Juniors kid</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-4 level2"> <a href="shop.php"><span>Men Clothings</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Chinos & Trousers</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Underwear</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-6 d-none d-lg-block mt-30">
                                  <div class="sub-menu-img">
                                    <a href="shop.php"> 
                                      <img src="images/drop_banner1.jpg" alt="Stylexpo"> 
                                    </a>
                                  </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block mt-30">
                                  <div class="sub-menu-img">
                                    <a href="shop.php"> 
                                      <img src="images/drop_banner2.jpg" alt="Stylexpo"> 
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 level2 d-none d-lg-block"> 
                              <div class="sub-menu-slider">
                                <div class="row">
                                    <div class="owl-carousel sub_menu_slider">
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> <img src="images/1.jpg" alt="Stylexpo"> </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>  
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> <img src="images/2.jpg" alt="Stylexpo"> </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>              
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> <img src="images/3.jpg" alt="Stylexpo"> </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>  
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> <img src="images/4.jpg" alt="Stylexpo"> </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>                  
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span> 
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> <img src="images/5.jpg" alt="Stylexpo"> </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
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
                  </div>
                </li>
                <li class="level"><a href="shop.php" class="page-scroll">Juniors <div class="menu-label"><span class="hot-menu"> Hot </span></div> </a></li>
                <li class="level dropdown"> <span class="opener plus"></span> <a href="shop.php" class="page-scroll">Kids</a>
                  <div class="megamenu mobile-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2"> <a href="shop.php"><span>Kids Fashion</span></a>
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="level"><a href="shop.php" class="page-scroll">Baby <div class="menu-label"><span class="new-menu"> New </span></div></a></li>
                <li class="level dropdown"> <span class="opener plus"></span> <a href="#" class="page-scroll">Pages</a>
                  <div class="megamenu mobile-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="about.html"><span>■</span>About Us</a></li>
                            <li class="level3"><a href="account.html"><span>■</span>Account</a></li>
                            <li class="level3"><a href="checkout.html"><span>■</span>Checkout</a></li>
                            <li class="level3"><a href="compare.html"><span>■</span>Compare</a></li>
                            <li class="level3"><a href="wishlist.html"><span>■</span>Wishlist</a></li>
                            <li class="level3"><a href="contact.html"><span>■</span>Contact</a></li>
                            <li class="level3"><a href="404.html"><span>■</span>404 Error</a></li>
                            <li class="level3"><a href="blog.html"><span>■</span>Blog</a></li>
                            <li class="level3"><a href="single-blog.html"><span>■</span>Single Blog</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="header-top mobile">
                <div class="">
                  <div class="row">
                    <div class="col-12">
                      <div class="top-link top-link-left select-dropdown">
                        <fieldset>
                          <select name="speed" class="country option-drop">
                            <option selected="selected">English</option>
                            <option>Frence</option>
                            <option>German</option>
                          </select>
                          <select name="speed" class="currency option-drop">
                            <option selected="selected">USD</option>
                            <option>EURO</option>
                            <option>POUND</option>
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="top-link right-side">
                        <div class="help-num" ><i class="fa fa-phone"> </i> Need Help? : 03 233 455 55</div>
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
              <div class="help-num" ><i class="fa fa-phone"> </i> Need Help? : 03 233 455 55</div>
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
          <li class="account">
            <a class="popup-with-form" href="#account_popup"><span class="icon"></span><span class="icon-text">Account</span></a>
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
              <li class="level sub-megamenu">
                <span class="opener plus"></span>
                <a href="shop.php" class="page-scroll"><i class="fa fa-female"></i>Fashion (10)</a>
                <div class="megamenu  mega-sub-menu">
                  <div class="megamenu-inner-top">
                    <ul class="sub-menu-level1">
                      <li class="level2">
                        <ul class="sub-menu-level2 ">
                          <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Skirts</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Tops</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Sleepwear</a></li>
                          <li class="level3"><a href="shop.php"><span>■</span>Jeans</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="level">
                <a href="shop.php" class="page-scroll"><i class="fa fa-camera-retro"></i>Cameras (70)</a>
              </li>
              <li class="level">
                <a href="shop.php" class="page-scroll"><i class="fa fa-desktop"></i>computers (10)</a>
              </li>
              <li class="level sub-megamenu">
                <span class="opener plus"></span>
                <a href="shop.php" class="page-scroll"><i class="fa fa-clock-o"></i>Wathches (15)</a>
                  <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.php"><span>■</span>Dresses</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Jeans</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Skirts</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Tops</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sleepwear</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Jeans</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
              </li>
              <li class="level">
                <a href="shop.php" class="page-scroll"><i class="fa fa-shopping-bag"></i>Bags (18)</a>
              </li>
              <li class="level sub-megamenu ">
                <span class="opener plus"></span>
                <a href="shop.php" class="page-scroll"><i class="fa fa-tablet"></i>Smartphones (20)</a>
                <div class="megamenu mega-sub-menu">
                    <div class="megamenu-inner-top">
                      <ul class="sub-menu-level1">
                        <li class="level2">
                          <ul class="sub-menu-level2">
                            <li class="level3"><a href="shop.php"><span>■</span>Dresses</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Jeans</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Skirts</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Tops</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sleepwear</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Jeans</a></li>
                          </ul>
                        </li>
                        <li class="level2">
                          <ul class="sub-menu-level2 ">
                            <li class="level3"><a href="shop.php"><span>■</span>Blazer & Coat</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Sport Shoes</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Phone Cases</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Trousers</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Purse</a></li>
                            <li class="level3"><a href="shop.php"><span>■</span>Wallets</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
              </li>
              <li class="level">
                <a href="shop.php" class="page-scroll"><i class="fa fa-heart"></i>Software</a>
              </li>
              <li class="level "><a href="shop.php" class="page-scroll"><i class="fa fa-headphones"></i>Headphone (12)</a></li>
              <li class="level">
                <a href="shop.php" class="page-scroll"><i class="fa fa-microphone"></i>Accessories (70)</a>
              </li>
              <li class="level"><a href="shop.php" class="page-scroll"><i class="fa fa-bolt"></i>Printers & Ink</a></li>
              <li class="level"><a href="shop.php" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
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
                <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                  <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/1.jpg"></a>
                    <div class="media-body"> <span><a href="#">Black African Print Skirt</a></span>
                      <p class="cart-price">$14.99</p>
                      <div class="product-qty">
                        <label>Qty:</label>
                        <div class="custom-qty">
                          <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                  <div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/2.jpg"></a>
                    <div class="media-body"> <span><a href="#">Black African Print Skirt</a></span>
                      <p class="cart-price">$14.99</p>
                      <div class="product-qty">
                        <label>Qty:</label>
                        <div class="custom-qty">
                          <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
              <div class="clearfix"></div>
              <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
            </div>
          </div>
        </div>
        <div id="account_popup" class="white-popup-block mfp-hide popup-position">
          <div class="popup-title">
            <h2 class="main_title heading"><span>Account</span></h2>
          </div>
          <div class="popup-detail">
            <div class="row">
              <div class="col-lg-4">
                <a href="account.html">
                  <div class="account-inner mb-30">
                    <i class="fa fa-user"></i><br/>
                    <span>Account</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="register.php">
                  <div class="account-inner mb-30">
                    <i class="fa fa-user-plus"></i><br/>
                    <span>Register</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="cart.html">
                  <div class="account-inner mb-30">
                    <i class="fa fa-shopping-bag"></i><br/>
                    <span>Shopping</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="account.html#step4">
                  <div class="account-inner">
                    <i class="fa fa-key"></i><br/>
                    <span>Change Pass</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="account.html#step3">
                  <div class="account-inner">
                    <i class="fa fa-history"></i><br/>
                    <span>history</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="login.php">
                  <div class="account-inner">
                    <i class="fa fa-share-square-o"></i><br/>
                    <span>log out</span>
                  </div>
                </a>
              </div>
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
  
  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Login</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index-2.html">Home</a>/</li>
            <li><span>Login</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END --> 

  <!-- CONTAIN START -->
  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8 ">
              <form class="main-form full" method="post" action="<?= $_SERVER['PHP_SELF']?>">
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Customer Login</h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for=<?=CONNEXION_LOGIN?>>Email address</label>
                      <input id=<?=CONNEXION_LOGIN?> name=<?=CONNEXION_LOGIN?> type="email" required placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for=<?=CONNEXION_PASS?>>Password</label>
                      <input id=<?=CONNEXION_PASS?> name=<?=CONNEXION_PASS?> type="password" required placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="check-box left-side"> 
                      <span>
                        <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                        <label for="remember_me">Remember Me</label>
                      </span>
                    </div>
                    <button type="submit" class="btn-color right-side">Log In</button>
                  </div>
                  <div class="col-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="#">Forgot your password?</a>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="new-account align-center mt-20"> <span>New to Stylexpo?</span> <a class="link" title="Register with Stylexpo" href="register.php">Create New Account</a> </div>
                  </div>
                </div>
              </form>
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

  <!-- FOOTER START -->
  <div class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-middle">
          <div class="row">
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">address<span></span></h3>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p>150-A Appolo aprtment, opp. Hopewell Junction, <br>Allen st Road, new york-405001.</p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope"> </i>
                    <p> <a href="#">infoservices@stylexpo.com </a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <p>(+91) 9834567890</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Help <span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="#">Gift Cards</a></li>
                  <li><a href="#">Order Status</a></li>
                  <li><a href="#">Free Shipping</a></li>
                  <li><a href="#">Return & Exchange </a></li>
                  <li><a href="#">International</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Guidance <span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="#"> Delivery information</a></li>
                  <li><a href="#"> Privacy Policy</a></li>
                  <li><a href="#"> Terms & Conditions</a></li>
                  <li><a href="#"> Contact</a></li>
                  <li><a href="#"> Sitemap</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Information <span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="#">Gift Cards</a></li>
                  <li><a href="#">Order Status</a></li>
                  <li><a href="#">Free Shipping</a></li>
                  <li><a href="#">Return & Exchange </a></li>
                  <li><a href="#">International</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer-bottom ">
          <div class="row mtb-30">
            <div class="col-lg-6 ">
              <div class="copy-right ">© 2018  All Rights Reserved. Design By <a href="#">Aaryaweb</a></div>
            </div>
            <div class="col-lg-6 ">
              <div class="footer_social pt-xs-15 center-sm">
                <ul class="social-icon">
                  <li><div class="title">Follow us on :</div></li>
                  <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                  <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                  <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                  <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                  <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr>
          <div class="row align-center mtb-30 ">
            <div class="col-12 ">
              <div class="site-link">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Customer </a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Policy </a></li>
                  <li><a href="#">Accessibility</a></li>
                  <li><a href="#">Directory </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row align-center">
            <div class="col-12 ">
              <div class="payment">
                <ul class="payment_icon">
                  <li class="visa"><a href="#"><img src="images/pay1.png" alt="Stylexpo"></a></li>
                  <li class="discover"><a href="#"><img src="images/pay2.png" alt="Stylexpo"></a></li>
                  <li class="paypal"><a href="#"><img src="images/pay3.png" alt="Stylexpo"></a></li>
                  <li class="vindicia"><a href="#"><img src="images/pay4.png" alt="Stylexpo"></a></li>
                  <li class="atos"><a href="#"><img src="images/pay5.png" alt="Stylexpo"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div class="scrollup"></div>
  </div>
  <!-- FOOTER END -->  
</div>
<script src="js/jquery-1.12.3.min.js"></script> 
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>  
<script src="js/jquery.downCount.js"></script>
<script src="js/jquery-ui.min.js"></script> 
<script src="js/fotorama.js"></script>
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/owl.carousel.min.js"></script>  
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from aaryaweb.info/html/stylexpo/stx002/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 12:58:55 GMT -->
</html>
