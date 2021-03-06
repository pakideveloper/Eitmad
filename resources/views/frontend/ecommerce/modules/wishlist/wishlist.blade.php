<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
<head>
    <meta charset="utf-8">
    <title>Wishlist - Eitmad</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template" />
		<meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
		<meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{URL::to('public/frontend/ecommerce/assets')}}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{URL::to('public/frontend/ecommerce/assets')}}/favicon.ico" type="image/x-icon">
    <!--Master Slider Styles-->
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/style/masterslider.css" rel="stylesheet" media="screen">
    <!--Styles-->
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/css/styles.css" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="{{URL::to('public/frontend/ecommerce/assets')}}/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Color Switcher-->
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/modernizr.custom.js"></script>
    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/respond.js"></script>
    <![endif]-->
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
    <div class="color-switcher group animated">
    	<div class="toggle"><i class="fa fa-cog"></i></div>
    	<div class="color">
      	<a class="current" style="background-image:url(color-switcher/img/default.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="default"></a>
        <span>#2ba8db<br/>#a3c756</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme2.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="scheme2"></a>
        <span>#a1b0ca<br/>#e7807f</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme3.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="scheme3"></a>
        <span>#4bb5c1<br/>#bfa995</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme4.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="scheme4"></a>
        <span>#73cbbe<br/>#c7b07b</span>
      </div>
    </div><!--Color Switcher End-->
  
  	<!--Login Modal-->
    @include('frontend/ecommerce/include/login')
    <!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')
    <!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="{{URL::to('public/frontend/ecommerce/assets')}}/index.html">Home</a></li>
        <li>Wishlist</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Wishlist-->
      <section class="wishlist">
      	<div class="container">
        	<div class="row">
          
          	<!--Items List-->
          	<div class="col-lg-9 col-md-9">
            	<h2 class="title">Wishlist</h2>
            	<table class="items-list">
              	<tr>
                	<th>&nbsp;</th>
                  <th>Product name</th>
                  <th>Product price</th>
                </tr>
                <!--Item-->
                <tr class="item first">
                	<td class="thumb"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/shopping-cart-thumb-1.jpg" alt="Nikon D4S"/></a></td>
                  <td class="name"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html">Nikon D4S</a></td>
                  <td class="price">715,00 $</td>
                  <td class="button"><a class="btn btn-primary btn-sm" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="icon-shopping-cart"></i>Add to cart</a></td>
                  <td class="delete"><i class="icon-delete"></i></td>
                </tr>
                <!--Item-->
                <tr class="item first">
                	<td class="thumb"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/shopping-cart-thumb-2.jpg" alt="Nikkor 11-27.5"/></a></td>
                  <td class="name"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html">Nikkor</a></td>
                  <td class="price">715,00 $</td>
                  <td class="button"><a class="btn btn-primary btn-sm" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="icon-shopping-cart"></i>Add to cart</a></td>
                  <td class="delete"><i class="icon-delete"></i></td>
                </tr>
                <!--Item-->
                <tr class="item first">
                	<td class="thumb"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/shopping-cart-thumb-1.jpg" alt="Nikon D4S"/></a></td>
                  <td class="name"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html">Nikon D4S</a></td>
                  <td class="price">715,00 $</td>
                  <td class="button"><a class="btn btn-primary btn-sm disabled" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Out of stock</a></td>
                  <td class="delete"><i class="icon-delete"></i></td>
                </tr>
                <!--Item-->
                <tr class="item first">
                	<td class="thumb"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/shopping-cart-thumb-2.jpg" alt="Nikkor 11-27.5"/></a></td>
                  <td class="name"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html">Nikkor</a></td>
                  <td class="price">715,00 $</td>
                  <td class="button"><a class="btn btn-primary btn-sm" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="icon-shopping-cart"></i>Add to cart</a></td>
                  <td class="delete"><i class="icon-delete"></i></td>
                </tr>
                <!--Item-->
                <tr class="item first">
                	<td class="thumb"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/shopping-cart-thumb-1.jpg" alt="Nikon D4S"/></a></td>
                  <td class="name"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-single-item-v1.html">Nikon D4S</a></td>
                  <td class="price">715,00 $</td>
                  <td class="button"><a class="btn btn-primary btn-sm disabled" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Out of stock</a></td>
                  <td class="delete"><i class="icon-delete"></i></td>
                </tr>
              </table>
            </div>
            
            <!--Sidebar-->
            <div class="col-lg-3 col-md-3">
              <h3>Have a coupon?</h3>
              <form class="coupon" name="coupon-code" method="post">
                <div class="form-group">
                  <label class="sr-only" for="coupon-code">Enter coupon code</label>
                  <input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="Enter coupon code">
                </div>
                <input type="submit" class="btn btn-primary btn-sm btn-block" name="apply-coupon" value="Apply coupon">
              </form>
              <!--Top items-->
              <h3 class="space-top">Top items</h3>
            	<div class="top-item">
                <div class="price-label">715,00 $</div>
                <a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/offers/special-offer-1.jpg" alt="Special Offer"/></a>
                <div class="footer"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Nikkon D5300</a></div>
              </div>
            	<div class="top-item">
                <div class="price-label">715,00 $</div>
                <a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/offers/special-offer-2.jpg" alt="Special Offer"/></a>
                <div class="footer"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Nikkor AF-S</a></div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Wishlist Close-->
      
      <!--Catalog Grid-->
      <section class="catalog-grid">
      	<div class="container">
        	<h2 class="primary-color">Newcomers</h2>
          <div class="row">
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/7.jpg" alt="7"/></a>
                <div class="footer">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Nikon J4</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-twitter-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-google-plus-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/2.jpg" alt="2"/></a>
                <div class="footer">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Nikon Coolpix</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-twitter-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-google-plus-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/3.jpg" alt="3"/></a>
                <div class="footer">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Nikon WP-N3</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-twitter-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-google-plus-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/4.jpg" alt="4"/></a>
                <div class="footer">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Nikkor 10-30 VR</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-twitter-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-google-plus-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Catalog Grid Close-->
      
      <!--Brands Carousel Widget-->
      <section class="brand-carousel">
      	<div class="container">
        	<h2>Brands in our shop</h2>
          <div class="inner">
          	<a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/jquery.png" alt="jQuery"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/wp.png" alt="WordPress"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/woo.png" alt="WooCommerce"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/android.png" alt="Android"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/macgasm.png" alt="Macgasm"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a>
          </div>
        </div>
      </section><!--Brands Carousel Close-->
      
    </div><!--Page Content Close-->
    
    <!--Sticky Buttons-->
    <div class="sticky-btns">
    	<form class="quick-contact ajax-form" method="post" name="quick-contact">
      	<h3>Contact us</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
        <div class="form-group">
        	<label for="qc-name">Full name</label>
          <input class="form-control input-sm" type="text" name="name" id="qc-name" placeholder="Enter full name">
        </div>
        <div class="form-group">
        	<label for="qc-email">Email</label>
          <input class="form-control input-sm" type="email" name="email" id="qc-email" placeholder="Enter email">
        </div>
        <div class="form-group">
        	<label for="qc-message">Your message</label>
          <textarea class="form-control input-sm" name="message" id="qc-message" placeholder="Enter your message"></textarea>
        </div>
        <!-- Validation Response -->
        <div class="response-holder"></div>
        <!-- Response End -->
        <input class="btn btn-success btn-sm btn-block" type="submit" value="Send">
      </form>
    	<span id="qcf-btn"><i class="fa fa-envelope"></i></span>
      <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div><!--Sticky Buttons Close-->
    
    <!--Subscription Widget-->
    <section class="subscr-widget">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-8 col-sm-8">
            <h2 class="light-color">Subscribe to our news</h2>
            
            <!--Mail Chimp Subscription Form-->
            <form class="subscr-form" role="form" action="http://8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off">
              <div class="form-group">
                <label class="sr-only" for="subscr-name">Enter name</label>
                <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required>
                <button class="subscr-next"><i class="icon-arrow-right"></i></button>
              </div>
              <div class="form-group fff" style="display: none">
                <label class="sr-only" for="subscr-email">Enter email</label>
                <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_d704057a31" tabindex="-1" value=""></div>
                <button type="submit" id="subscr-submit"><i class="icon-check"></i></button>
              </div>
            </form>
            <!--Mail Chimp Subscription Form Close-->
            <p class="p-style2">Please fill the field before continuing</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1">
            <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
        </div>
      </div>
    </section><!--Subscription Widget Close-->
      
  	<!--Footer-->
     @include('frontend/ecommerce/include/footer')
    <!--Footer Close-->
    
    <!--Javascript (jQuery) Libraries and Plugins-->
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-1.11.1.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery.easing.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/bootstrap.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/smoothscroll.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.validate.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/icheck.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.placeholder.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.stellar.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.shuffle.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/lightGallery.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/masterslider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.nouislider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.js"></script>

    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:24 GMT -->
</html>
