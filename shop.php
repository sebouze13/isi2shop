<?php
    $page_name = "SHOP";
    require_once  'views/header.php';

    if(array_key_exists("categ", $_GET)){
        $categorie = $_GET["categ"];
    } else {
        $categorie = "all";
    }
?>  
  <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Women</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="index.php">Home</a>/</li>
            <li><span>Women</span></li>
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
                  <li><a href="#">Clothing <span>(21)</span></a></li>
                  <li><a href="#">Shoes <span>(05)</span></a></li>
                  <li><a href="#">Jewellery <span>(10)</span></a></li>
                  <li><a href="#">Furniture <span>(12)</span></a></li>
                  <li><a href="#">Bags <span>(18)</span></a></li>
                  <li><a href="#">Accessories <span>(70)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Shop by</span></h3> 
              </div>
              <div class="sidebar-contant">
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                </div>
                <div class="size mb-20">
                  <div class="inner-title">Size</div>
                  <ul >
                    <li><a href="#">S (10)</a></li>
                    <li><a href="#">M (05)</a></li>
                    <li><a href="#">L (10)</a></li>
                    <li><a href="#">XL (08)</a></li>
                    <li><a href="#">XXL (05)</a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Color</div>
                  <ul>
                    <li><a href="#">Black <span>(0)</span></a></li>
                    <li><a href="#">Blue <span>(05)</span></a></li>
                    <li><a href="#">Brown <span>(10)</span></a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Manufacture</div>
                  <ul>
                    <li><a href="#">Augue congue <span>(0)</span></a></li>
                    <li><a href="#">Eu magna <span>(05)</span></a></li>
                    <li><a href="#">Ipsum sit <span>(10)</span></a></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-color">Refine</a> </div>
            </div>
            <div class="sidebar-box mb-40 d-none d-lg-block"> 
              <a href="#"> 
                <img src="images/left-banner.jpg" alt="Stylexpo"> 
              </a> 
            </div>
            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Best Selle</span>r</h3> 
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src="images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src="images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src="images/1.jpg"></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
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
                    <a href="shop-list.php">
                      <div class="list-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
                <div class="short-by float-right-sm"> <span>Sort By :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select  name="speed" id="sort-price" class="option-drop">
                        <option value="" selected="selected">Name (A to Z)</option>
                        <option value="">Name(Z - A)</option>
                        <option value="">price(low&gt;high)</option>
                        <option value="">price(high &gt; low)</option>
                        <option value="">rating(highest)</option>
                        <option value="">rating(lowest)</option>
                      </select>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="show-item right-side float-left-sm"> <span>Show :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select  name="speed" id="show-item" class="option-drop">
                        <option value="" selected="selected">24</option>
                        <option value="">12</option>
                        <option value="">6</option>
                      </select>
                    </fieldset>
                  </div>
                  <span>Per Page</span>
                  <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-listing">
            <div class="inner-listing">
              <div class="row">
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/1.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/2.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/3.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/4.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/5.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/6.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/7.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/8.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/9.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/10.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/11.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/12.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/13.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.php"> <img src="images/14.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6 mb-30">
                  <div class="product-item">
                    <div class="product-image"> <a href="product-page.php"> <img src="images/15.jpg" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon "><a href="wishlist.php" title="Wishlist"></a></li>
                            <li class="pro-compare-icon"><a href="compare.php" title="Compare"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="product-page.php">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="pagination-bar">
                    <ul>
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div>
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

<!-- FOOTER START -->
<?php
require_once  'views/footer.php';
?>
<!-- FOOTER END -->
