<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rich Wedding Event</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>

<body>
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Shop</a></li>
                        <li class="active"><a href="checkout.php">Book Event</a></li>
                        <li><a href="Contact Us.php">Contact Us</a></li>
                        <li><a href="About Us.php">About Us</a></li>
                        <!--<li><a href="#">Login</a></li>-->
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Booking Event</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area1">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-8">
                    <div class="product-content-right">
                            <form action="./Billing.php" class="checkout" method="POST" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>
                                            <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="billing_country">Select Event <abbr title="required" class="required"></abbr>
                                                </label>
                                                <select class="country_to_state country_select" id="billing_country" name="billing_country">
                                                    
                                                    <optgroup label="Wedding Event">
                                                        <option value="Simple Wedding Event"> Simple Wedding Event </option>
                                                        <option value="Rich Wedding Event"> Rich Wedding Event </option>
                                                        <option value="Classic Wedding Event"> Classic Wedding Event </option>
                                                        <option value="South Classic Event"> South Classic Event </option>
                                                        <option value="Bollywood Wedding Event"> Bollywood Wedding Event </option>
                                                    </optgroup>
                                                    <optgroup label="Birthday Event">
                                                        <option value="Simple Birthday Event "> Simple Birthday Event </option>
                                                        <option value="Gold Birthday Event"> Gold Birthday Event </option>
                                                        <option value="Rich Birthday Event"> Rich Birthday Event </option>
                                                        <option value="18+ Birthday Event"> 18+ Birthday Event </option>
                                                        <option value="Simple Ballon Birthday Event"> Simple Ballon Birthday Event </option>
                                                        <option value="Full Ballon Birthday Event"> Full Ballon Birthday Event </option>
                                                        <option value="Full Gold Ballon Birthday Event"> Full Gold Ballon Birthday Event </option>
                                                    </optgroup>
                                                    <optgroup label="Confernce Event">
                                                        <option value="Simple Confernce Event"> Simple Confernce Event </option>
                                                        <option value="Gold Confernce Event"> Gold Confernce Event </option>
                                                        <option value="Rich Confernce Event"> Rich Confernce Event </option>
                                                        <option value="Full Confernce Event"> Full Confernce Event </option>
                                                        <option value="Private Confernce Event"> Private Confernce Event </option>
                                                    </optgroup>
                                                </select>
                                            </p>

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">First Name <abbr title="required" class="required"></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="First Name" id="billing_first_name" name="billing_first_name" class="input-text ">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Last Name <abbr title="required" class="required"></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Last Name" id="billing_last_name" name="billing_last_name" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Address <abbr title="required" class="required"></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>

                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">City <abbr title="required" class="required"></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="City" id="billing_city" name="billing_city" class="input-text ">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state">State</label>
                                                <input type="text" id="billing_state" name="billing_state" placeholder="State / County" value="" class="input-text ">
                                            </p>
                                            <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                <label class="" for="billing_postcode">Pincode <abbr title="required" class="required"></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Pincode" id="billing_postcode" name="billing_postcode" class="input-text ">
                                            </p>

                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Email Id" id="billing_email" name="billing_email" class="input-text ">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Phone <abbr title="required" class="required"></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Phone Number" id="billing_phone" name="billing_phone" class="input-text ">
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                        </div>

                                    </div>

                                </div>

                                <h3 id="order_review_heading">Your order</h3>

                                <div id="order_review" style="position: relative;">
                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                                <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                <label for="payment_method_bacs">Cash On Deleviry </label>
                                                <div class="payment_box payment_method_bacs">
                                       
                                                </div>
                                            </li>
                                            <li class="payment_method_cheque">
                                                <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                <label for="payment_method_cheque">Cheque Payment </label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="form-row place-order">

                                            <input type="submit" name="Book" data-value="Place order" value="Book Event" class="button alt">
                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>


   <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Event<span>Empire</span></h2>
                        <p>"Event Empire" is the project management. Event management is the creation and development of small and/or large-scale personal or corporate events such as festivals, conferences, ceremonies, weddings, formal parties, concerts, or conventions.Event management system is used to manage all the activity related to event.</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">WEDDING EVENT</a></li>
                            <li><a href="#">CONFERRENCE EVENT</a></li>
                            <li><a href="#">BIRTHDAY EVENT</a></li>
                            <li><a href="#">COUPLE EVENT</a></li>
                      </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 uCommerce. All Rights Reserved. </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>