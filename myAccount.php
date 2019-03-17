<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge"/>
  <link rel="shortcut icon" href="img/favicon.png" type=""/>
  <title> SAUNDH || My Account  </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/aos.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/footer.css"/>
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="css/responsive.css" />
   <!--[if lt IE 8]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->  
</head>
<body class="product-details-page">

<!-- header area start -->
 <?php @include("include/header.php") ?>
<!-- header area end -->

<section class="main_section">
   <section class="my_accounts">
      <div class="container">
        <div class="row">
          <h2> Welcome Shivendra</h2>
          <div class="accounts_tab">
             <ul>
                <li class="active"><a data-toggle="tab" href="#profile">MY PROFILE</a></li>
                <li><a data-toggle="tab" href="#address">MY ADDRESSES</a></li>
                <li><a data-toggle="tab" href="#purchase">PURCHASE HISTORY</a></li>
                <li><a data-toggle="tab" href="#returns">RETURN ORDERS</a></li>
                <li><a data-toggle="tab" href="#whislist">MY WISHLIST</a></li>
                <hr>
             </ul>
          </div>
  
        <div class="select_mobile_section">
          <select class="mob_select" id="show" onchange="change()">
            <option value="0">MY PROFILE</option>
            <option value="1">MY ADDRESSES </option>
            <option value="2">PURCHASE HISTORY</option>
            <option value="3">RETURN ORDERS</option>
            <option value="4">MY WISHLIST</option>
          </select>
        </div>

    
         <div class="view_accounts_tab">

            <!--- profile_section area-->
             <div  id="profile" class="profile_section active">
                <div class="profile_edit">
                  <div>
                     <h2>Personal Information:</h2>
                     <p>Name:<span> Mr. shivendra Sinha</span></p>
                     <p>Date of Birth:<span> 20/02/1993</span></p>
                     <p>Gender:<span> Male</span></p>
                     <p>Country:<span> India</span></p>
                  </div>
                  <div>   
                     <h2>Contact Details:</h2>
                     <p>Phone No.:<span> +91-7760714168</span></p>
                     <p>E mail:<span> shivendra.lamppost@gmail.com</span></p>
                  </div>
                  <div class="pswd">     
                     <h2>Password:</h2>
                     <p>XXXXXXXXXXXXXXX</p>
                  </div>    
                     <button><a href="javascript:void(0);">Edit Personal  Details</a></button>
                </div> 
                <div class="profile_edit2">
                    <h2>Personal Information:</h2>
                    <form>
                      <div class="form-group">
                         <label>Title</label>
                         <select>
                           <option>Select</option>
                         </select>
                       </div>
                       <div class="form-group">
                         <label>Name</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Surname</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Date of Birth</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Gender</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Country</label>
                         <input type="text" />
                       </div>
                    </form>

                    <h2>Contact Details:</h2>
                    <form>
                       <div class="form-group code_no">
                         <label>Code</label>
                         <input type="text" />
                       </div>
                       <div class="form-group phone_no">
                         <label>Phone No.</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>E-mail</label>
                         <input type="E-mail" />
                       </div>
                    </form>

                    <h2>Password:</h2>
                    <form>
                       <div class="form-group">
                         <label>Current Password</label>
                         <input type="Password" />
                       </div>
                       <div class="form-group">
                         <label>New Password</label>
                         <input type="Password" />
                       </div>
                       <div class="form-group">
                         <label>Confirm New Password</label>
                         <input type="password" />
                       </div>
                    </form>

                    <button><a href="javascript:void(0);">Save Details</a></button>
                </div>  
             </div>

             <!--- address_section area-->
             <div id="address" class="address_section">
                 <div class="add_address_btn"><button><a href="javascript:void(0);">+ Add new Address</a></button></div>
                 <div class="addrsee_form">
                    <h2>Add a new Address</h2>
                    <form>
                      <div class="form-group">
                         <label>Title</label>
                         <select>
                           <option>Select</option>
                         </select>
                       </div>
                       <div class="form-group">
                         <label>Name</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Surname</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>E - mail</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Mobile No.</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Address line 1</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Address line 2</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>City</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>Zip code</label>
                         <input type="text" />
                       </div>
                       <div class="form-group">
                         <label>State</label>
                         <input type="text" />
                       </div>
                       <div class="form-group address_select">
                         <label>Country</label>
                         <select>
                           <option>Select</option>
                         </select>
                       </div>
					   <div class="form-group address_save">
                          <button>Save</button>
                       </div>
                    </form>
                 </div>

                 <h2 class="addresse_h2">Your saved addresses</h2>

                 <div class="address1">
                    <div>
                       <p>Address 1</p>
                       <h2>Shivendra Sinha</h2>
                       <span>B- 131, B - Block, Sector 50, Noida, UP, India - 201301</span>
                    </div>
                    <p><i>Edit Saved details</i> <span>Delete</span></p>
                 </div>
                 <div class="address1">
                    <div>
                       <p>Address 1</p>
                       <h2>Shivendra Sinha</h2>
                       <span>B- 131, B - Block, Sector 50, Noida, UP, India - 201301</span>
                    </div>
                    <p><i>Edit Saved details</i> <span>Delete</span></p>
                 </div>
                 <div class="address1">
                    <div>
                       <p>Address 1</p>
                       <h2>Shivendra Sinha</h2>
                       <span>B- 131, B - Block, Sector 50, Noida, UP, India - 201301</span>
                    </div>
                    <p><i>Edit Saved details</i> <span>Delete</span></p>
                 </div>
                 <div class="address1">
                    <div>
                       <p>Address 1</p>
                       <h2>Shivendra Sinha</h2>
                       <span>B- 131, B - Block, Sector 50, Noida, UP, India - 201301</span>
                    </div>
                    <p><i>Edit Saved details</i> <span>Delete</span></p>
                 </div>
             </div>

            <!--- purchase_section area-->
             <div id="purchase" class="purchase_section"> 
                <div class="purchase_area purchase_area1">
                  <div class="purchase_top">
                      <div class="purchase_top1">
                          <h3>ORDER No.: 123456789</h3>
                          <p>Placed on Thursday, 6th September, 2018 at 6:38pm</p>
                          <h3>TOTAL AMOUNT: <i class="fa fa-rupee"></i>5499.00</h3>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Order details</a>
                      </div>
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                          <a href="javascript:void(0);">Cancel Item</a>
                      </div>
                      <div class="purchase_mid3">      
                         <a href="javascript:void(0);">Cancel Item</a> 
                         <p>Status: <span>PROCESSING</span></p>
                      </div>
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                          <a href="javascript:void(0);">Return Item</a>
                      </div>
                      <div class="purchase_mid3 purchase_mid3_delivery">
                         <a href="javascript:void(0);">Return Item</a> 
                         <p>Status: <span>DELIVERED</span> <span>On Thursday,6th September, 2018</span></p> 
                         
                      </div>
                  </div>

                  <div class="purchase_top purchase_bottom">
                      <div class="purchase_top1">
                          <h3>PAYMENT MODE: <span>Cash on Delivery</span></h3>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Track Order</a>
                      </div>
                  </div>
                </div>  
                
                <div class="purchase_area purchase_area2">
                  <div class="purchase_top">
                      <div class="purchase_top1">
                          <h3>ORDER No.: 123456789</h3>
                          <p>Placed on Thursday, 6th September, 2018 at 6:38pm</p>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Request invoice</a>
                      </div>
                  </div>
                  <div class="purchase_area2_mid purchase_area2_mid1">
                     <div class="order_details_content">
                         <h3>Order Details:</h3>
                         <p>Sub total:<span><i class="fa fa-rupee"></i>6400.00</span></p>
                         <p>Discounts:<span><i class="fa fa-rupee"></i>0.00</span></p>
                         <p>Coupon Discount:<span><i class="fa fa-rupee"></i>0.00</span></p>
                         <p>IGST:<span><i class="fa fa-rupee"></i>240.00</span></p>
                         <p>Shipping Charge:<span><i class="fa fa-rupee"></i>240.00</span></p>
                         <p class="order_g_total"><b>Grand Total:<span><i class="fa fa-rupee"></i>6880.00</span></b></p>
                         <p><b>Payment Mode: Cash on Delivery</b></p>
                     </div>
                     <div class="shipping_details_content">
                        <h3>Shipping Details:</h3>
                        <h4>Address:</h4>
                        <p>Mr. Shivendra Sinha B- 131, B - Block, Sector 50, Noida, Uttar Pradesh, India - 201301</p>
                        <h4>Contact Details:</h4>
                        <p>+91-7760714168 <span>shivendra.lamppost@gmail.com</span></p>
                     </div>
                  </div>
                  <div class="purchase_area2_mid slide_section1">
                    <h3>ITEM 1:</h3>
                    <div class="purchase_mid">
                        <div class="purchase_mid1">
                          <img src="img/discount2.jpg" class="img-responsive">
                        </div>
                        <div class="purchase_mid2">
                            <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                            <p>Product Code: 241565325</p>
                            <p>Color: Grey</p>
                            <p>Size: M</p>
                            <a href="javascript:void(0);">Cancel Item</a>
                        </div>
                        <div class="purchase_mid3">
                           <a href="javascript:void(0);">Cancel Item</a> 
                           <p>Status: <span>PROCESSING</span></p>
                        </div>
                        <div class="tracking_details">
                          <h3>SHOW TRACKING DETAILS <i class="fa fa-angle-down"></i></h3>
                        </div>
                        <div class="tracking_details2">
                           <p><i>Thu, 14 Sep 2018</i><b></b> <span>Order Delivered</span></p>
                           <p><i>Sat, 8 Sep 2018</i><b></b> <span>Order Shipped <span>Tracking Id: 123456789 Courier partner: <a href="javascriptvoild(0);">Smart Ship</a></span></p>
                           <p><i>Sat, 8 Sep 2018</i><b></b> <span>Order Packed</span></p>
                           <p><i>Thu, 6 Sep 2018 18:38:50</i><b></b> <span>Order Placed</span></p>
                        </div>
                    </div>
                  </div> 
                  
                  <div class="purchase_area2_mid slide_section2">
                    <h3>ITEM 2:</h3>
                    <div class="purchase_mid">
                        <div class="purchase_mid1">
                          <img src="img/discount2.jpg" class="img-responsive">
                        </div>
                        <div class="purchase_mid2">
                            <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                            <p>Product Code: 241565325</p>
                            <p>Color: Grey</p>
                            <p>Size: M</p>
                            <a href="javascript:void(0);">Return Item</a>
                        </div>
                        <div class="purchase_mid3 purchase_mid3_delivery">
                           <a href="javascript:void(0);">Return Item</a> 
                           <p>Status: <span>DELIVERED</span> <span>On Thursday,6th September, 2018</span></p> 
                        </div>
                        <div class="tracking_details">
                          <h3>SHOW TRACKING DETAILS <i class="fa fa-angle-down"></i></h3>
                        </div>
                        <div class="tracking_details2">
                           <p><i>Thu, 14 Sep 2018</i><b></b> <span>Order Delivered</span></p>
                           <p><i>Sat, 8 Sep 2018</i><b></b> <span>Order Shipped <span>Tracking Id: 123456789 Courier partner: <a href="javascriptvoild(0);">Smart Ship</a></span></p>
                           <p><i>Sat, 8 Sep 2018</i><b></b> <span>Order Packed</span></p>
                           <p><i>Thu, 6 Sep 2018 18:38:50</i><b></b> <span>Order Placed</span></p>
                        </div>
                    </div>
                  </div>  
                </div>


             </div>

            <!--- return_orders_section area-->
             <div id="returns" class="return_orders_section">  
                <div class="purchase_area">
                  <div class="purchase_top">
                      <div class="purchase_top1">
                          <h3>ORDER No.: 123456789</h3>
                          <p>Placed on Thursday, 6th September, 2018 at 6:38pm</p>
                          <h3>TOTAL AMOUNT: <i class="fa fa-rupee"></i>5499.00</h3>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Order details</a>
                      </div>
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                      </div>
                      <div class="purchase_mid3">
                         <p>Status: <span>PROCESSING</span></p>
                      </div>
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                      </div>
                      <div class="purchase_mid3 purchase_mid3_delivery">
                         <p>Status: <span>RETURNED</span></p> 
                      </div>
                  </div>

                  <div class="purchase_top purchase_bottom">
                      <div class="purchase_top1">
                          <h3>PAYMENT MODE: <span>Cash on Delivery</span></h3>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Track Order</a>
                      </div>
                  </div>
                </div>   

                <div class="purchase_area order_area">
                  <div class="purchase_top">
                      <div class="purchase_top1">
                          <h3>ORDER No.: 123456789</h3>
                          <p>Placed on Thursday, 6th September, 2018 at 6:38pm</p>
                          <h3>TOTAL AMOUNT: <i class="fa fa-rupee"></i>5499.00</h3>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Order details</a>
                      </div>
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                      </div>
                      <div class="purchase_mid3 purchase_mid3_delivery">
                         <p>Status: <span>RETURNED</span></p>
                      </div>
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                      </div>
                      <div class="purchase_mid3 purchase_mid3_delivery">
                         <p>Status: <span>RETURNED</span></p> 
                      </div>
                  </div>

                  <div class="purchase_top purchase_bottom">
                      <div class="purchase_top1">
                          <h3>PAYMENT MODE: <span>Cash on Delivery</span></h3>
                      </div>
                      <div class="purchase_top2">
                         <a href="javascript:void(0);">Track Order</a>
                      </div>
                  </div>
                </div>  
             </div>


              <!--- wishlist_orders_section area-->
             <div id="whislist" class="wishlist_orders_section">  
                <div class="purchase_area">
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                          <span class="whislist_remove"><a href="javascript:void(0);"><i class="fa fa-trash"></i> Remove</a></span>
                          <span>
                             <select>
                               <option>Select Size</option>
                             </select>
                          </span>
                          <span><a href="javascript:void(0);">Add to Cart</a></span>
                      </div>
                      <div class="whislist_mid3 purchase_mid2"> 
                           <span class="whislist_remove"><a href="javascript:void(0);"><i class="fa fa-trash"></i> Remove</a></span>
                          <span>
                             <select>
                               <option>Select Size</option>
                             </select>
                          </span>
                          <span><a href="javascript:void(0);">Add to Cart</a></span>
                      </div>  
                  </div>
                  <div class="purchase_mid">
                      <div class="purchase_mid1">
                        <img src="img/discount2.jpg" class="img-responsive">
                      </div>
                      <div class="purchase_mid2">
                          <h2>Women Grey Suit with Duppatta <span><i class="fa fa-rupee"></i> 2300</span></h2>
                          <p>Product Code: 241565325</p>
                          <p>Color: Grey</p>
                          <p>Size: M</p>
                          <span class="whislist_remove"><a href="javascript:void(0);"><i class="fa fa-trash"></i> Remove</a></span>
                          <span>
                             <select>
                               <option>Select Size</option>
                             </select>
                          </span>
                          <span><a href="javascript:void(0);">Add to Cart</a></span>
                      </div>
                      <div class="whislist_mid3 purchase_mid2"> 
                           <span class="whislist_remove"><a href="javascript:void(0);"><i class="fa fa-trash"></i> Remove</a></span>
                          <span>
                             <select>
                               <option>Select Size</option>
                             </select>
                          </span>
                          <span><a href="javascript:void(0);">Add to Cart</a></span>
                      </div>
                  </div>
                </div> 
                <div class="whislist_Continue"><a href="javascript:void(0);"><img src="img/arrow_left.png" class="img-responsive"> Continue Shopping</a>
                   </div>
              </div>

         </div>


      </div>
    </div>   
  </section>

