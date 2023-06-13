<?php include ('header.php')?>
<link rel="stylesheet" href="assets/product_list.css">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <H1>SUMMER OUTFITS</H1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="sort_fields_col">
                    <div class="sort_by container">
                              <div class="sort_by_header_container">
                              <span>Categories</span>
                              </div>
                              <div class="sorting_list">
                            <ul>
                              <li>
                                <a href="business_casual.php">
                                    <label>Business Casual</label>
                                </a>
                              </li>
                              <li>
                                <a href="boneless_hoodie.php">
                                    <label>Boneless Hoodie</label>
                                </a>
                              </li>
                              <li>
                                <a href="cream_polo.php">
                                    <label>Cream Polo</label>
                                </a>
                              </li>
                              <li>
                                <a href="summer_outfit.php">
                                    <label>Summer Outfits</label>
                                </a>
                              </li>
                              <li>
                                <a href="casual_date.php">
                                    <label>Casual Date Night</label>
                                </a>
                              </li>
                              <li>
                                <a href="vintage.php">
                                    <label>Vintage Outfits</label>
                                </a>
                              </li>
                            </ul>
                              </div>
                    </div>
                    <hr class="sort_hr">
                    <span>For UI purposes only. Not working</span>
                    <div class="sort_by container sort_by_rating">
                              <div class="sort_by_header_container">
                                  <span>rating</span>
                              </div>
                              <div class="star-rating-filter">
                                  <input type="checkbox" id="star-5" />
                                  <label for="star-5" class="star"> <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span> </label> & up
                                  <br>
                                  <input type="checkbox" id="star-4" />
                                  <label for="star-4" class="star"><span>&#9733;&#9733;&#9733;&#9733;</span>&#9733;</label> & up
                                  <br>
                                  <input type="checkbox" id="star-3" />
                                  <label for="star-3" class="star"><span>&#9733;&#9733;&#9733;</span>&#9733;&#9733;</label> & up
                                  <br>
                              </div>
                    </div>
                    <hr class="sort_hr">
                    <span>For UI purposes only. Not working</span>
                    <div class="sort_by container">
                          <div class="sort_by_header_container">
                              <span>Price</span>
                          </div>
                          <div class="sorting_list">
                            <ul>
                              <li>
                                <input type="checkbox" id="checkbox16" />
                                <label for="checkbox16">P0 - P250</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox17" />
                                <label for="checkbox17">P250 - P500</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox18" />
                                <label for="checkbox18">P500 - P750</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox19" />
                                <label for="checkbox19">750 - P1000</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox20" />
                                <label for="checkbox20">P1000+</label>
                              </li>
                            </ul>
                          </div>
                    </div>
                    <hr class="sort_hr">
                    <span>For UI purposes only. Not working</span>
                    <div class="sort_by container">
                          <div class="sort_by_header_container">
                              <span>Color</span>
                          </div>
                          <div class="sorting_list">
                            <ul>
                              <li>
                                <input type="checkbox" id="checkbox30" />
                                <label for="checkbox30">Army Green</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox31" />
                                <label for="checkbox31">Black Camo</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox32" />
                                <label for="checkbox32">Red</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox33" />
                                <label for="checkbox33">Yellow</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox34" />
                                <label for="checkbox34">Blue</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox34" />
                                <label for="checkbox34">Dark Blue</label>
                              </li>
                              <li>
                                <input type="checkbox" id="checkbox35" />
                                <label for="checkbox35">Purple</label>
                              </li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">

            <div id="product-overlay" class="overlay">
              <div class="overlay-content">
                <div class="card checkoutCard" id="checkoutoutCard">
                  <div class="card-header product_card_header">
                    <h3>Product Details</h3>
                    <span class="close-button" onclick="closeProductOverlay()">&times;</span>
                  </div>
                  <div class="card-body product_card_body">
                    <div class="container productDetails">
                      <h3 id="product-name"></h3> 
                      <p class="product-price" id="product-price"></p>
                    </div>
                    <?php
                    if (isset($_COOKIE['username'])) {
                        // User is logged in, display the username
                        $loggedInUser = $_COOKIE['username'];
                        echo '<p>Username: ' . $loggedInUser . '</p>';
                        ?>
                        <div class="checkoutDetails">
                            <label for="firstName">First Name:</label>
                            <input type="text" id="firstName"> <br>
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName"><br>
                            <label for="address">Address:</label>
                            <input type="text" id="address"><br>
                            <button class="checkout-button" onclick="placeOrder()">Checkout</button>
                        </div>
                        <?php
                    } else {
                        // User is not logged in, display the login link
                        echo '<p>Login to Checkout</p>';
                        echo '<a href="login.php" class="btn btn-primary">Login</a>';
                        echo '<p>You will be redirected to the home page after login</p>';
                    }
                    ?>
                  </div>
                </div>
                
                <div id="orderSuccess" class="order-success">
                  <div class="order-success-card">
                      <span style="font-size:30px;" class="close-button" onclick="closeProductOverlay()">&times;</span>
                    <div class="card-header product_card_header">
                      <h3>Order Successfully Placed!</h3>
                    </div>
                    <p style="text-align: center;">Thank you for your purchase! </p>
                  </div>
                </div>
              </div>
            </div>
                <div class="row product-list">
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s1.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 1</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 1', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s2.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 2</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 2', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s3.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 3</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 3', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s4.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 4</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 4', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s5.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 5</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 5', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s6.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 6</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 6', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s7.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 7</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 7', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s8.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 8</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 8', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s9.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 9</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 9', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 product-item">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12"><a class="product-image" href="#"><img src="assets/image/store/summer/s10.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <h2><a href="#">Product 10</a></h2>
                                </div>
                            </div>
                            <div class="pb-2 product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <a class="small-text" href="#">82 reviews</a></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6"><button class="btn btn-light" type="button" onclick="showProductDetails('Product 10', '' ,'P599.00')">Buy Now!</button></div>
                                        <div class="col-6">
                                            <p class="product-price">P599.00 </p>
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
    
  <?php include('footer.php')?>