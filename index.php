<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
include("style_text.css")
?>

  <head>
    <meta charset="utf-8">
    <title>Gujrat Foods' Ordering Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body onload="onloadAll()">
  	<style type="text/css">
  		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
}
navigation {
  height: 80px;
  width: 100%;
}
label.logo{
  color: black;
  font-size: 33px;
  line-height: 80px;
  padding: 0 140px;
  font-weight: 600;
  font-family: 'Roboto', sans-serif;
}
navigation ul{
  float: right;
  margin-right: 60px;
}
navigation ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 8px;
}
navigation ul li a{
  color: black;
  font-weight: 400;
  font-size: 16px;
  padding: 7px 13px;
  border-radius: 3px;
  /* text-transform: uppercase; */
  font-family: 'Roboto', sans-serif;
}
a.active,a:hover{
  background: #fb9200;
  transition: .5s;
  color: #fff;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}

@media (max-width: 858px){
  .checkbtn{
    display: block;
    margin-right: 40px;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  navigation ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  navigation ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
.order_button:hover{
	opacity: 0.8;
	transition: 0.6s;
}

@media (max-width: 952px){
  label.logo{
    font-size: 27px;
    padding-left: 25px;
  }
  navigation ul li a{
    font-size: 16px;
  }
}

.cart_img_box{
      width: 40%;height: 80px;
    }
    .cart_info_box{
      width: 60%;height: 80px;
    }
    input.cart_input_quanlity{
      width: 50%;outline: none;border: 0;border-radius: 8px;padding:5px;padding-left:15px;text-align: center;
    }
    .cart_button_delete{
      padding: 8px;margin: auto;color: #fff;
    }
    ::-webkit-scrollbar:horizontal { 
     display: none; 
 }

::-webkit-scrollbar {
    width: 6px;
    height: 6px;
    background-color: #fff;
}
::-webkit-scrollbar-thumb {
    background-color: #fff;
}
::-webkit-scrollbar-track {
    
    background-color: #f8fafd;
}

  

<?php
include("style_2.css")
?>


  	<div class="container-fluid p-0" style="background: url(curry.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh);">
  <p style="font-size: 150%; font-weight: bold;margin-left: 140px; position: absolute; margin-top: 110px;">The Best Variety Of Curry And<br> Biryani Delivered Hot To You.<br>  Enjoy At The Comfort Of Your Home!

  </p>
  <p style="margin-left: 140px; position: absolute; margin-top: 265px;">Scroll Down To Place Your Order.<br> You Won't Regret It!
    
  </p>

    <navigation  id="menu" style="position: fixed;z-index: 999;">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">GUJRAT FOODS</label>
      <ul>

<li><a onclick="home_page()" class="active text-white">Home</a></li>
<li><a data-toggle="modal" data-target=".orderCart">View Cart<div style="width: 20px;height: 20px;background: #fb9200;position: absolute;top: 25px;margin-left: 80px;border-radius: 50%"><p id="order_number" style="position: absolute;margin-top: -30px;margin-left: 7px;color: #fff;font-size: 80%">0</p></div> </a></li>
<li><a id="menu_login_button"  data-toggle="modal" data-target=".login">Click here to Login</a></li>
<li  ><a id="menu_account_login" class="menu_account_hide" style="display: none;"></a>


</li>
</ul>

<div id="menu_logout">
<div id="menu_header22" class="khung p-3" style="margin: 0 auto;width: 220px; background: orange; border-radius: 8px; font-family: Helvetica, Arial, sans-serif;padding: 0.5rem;position: absolute;z-index: 999;margin-left: calc(100vw - 250px);margin-top: -25px;display: none;">
      <p id="hello_user" class="text-white" style="opacity: 0.9"></p>
      <div id="quanlydon" class="box p-1" style="height: 35px;display: none;">  
        <a href="dashboard.php">
        <p><i class="fa fa-list-alt text-white mr-3" aria-hidden="true"></i>Manage Orders</p></a>
      </div>
      <div class="box p-1" data-toggle="modal" data-target=".bd-example-modal-lg22"  style="height: 35px">
        
        <p ><i class="fa fa-list-alt text-white mr-3" aria-hidden="true"></i>Your Orders</p>
        
      </div>
      <div class="box p-1" data-toggle="modal" data-target=".bd-example-modal-sm33"  style="height: 35px">
        
        <p ><i class="fa fa-key text-white mr-3" aria-hidden="true"></i>Change Password</p>
        
      </div>
      

      <div class="box p-1" style="height: 35px">
        
        <p onclick="Logout()"><i class="fa fa-sign-out text-white mr-3" aria-hidden="true"></i>Log out</p>
      </div>
</div>
    </div>

</navigation>
</div>
<div class="modal fade bd-example-modal-lg22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content p-3" style="width: 150%;left: -200px;">
      <p class="font-weight-bold" style="font-size: 110%">Your Order History</p>

      <div data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:520px;overflow-y: scroll;padding-top: 5px;padding-right: 10px;">
        <table class="table table-borderless">

    
  <thead>
    <tr>
      <th scope="col" style="width: 20%;font-size: 115%;" >Customer Details</th>
      <th scope="col" style="width: 44%;font-size: 115%;" class="text-center">Order Details</th>
      <th scope="col" style="width: 18%;font-size: 115%;" class="text-center">Total Amount</th>
      <th scope="col" style="width: 18%;font-size: 115%;" class="text-center">Order Status</th>
    </tr>
  </thead>

  <tbody id="prinfPaymentUser">
    

  </tbody>



</table>
</div>
    </div>
  </div>
</div>



<div class="modal fade bd-example-modal-sm33 mt-5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel33" aria-hidden="true" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
      
      <div id="changepass" class=" iconpopup mt-4" style="margin: 0 auto; width: 80%;margin-bottom: 10%;">
          <p class="text-center mb-3" style="font-weight: bold;margin-bottom: 2%;font-size: 120%">Change Password</p>
          <p class="mt-3" style="margin-bottom: 2%;">Enter Your Existing Password</p>
          <input type="password" name="pass" id="passcurrent" class="form-control " >
          <p class="mt-1" style="margin-bottom: 2%;">Enter Your New Password</p>
          <input type="password" name="pass" id="passnew" class="form-control " >
          <p class="mt-1" style="margin-bottom: 2%;">Enter Your New Password Again</p>
          <input type="password" name="pass" id="passnewrepeat" class="form-control " >
          <p id="notification_change_pass" class="mt-4 text-center mb-0 " style="font-size: 90%;color: red;"></p>
          <button class="btn btn-warning float-right mt-3" onclick="Changepassword()">Change</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade login mt-5 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
            


            <div class="cart_box" style="width: 100%;margin: auto;">  
        <div class="login_img_box float-left" style="width: 50%;height: 450px;background: pink;">
      <img src="curry2.jpg" width="100%" height="100%">
    </div>

    <div id="login_box" >
        <div class="login_info_box float-right p-5" style="width: 50%;height: 450px;">
    <p class="text-center font-weight-bold" style="font-size: 140%">Log In</p> 
    <label class="font-weight-bold mt-3">Username</label> 
    <input id="usernameLogin" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your username here!" style="outline: none;">
    <label class="mt-3 font-weight-bold">Password</label> 
    <input id="passwordLogin" type="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter your password here!">
    <button onclick="Login()" class="btn btn-primary mt-4" style="width: 100%;background: #fb9200;border: 0;outline: none;">Submit</button>
    <p id="statusLogin" class="text-center mt-4" style="font-size: 90%;color: red;"></p>
    <p onclick="move_signup()" class="text-center mt-3" style="font-size: 90%">If you don't have an account, click here to<strong style="color:#fb9200 "> Sign Up!</strong> </p>
    </div>
    </div>

    
    
    <div id="signup_box" style="display: none;">
    <div class="signup_info_box float-right p-4 pl-5 pr-5" style="width: 50%;height: 450px;">
    <p class="text-center font-weight-bold" style="font-size: 140%">Sign Up</p> 
    <label class="font-weight-bold mt-1">Pick A Username</label> 
    <input id="usernameSignup" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter the username here!" style="outline: none;">
    <label class="mt-3 font-weight-bold">Password</label> 
    <input id="passwordSignup" type="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter your password here!">
    <label class="mt-3 font-weight-bold">Re-enter Password</label> 
    <input id="RepasswordSignup" type="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter your password again to confirm!">
    <button onclick="Signup()" class="btn btn-primary mt-4" style="width: 100%;background: #fb9200;border: 0;outline: none;">
    Submit</button>
    <p id="statusSignup" class="text-center mt-3 mb-1" style="font-size: 90%;color: red;"></p>
    <p onclick="move_login()" class="text-center mt-0" style="font-size: 90%">Already have an account? Sign in<strong  style="color:#fb9200 "> here</strong> </p>
    </div>
    </div>
    <div style="clear: both;"></div>
  </div>



    </div>
  </div>
</div>




<div class="modal fade orderCart mt-3 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">  


            <div id="checkout_form" class="cart_box pl-5 pt-4 shadow-sm mt-3 pb-4" style="width: 100%;margin: auto;">
        <p class="ml-2" style="font-size: 130%;font-weight: bold;">Items In Your Cart</p>
        <div data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:340px;overflow-y: scroll;padding-top: 5px;padding-right: 10px;">
        <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col" style="width: 40%;font-size: 110%;" >Food Item</th>
      <th scope="col" style="width: 20%;font-size: 110%;" class="text-center">Quantity</th>
      <th scope="col" style="width: 20%;font-size: 110%;" class="text-center">Price</th>
      <th scope="col" style="width: 20%;font-size: 110%;" class="text-center">Remove</th>
    </tr>
  </thead>
  <tbody id="prinf_order_cart">
    
    
    
  </tbody>
</table>
</div>
<div class="float-left pl-2" style="width: 30%;">
    <p class="font-weight-bold mt-2" style="font-size: 120%">Total Bill</p>
</div>
<div  class="float-right pr-5" style="width: 30%;">
    <p id="total_money" class="font-weight-bold float-right mt-2" style="font-size: 115%"> </p>
</div>
<div style="clear: both;"></div>
<div onclick="checkout()" class="btn mr-5 text-white float-right" style="background: #fb9200;">Proceed To Payment</div>
<div style="clear: both;"></div>
    </div>



<div id="payment_form" class="p-5" style="width: 100%;height: 400px;display: none;">
  		<div class="choose_box float-left" style="width: 60%;">
  		<p class="font-weight-bold" style="font-size: 130%">Payment</p>  		
  		<p class="mb-2 font-weight-bold">Choose A Payment Method</p>
  		<div class="payment_choose_box" style="width: 60%">
  		<div class="float-left pr-1 pb-1" style="width: 50%;height: 80px;">
  		<img onclick="visa()" class="payment_visa"  src="visa.jpeg" width="100%" height="100%" style="border: 1px solid #d7d7d7;">			
  		</div>
  		<div class="float-right pr-1 pb-1" style="width: 50%;height: 80px;">
  		<img onclick="mastercard()" class="payment_mastercard" src="master.png" width="100%" height="100%" style="border: 1px solid #d7d7d7;">			
  		</div>
  		<div class="float-left pr-1 pb-1" style="width: 50%;height: 80px;">
  		<img onclick="alipay()" class="payment_alipay" src="alipay.jpg" width="100%" height="100%" style="border: 1px solid #d7d7d7;">			
  		</div>
  		<div class="float-right pr-1 pb-1" style="width: 50%;height: 80px;">
  		<img onclick="COD()" class="payment_COD" src="COD.jpg" width="100%" height="100%" style="border: 1px solid #d7d7d7;">			
  		</div>
  		<div style="clear: both;"></div>
  		</div>
  		</div>
  		<div class="choose_box p-3 float-right" style="width: 40%;height: 100px;">
  			<label for="exampleInputEmail1">Recipient's Name</label>
    
    <!-- <div class="p-2" style="width: 100%;height: 40px;border: 1px solid #ccc;border-radius: 5px;">
      <p id="name_customer"></p>
    </div> -->
    <input id="name_customer" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="mt-3">Phone Number</label>
    <input id="phone_customer" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number Here">
    <label for="exampleInputEmail1" class="mt-3">Delivery Address</label>
    <input id="address_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Delivery Address Here">
    <button onclick="payment()" class="btn btn-primary float-right mt-3">Place Order</button>
  		</div>
  	</div>


    </div>
  </div>
</div>







<div id="list_food_home" class="container">
	<div class="row" id="prinf_food">
		
		
	</div>
</div>



<script type="text/javascript">
  	$(document).ready(function(){
  		$('.payment_visa').click(function(){
  		$('.payment_visa').css('border','2px solid #2195f3');	
  		$('.payment_mastercard').css('border','1px solid #d7d7d7');	
  		$('.payment_alipay').css('border','1px solid #d7d7d7');
  		$('.payment_COD').css('border','1px solid #d7d7d7');
  		});
  	});
  	$(document).ready(function(){
  		$('.payment_mastercard').click(function(){
  		$('.payment_mastercard').css('border','2px solid #2195f3');
  		$('.payment_visa').css('border','1px solid #d7d7d7');
  		$('.payment_alipay').css('border','1px solid #d7d7d7');
  		$('.payment_COD').css('border','1px solid #d7d7d7');		
  		});
  	});
  	$(document).ready(function(){
  		$('.payment_alipay').click(function(){
  		$('.payment_alipay').css('border','2px solid #2195f3');
  		$('.payment_visa').css('border','1px solid #d7d7d7');	
  		$('.payment_mastercard').css('border','1px solid #d7d7d7');	
  		$('.payment_COD').css('border','1px solid #d7d7d7');	
  		});
  	});
  	$(document).ready(function(){
  		$('.payment_COD').click(function(){
  		$('.payment_COD').css('border','2px solid #2195f3');
  		$('.payment_visa').css('border','1px solid #d7d7d7');	
  		$('.payment_mastercard').css('border','1px solid #d7d7d7');
  		$('.payment_alipay').css('border','1px solid #d7d7d7');		
  		});
  	});


  </script>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 120) {
    document.getElementById("menu").className = "scroll_event_Add_class";
  } else {
    document.getElementById("menu").className = "";
  }
}
</script>
<style type="text/css">
  .menu_account_show{
    display: block !important;
  }
</style>
<script type="text/javascript">
 function move_login(){
        document.getElementById("login_box").style.display = 'block';
        document.getElementById("signup_box").style.display = 'none';
    }
  function move_signup(){
        document.getElementById("login_box").style.display = 'none';
        document.getElementById("signup_box").style.display = 'block';
    }


    $(document).ready(function(){
      
      $('#menu_account_login').on('click',function(){
        $('.khung').toggleClass('menu_account_show');
      });

      
    });



    function checkout(){
    	document.getElementById("payment_form").style.display = 'block';
    	document.getElementById("checkout_form").style.display = 'none';
    }
var bank;
    function visa(){
     bank = "Visa";
    }
    function mastercard(){
     bank = "Mastercard";
    }
     function alipay(){
     bank = "Alipay/wechat";
    }
     function COD(){
     bank = "Cash On Delivery";
    }


    function management_web(){
    	document.getElementById("list_food_home").style.display = 'none';
    document.getElementById("management_food").style.display = 'block';
    	
    }
 	
 	function home_page(){
 		document.getElementById("list_food_home").style.display = 'block';
    document.getElementById("management_food").style.display = 'none';
    listFood();
 	}

</script>

<script type="text/javascript">
  // var id_order_food = 0;
// localStorage.setItem("id_order_food", JSON.stringify(id_order_food));
  
// 



var id_order_food =JSON.parse(localStorage.getItem('id_order_food'));
if (id_order_food === null) {
        id_order_food = [];
        var id_order_food =0;
        localStorage.setItem("id_order_food", JSON.stringify(id_order_food));
    }


var commentCustomer =JSON.parse(localStorage.getItem('commentCustomer'));
if (commentCustomer === null) {
        commentCustomer = [];
        var commentCustomer =[{}];
        localStorage.setItem("commentCustomer", JSON.stringify(commentCustomer));
    }



var id_payment =JSON.parse(localStorage.getItem('id_payment'));
if (id_payment === null) {
        id_payment = [];
        var id_payment = 0;
        localStorage.setItem("id_payment", JSON.stringify(id_payment));
    }
// 



//
var idup =JSON.parse(localStorage.getItem('idup'));
if (idup === null) {
        idup = [];
        var idup=3;
         localStorage.setItem("idup", JSON.stringify(idup));
    }


// 
var CheckInfo =JSON.parse(localStorage.getItem('CheckInfo'));
if (CheckInfo === null) {
        CheckInfo = [];
        var CheckInfo = 0;
        localStorage.setItem("CheckInfo", JSON.stringify(CheckInfo));
    }

var food =JSON.parse(localStorage.getItem('food'));
if (food === null) {
        food = [];
    }




// 
var account =JSON.parse(localStorage.getItem('account'));
if (account === null) {
        account = [];
        var account = [{
    id:0,
    username:"admin",
    password:"123456",
    level:1  
},{
    id:1,
    username:"b",
    password:"b",
    level:0 
},{
    id:2,
    username:"a",
    password:"a",
    level:0 
}];
localStorage.setItem("account", JSON.stringify(account));
    }
var food =JSON.parse(localStorage.getItem('food'));
if (food === null) {
        food = [];
        food = [{
    id:0,
    name:"Roast Chicken",
    price:"170",
    note:"Roasted chicken glazed with handmade honey syrup.",
    image:"dish0.jpg"
},{
    id:1,
    name:"4-Cheese Pizza",
    price:"130",
    note:"Pizza with Cheddar, Mozzarella, Salami & Parmesan.",
    image:"dish1.jpg"
},{
    id:2,
    name:"Tikka Masala",
    price:"80",
    note:"Boneless chicken in spicy tikka curry sauce.",
    image:"dish2.jpg"
},{
    id:3,
    name:"Prawn Masala",
    price:"90",
    note:"Buttered prawns in spicy curry sauce.",
    image:"dish3.jpeg"
},{
    id:4,
    name:"Beef Paya",
    price:"140",
    note:"Scrumptions beef leg cooked in broth.",
    image:"dish4.jpg"
},{
    id:5,
    name:"Kulcha",
    price:"30",
    note:"Thick white dough pastry with seasme seeds.",
    image:"dish5.jpg"
},{
    id:6,
    name:"Keema Naan",
    price:"35",
    note:"Lamb filled white dough pastry naan.",
    image:"dish6.jpg"
},{
    id:7,
    name:"Rasgulla",
    price:"25",
    note:"Ball-shaped dumplings in thick sugar syrup.",
    image:"dish7.jpg"
}];
        localStorage.setItem("food", JSON.stringify(food)); 
    }

// var orderFood=[];
// 
var orderFood =JSON.parse(localStorage.getItem('orderFood'));

if (orderFood === null) {
        orderFood = [{}];
        localStorage.setItem("orderFood", JSON.stringify(orderFood));
    }




// 
var account_info =JSON.parse(localStorage.getItem('account_info'));
if (account_info === null) {
        account_info = [];
        var account_info=[{}];
        localStorage.setItem("account_info", JSON.stringify(account_info));
    }





// 
var checkLogin =JSON.parse(localStorage.getItem('checkLogin')); 
if (checkLogin === null) {
        checkLogin = [];
        var checkLogin = -1;
        localStorage.setItem("checkLogin", JSON.stringify(checkLogin));
    }
if (checkLogin == -1) {
	
}else if( account[checkLogin].level==0){

	document.getElementById("statusLogin").innerHTML="";
    document.getElementById("menu_account_login").innerHTML = account[checkLogin].username + "'s Account Info";
        document.getElementById("menu_account_login").style.display = 'block';
        document.getElementById("menu_login_button").style.display = 'none';
        document.getElementById("hello_user").innerHTML ="Welcome "+ account[checkLogin].username + "!";
        document.getElementById("menu_logout").style.display = 'block'; 
        document.getElementById("quanlydon").style.display = 'none';
        orderprinf();
       demOrder();
}else if( account[checkLogin].level==1){
  document.getElementById("statusLogin").innerHTML="";
        document.getElementById("menu_account_login").innerHTML = account[checkLogin].username;
        document.getElementById("menu_account_login").style.display = 'block';
        document.getElementById("menu_login_button").style.display = 'none';
        document.getElementById("hello_user").innerHTML ="Welcome "+account[checkLogin].username+"!";
        document.getElementById("menu_logout").style.display = 'block'; 
        document.getElementById("quanlydon").style.display = 'block';
        orderprinf(); 
        demOrder();  
  
}



var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
if (paymentFood === null) {
        paymentFood = [];
        var paymentFood=[{}];
        localStorage.setItem("paymentFood", JSON.stringify(paymentFood));
    }
console.log(account);

// localStorage.setItem("checkLogin", JSON.stringify(checkLogin));



function Signup(){
  var checkUsername = 0;
    var id=idup;
    var level=0;
    var username = document.getElementById('usernameSignup').value;
    var password = document.getElementById('passwordSignup').value; 
    var Repassword = document.getElementById('RepasswordSignup').value;
    if (username != '' && password !='' && Repassword !='' && password == Repassword) {
      for(let i = 0; i < account.length; i++) {
        if (account[i].username== username) {
          
         
           checkUsername = 1;
            break;
        }
      } 
        if (checkUsername == 0) {
    accountSignup = {id,username,password,level};
    account.push(accountSignup);

    localStorage.setItem("account", JSON.stringify(account));

    checkLogin = id;
    localStorage.setItem("checkLogin", JSON.stringify(checkLogin));

    var id=idup++;
    localStorage.setItem("idup", JSON.stringify(idup));
    console.log(account); 
    document.getElementById("statusSignup").innerHTML="Sign Up Success";
    document.getElementById("menu_account_login").innerHTML = username;
        document.getElementById("menu_account_login").style.display = 'block';
        document.getElementById("menu_login_button").style.display = 'none';
        document.getElementById("hello_user").innerHTML ="Welcome "+username+"!";
        document.getElementById("menu_logout").style.display = 'block'; 
        location.reload();
}else { 
  document.getElementById("statusSignup").innerHTML="Account Already Exists!";
}
}else {
  document.getElementById("statusSignup").innerHTML="Please Enter Complete Details";
}
}

function Login(){ 
  for (i = 0; i< account.length; i++){
    if ((document.getElementById("usernameLogin").value == account[i].username) && (document.getElementById("passwordLogin").value == account[i].password)) {
      checkLogin = account[i].id; 
      localStorage.setItem("checkLogin", JSON.stringify(checkLogin)); 
       
      if (account[i].level==0) {
        document.getElementById("statusLogin").innerHTML="Login Success!";
        document.getElementById("menu_account_login").innerHTML = account[i].username;
        document.getElementById("menu_account_login").style.display = 'block';
        document.getElementById("menu_login_button").style.display = 'none';
        document.getElementById("hello_user").innerHTML ="Welcome "+account[i].username+"!";
        document.getElementById("menu_logout").style.display = 'block'; 
        document.getElementById("quanlydon").style.display = 'none';
        orderprinf();
       demOrder();
      
       location.reload();
        
      }else if(account[i].level==1){
        document.getElementById("statusLogin").innerHTML="Login Success!";
        document.getElementById("menu_account_login").innerHTML = account[i].username;
        document.getElementById("menu_account_login").style.display = 'block';
        document.getElementById("menu_login_button").style.display = 'none';
        document.getElementById("hello_user").innerHTML ="Welcome "+account[i].username+"!";
        document.getElementById("menu_logout").style.display = 'block'; 
        document.getElementById("quanlydon").style.display = 'block';
        orderprinf(); 
        demOrder();  
        location.reload();           
      }     
    }
}
if (checkLogin == -1) {
  document.getElementById("statusLogin").innerHTML="Invalid details! Please try again.";

    }
}

function delete_order(id_order){
  for(var i = 0; i < orderFood.length; i++){
        if(id_order == orderFood[i].id_order && checkLogin == orderFood[i].user_id_order) {
            orderFood.splice(i, 1);
            localStorage.setItem("orderFood", JSON.stringify(orderFood));
            orderprinf(); 
            demOrder();
            break;          
        }
    }
}

function totalMoney(checkLogin){
  var total_order =0;
  for(let i = 0; i < orderFood.length; i++) {
    if (checkLogin == orderFood[i].user_id_order){
      total_order += orderFood[i].price_order*orderFood[i].quanlity_order;
        
    }

  }
  document.getElementById("total_money").innerHTML ="$"+total_order;
        
}

function upQuality(id_order){
  var ok=0;
  for(let i = 0; i < orderFood.length; i++) {
    if (id_order == orderFood[i].id_order && checkLogin == orderFood[i].user_id_order) {
       var quality_input_change =document.getElementById('quality_input_change'+i).value;
      orderFood[i].quanlity_order=quality_input_change;
       ok += orderFood[i].price_order *orderFood[i].quanlity_order;
       localStorage.setItem("orderFood", JSON.stringify(orderFood));
       orderprinf();
    }
  }   
}
document.getElementById("name_customer").value = account[checkLogin].username;
document.getElementById("phone_customer").value = account_info[checkLogin].phone_customer;
document.getElementById("address_customer").value = account_info[checkLogin].address_customer;
  for(let i = 0; i < orderFood.length; i++) {
 if (account_info[i].accountPayment==account[checkLogin].id) {
  CheckInfo = 1;
   localStorage.setItem("CheckInfo", JSON.stringify(CheckInfo));
 }else {
   CheckInfo = 0;
   localStorage.setItem("CheckInfo", JSON.stringify(CheckInfo));
 }
}


function payment(){
  var id_payment =JSON.parse(localStorage.getItem('id_payment'));
	var name_customer = document.getElementById("name_customer").value;  
	var phone_customer = document.getElementById("phone_customer").value;
	var address_customer = document.getElementById("address_customer").value;  
  var status = "Confirm";
      var priceTotal=0;
      paymentarrpush();
      for(let i = 0; i < orderFood.length; i++) {
        if (orderFood[i].user_id_order==checkLogin) {
          priceTotal +=orderFood[i].price_order*orderFood[i].quanlity_order;
          quanlityPayment = orderFood[i].quanlity_order;
          
        }
      }
      accountPayment = account[checkLogin].id;
      paymentarr={id_payment,accountPayment,showDetailOrder,quanlityPayment,priceTotal,name_customer,phone_customer,address_customer,bank,status};
      paymentFood.push(paymentarr);
      localStorage.setItem("paymentFood", JSON.stringify(paymentFood));
      id_payment++;
      localStorage.setItem("id_payment", JSON.stringify(id_payment));
      var CheckInfo =JSON.parse(localStorage.getItem('CheckInfo'));
      if (CheckInfo == 0) {
        account_info_arr ={accountPayment,name_customer,phone_customer,address_customer,bank};
      account_info.push(account_info_arr);
      localStorage.setItem("account_info", JSON.stringify(account_info));
      CheckInfo = 1;
      localStorage.setItem("CheckInfo", JSON.stringify(CheckInfo));
     console.log(paymentFood);
      // paymentPrinf();  
      }
      for(let i = 0; i < orderFood.length; i++) {
        if (checkLogin == orderFood[i].user_id_order) {
          orderFood.splice(i, 5);
          localStorage.setItem("orderFood", JSON.stringify(orderFood));
          location.reload(); 
        }
      }
      
}

function orderPrinf(){
	document.getElementById("prinf_order").innerHTML ='';
	for(let i = 0; i < paymentFood.length; i++) {
        if (paymentFood[i].accountPayment==checkLogin) {      	
        	document.getElementById("prinf_order").innerHTML +=paymentFood[i].showDetailOrder;


    }
}
}
function checkorder(id){
 if (checkLogin == -1) {
    alert("Login first to add items to the cart!");
  }else {
    
  
  for(let i = 0; i < orderFood.length; i++) {
    var checkordervalue=0;

      if (id == orderFood[i].id_food && checkLogin == orderFood[i].user_id_order) {
        
        checkordervalue=1;
        orderFood[i].quanlity_order++;

       orderFood[i].quanlity_order;
       localStorage.setItem("orderFood", JSON.stringify(orderFood));
        orderprinf();
        
      }
      
}if (checkordervalue==0) {
  orderpush(id);
  orderprinf();

  }}
 } 



function orderpush(id){
var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
  id_order = id_order_food;
  var name_order = food[id].name;
  var price_order = food[id].price;
  var image_order = food[id].image;
  var note_order = food[id].note;
  var quanlity_order = 1;
  var user_id_order = checkLogin;
  var id_food = id;
  food_order = {id_order,name_order,price_order,image_order,note_order,quanlity_order,user_id_order,id_food};
  orderFood.push(food_order);

 localStorage.setItem("orderFood", JSON.stringify(orderFood));

  console.log(food_order);
  id_order_food++;
  localStorage.setItem("id_order_food", JSON.stringify(id_order_food));
  demOrder();
  
	
  orderprinf();

   console.log(orderFood);

  }

  function demOrder(){
    var demOrder=0;
  for(let i = 0; i < orderFood.length; i++) {
    if (checkLogin == orderFood[i].user_id_order)
       demOrder++;
      document.getElementById("order_number").innerHTML =demOrder;

  }
  }

  function orderprinf(){
    document.getElementById("prinf_order_cart").innerHTML ='';
	var orderFood =JSON.parse(localStorage.getItem('orderFood'));
totalMoney(checkLogin);
  for(let i = 0; i < orderFood.length; i++) {
    if (checkLogin == orderFood[i].user_id_order) {
    var prinf_order_cart = `<tr>  
      <td><div>
        <div class="cart_img_box float-left">
            <img src="`+orderFood[i].image_order+`" width="100%" height="100%">
        </div>
        <div class="cart_info_box float-left pl-3">
            <p class="mb-1 font-weight-bold" style="font-size: 115%;">`+orderFood[i].name_order+`</p>
            <p style="font-size: 85%">`+orderFood[i].note_order+`</p>
        </div>
      </div> </td>
      <td class="text-center"><input id="quality_input_change`+i+`" onchange ="upQuality(`+orderFood[i].id_order+`)" class="cart_input_quanlity mt-2" type="number" value="`+orderFood[i].quanlity_order+`" name="" min="1" max="20" style=""> </td>
      <td class="text-center"><p class="mt-2" style="padding:5px;">`+orderFood[i].price_order *orderFood[i].quanlity_order+` HKD</p></td>
      <td class="text-center"><div onclick="delete_order(`+orderFood[i].id_order+`)" class="cart_button_delete"><i class="fa fa-trash" aria-hidden="true" style="color: #fb9200;font-size: 180%"></i></div> </td>
    </tr>`
    document.getElementById("prinf_order_cart").innerHTML +=prinf_order_cart;
 
    

    

    
    }

  }

  }




var showDetailOrder;
  function paymentarrpush(){

    showDetailOrder='';
totalMoney(checkLogin);

  for(let i = 0; i < orderFood.length; i++) {
    if (checkLogin == orderFood[i].user_id_order) {

    var push_cart = `<div class="cart_img_box float-left mb-2" style="width: 80px;">
            <img src="`+orderFood[i].image_order+`" width="100%" height="100%">
        </div>
        <div class="cart_info_box float-left pl-3">
            <p class="mb-1 font-weight-bold" style="font-size: 115%;">`+orderFood[i].name_order+`</p>
            <p style="font-size: 85%">`+orderFood[i].note_order+`</p>
        </div>
        <div class="quanlity" style="float: right;width: 30px;height: 30px;">
          <p>`+orderFood[i].quanlity_order+`</p>
        </div><div style="clear:both;"></div>`
    showDetailOrder += push_cart;

    
    }

  }

  }






function paymentPrinfUser(){
    document.getElementById("prinfPaymentUser").innerHTML ='';
// totalMoney(checkLogin);
var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
  for(let i = 0; i < paymentFood.length; i++) {
   if (checkLogin == paymentFood[i].accountPayment) {
    var prinf_payment_cart_user = `<tr style="border-bottom:1px solid #ccc;">
      <td>
      <p>Recipient's name: `+paymentFood[i].name_customer+`</p>
      <p>Address: `+paymentFood[i].address_customer+`</p>
      <p>Phone Number: `+paymentFood[i].phone_customer+`</p>
       <p>Payment Method: `+paymentFood[i].bank+`</p>
       
      </td>
      
      <td>`+paymentFood[i].showDetailOrder+`<div id="comment_box`+i+`"></div></td>
      <td class="text-center">`+paymentFood[i].priceTotal+`</td>
      <td class="text-center"><button id="status_prinf`+paymentFood[i].id_payment+`" onclick="suscess_payment(`+paymentFood[i].id_payment+`)" class="btn btn-warning text-white">`+paymentFood[i].status+`</button></td>
          </tr>
    <tr style="width:100%"></tr>
    `

    document.getElementById("prinfPaymentUser").innerHTML+=prinf_payment_cart_user;
}
  }

  }


function suscess_payment(id){
    for(let i = 0; i < paymentFood.length; i++) {
      if (id == paymentFood[i].id_payment) {
        paymentFood[i].status="Recieved";
        localStorage.setItem("paymentFood", JSON.stringify(paymentFood));
        document.getElementById("status_prinf"+id).innerHTML = paymentFood[i].status;

        var comment_box =`<div class="p-3 pb-0" style="width: 100%;background: #ff6f47;">
              <div style="float: left;width: 50%">
              <label class=" text-white mb-3" style="width: 100%;">Your Feedback</label>
              <input id="comment_text`+id+`" type="passwork" class="form-control text-white" id="rePasswordAddInput"  style="width: 100%;background: #ff8f70;border: 0;outline: none;">
              </div>
            <div class="pt-3" style="float: right;width: 50%">
              <button onclick="sendToAdmin(`+id+`)" class="btn btn-warning float-right text-white" >Submit</button>
              <p id="support_send" class="float-right mb-0 mt-3 text-white"></p>
                </div>
               
               <div style="clear: both;"></div>
            </div>`;

        document.getElementById("comment_box"+i).innerHTML +=comment_box;
        document.getElementById("idcover"+i).value=id;

      
      }
    }
  }
  
function sendToAdmin(id){
  var checkLogin =JSON.parse(localStorage.getItem('checkLogin'));
  var content_comment = document.getElementById("comment_text"+id).value;
  idPayment = id;
  idUser = checkLogin;
  commentCustomerArr = {idPayment,idUser,content_comment};
  commentCustomer.push(commentCustomerArr);
 localStorage.setItem("commentCustomer", JSON.stringify(commentCustomer));
 document.getElementById("support_send").innerHTML="Feedback Successfully Sent";
}




function listFood(){
document.getElementById("prinf_food").innerHTML ='';
var food =JSON.parse(localStorage.getItem('food'));
    for(let i = 0; i < food.length; i++) { 
    var prinf =`<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-4">
			<div class="produre_box bg-white shadow-sm">
				<div class="image_box">
					<img src="`+food[i].image+`" width="100%" height="100%" style="">
				</div>
				<div class="info_box p-3 bg-white">
					<p class="float-left font-weight-bold mb-0" style="font-size: 115%">`+food[i].name+`</p><p class="float-right font-weight-bold mb-2" style="font-size: 115%">$`+food[i].price+`</p>
					<div style="clear: both;"></div>
					
					<p style="font-size: 85%;height:35px;">`+food[i].note+`</p>
					<div class="star_box float-left pt-2">
						<img src="image/iconstar.svg" width="80%">
					</div>
					<div class="order_box float-right">
						<div onclick="checkorder(`+food[i].id+`)" class="order_button float-right pt-2">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>
		</div>`;
    document.getElementById("prinf_food").innerHTML +=prinf;
    }}

function Changepassword(){
  var account =JSON.parse(localStorage.getItem('account'));
  if (document.getElementById("passcurrent").value == account[checkLogin].password && document.getElementById("passnew").value == document.getElementById("passnewrepeat").value) {
        account[checkLogin].password = document.getElementById("passnew").value;
        localStorage.setItem("account", JSON.stringify(account));  
        document.getElementById("notification_change_pass") .innerHTML= "Password Changed Successfully!";
       
        setTimeout(() => location.reload(), 1000);

    } else {
        document.getElementById("notification_change_pass") .innerHTML= "Sai thông tin mật khẩu";
    }
}

function Logout() {   
    document.getElementById("menu_account_login").style.display = 'none';
    document.getElementById("menu_login_button").style.display = 'block';
    document.getElementById("menu_logout").style.display = 'none';  
    checkLogin=-1;  
    localStorage.setItem("checkLogin", JSON.stringify(checkLogin));  
    document.getElementById("order_number").innerHTML ='0';
    document.getElementById("prinf_order_cart").innerHTML ='';
    document.getElementById("payment_form").style.display = 'none';
    document.getElementById("checkout_form").style.display = 'block';
    document.getElementById("name_customer").value='';  
	document.getElementById("phone_customer").value='';
	document.getElementById("address_customer").value='';
}

	</script>


















	<script type="text/javascript">

    





    function onloadAll(){
    paymentPrinfUser();
    	listFood();
      // paymentPrinf();
    }
  </script>



 
  </body>
</html>