<section class="last-section"></section>

</section>



<!-- footer area start -->
 <?php @include("include/footer.php") ?>
<!-- footer area end -->

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.12.0.min.js"><\/script>')</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/jarallax.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/smoothScroll.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/saundh.js"></script>

<script>
$("#show").change(function(){
   if($(this).val()=="1"){    
       $("#address").addClass("active");
       $("#profile, #purchase, #returns, #whislist").removeClass("active")
   }
    else if($(this).val()=="2"){;
       $("#purchase").addClass("active");
       $("#address, #profile, #returns, #whislist").removeClass("active");
    }
    else if($(this).val()=="3"){
       
       $("#returns").addClass("active");
       $("#address, #purchase, #profile, #whislist").removeClass("active");
    }
    else if($(this).val()=="4"){
       $("#whislist").addClass("active");
       $("#address, #purchase, #returns, #profile").removeClass("active");
    }
    else{
        $("#profile").addClass("active");
       $("#address, #purchase, #returns, #whislist").removeClass("active");
    }
});  

$(document).ready(function() {
   $(".profile_edit button").click(function(){
     $(".profile_edit").addClass("active");
     $(".profile_edit2").addClass("active")
   });
   $(".add_address_btn button").click(function(){
     $(".address_section").addClass("active2");
   });
   $(".purchase_top2>a").click(function(){
     $(".purchase_area1, .purchase_area2").addClass("active");
   });
   $(".slide_section1 .tracking_details").click(function(){
     $(".slide_section1 .tracking_details2").slideToggle("slow");
     $(".slide_section2 .tracking_details2").slideUp();
	 $(".slide_section2 .tracking_details").removeClass("active");
	 $(this).toggleClass("active");
   });
    $(".slide_section2 .tracking_details").click(function(){
     $(".slide_section2 .tracking_details2").slideToggle("slow");
     $(".slide_section1 .tracking_details2").slideUp();
	 $(".slide_section1 .tracking_details").removeClass("active");
	 $(this).toggleClass("active");
   });

   
});


   
</script>


</body>
</html> 