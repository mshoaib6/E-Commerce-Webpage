<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin's Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <style type="text/css">
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

  </style>
  <body onload="onloadAll1()">
  	<div class="container-fluid p-0">
      <div class="row m-0 p-0">
        
     <div class="col-2 pl-0 p-0" style="height: 100vh;">
      <div style="position: fixed;width: 220px;">
      <p class="text-center font-weight-bold mt-3 mb-4" style="font-size: 120%">Gujrat Foods</p>
      <div class="add_produre mt-4" style="width: 85%;margin: auto;border-radius: 10px;display: flex;">
        <div class="icon_bar" style="width: 16%;padding: 7px;">
          <img src="image/icon.svg">
        </div>
        <style type="text/css">
        	
        </style>
        <script type="text/javascript">  
        $(document).ready(function(){
	  			$('#add_food3').click(function(){
	  			$('#management_food').css('font-weight','bold');
	  			$('#dashboard_text').css('font-weight','400');
	  			$('#management_order').css('font-weight','400');
	  			$('#management_user').css('font-weight','400');	

	  			$('#management_food_box').css('display','block');
	  			$('#dashboard_box').css('display','none');
	  			$('#management_food_order').css('display','none');
	  			$('#management_user_box').css('display','none');

  				});
  			});

        	$(document).ready(function(){
	  			$('#management_food').click(function(){
	  			$('#management_food').css('font-weight','bold');
	  			$('#dashboard_text').css('font-weight','400');
	  			$('#management_order').css('font-weight','400');
	  			$('#management_user').css('font-weight','400');	

	  			$('#management_food_box').css('display','block');
	  			$('#dashboard_box').css('display','none');
	  			$('#management_food_order').css('display','none');
	  			$('#management_user_box').css('display','none');

  				});
  			});
  			$(document).ready(function(){
	  			$('#dashboard_text').click(function(){
	  			$('#dashboard_text').css('font-weight','bold');
	  			$('#management_order').css('font-weight','400');
	  			$('#management_user').css('font-weight','400');	
	  			$('#management_food').css('font-weight','400');

	  			$('#management_food_box').css('display','none');
	  			$('#dashboard_box').css('display','block');
	  			$('#management_food_order').css('display','none');
	  			$('#management_user_box').css('display','none');
  				});
  			});
  			$(document).ready(function(){
	  			$('#management_order').click(function(){
	  			$('#management_order').css('font-weight','bold');
	  			$('#management_user').css('font-weight','400');	
	  			$('#management_food').css('font-weight','400');
	  			$('#dashboard_text').css('font-weight','400');
	  			
	  			$('#management_food_box').css('display','none');
	  			$('#dashboard_box').css('display','none');
	  			$('#management_food_order').css('display','block');
	  			$('#management_user_box').css('display','none');
  				});
  			});
  			$(document).ready(function(){
	  			$('#management_user').click(function(){
	  			$('#management_user').css('font-weight','bold');	
	  			$('#management_food').css('font-weight','400');
	  			$('#dashboard_text').css('font-weight','400');
	  			$('#management_order').css('font-weight','400');
	  			
	  			$('#management_food_box').css('display','none');
	  			$('#dashboard_box').css('display','none');
	  			$('#management_food_order').css('display','none');
	  			$('#management_user_box').css('display','block');
  				});
  			});
        </script>
        <div class="text_bar p-2 pr-0">
           <p id="dashboard_text" class="mb-0" style="font-weight: bold;">Order Dashboard</p>
        </div>
        </div>

        <div class="add_produre mt-2" style="width: 85%;margin: auto;border-radius: 10px;display: flex;">
        <div class="icon_bar" style="width: 16%;padding: 7px;">
          <img src="image/carticon.svg">
        </div>
        <div class="text_bar p-2 pr-0" style="width: 80%;">
           <p id="management_order" class="mb-0">Manage Orders</p>
        </div>
        </div>
        
        <div class="add_produre mt-2" style="width: 85%;margin: auto;border-radius: 10px;display: flex;">
        <div class="icon_bar" style="width: 16%;padding: 7px;">
          <img src="image/icon2.svg">
        </div>
        <div class="text_bar p-2 pr-0" style="width: 80%;">
           <p id="management_user" class="mb-0">Manage Accounts</p>
        </div>
        </div>
</div>

     </div>
     <div class="col-10  p-0">
       <div class="row m-0 p-0 ">
         <div class="col-12 bg-white" style="height: 70px;">
           
         </div>
          <div id="dashboard_box" class="col-12 bg-white mt-1" style="height: 570px;">
            <p class="font-weight-bold" style="font-size: 130%">Order Dashboard</p>
            <div id="input_food" style="display: none;">
            
</div>

            <div class="row m-0">
              <div class="col-xs-12 col-sm-6 col-md-3 p-3">
                <div class="ana_food pt-2 pb-0 pl-4 pr-3 shadow-sm" style="background: #fff;">
                  <p style="font-size: 110%" class="float-left mt-1">Total Dishes</p>
                  <p id="dem_food" style="font-size: 200%;font-weight: bold;" class="float-right mt-4 mb-2"></p>
                  <div style="clear: both;"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 p-3">
                <div class="ana_food pt-2 pb-0 pl-4 pr-3 shadow-sm" style="background: #fff;">
                  <p style="font-size: 110%" class="float-left mt-1">Registered Customers</p>
                  <p id="dem_cus" style="font-size: 200%;font-weight: bold;" class="float-right mt-4 mb-2"></p>
                  <div style="clear: both;"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 p-3">
                <div class="ana_food pt-2 pb-0 pl-4 pr-3 shadow-sm" style="background: #fff;">
                  <p style="font-size: 110%" class="float-left mt-1">Total Orders</p>
                  <p id="dem_payment" style="font-size: 200%;font-weight: bold;" class="float-right mt-4 mb-2"></p>
                  <div style="clear: both;"></div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 p-3">
                <div class="ana_food pt-2 pb-0 pl-4 pr-3 shadow-sm" style="background: #fff;">
                  <p style="font-size: 110%" class="float-left mt-1">No. of Feedbacks</p>
                  <p id="dem_comment" style="font-size: 200%;font-weight: bold;" class="float-right mt-4 mb-2"></p>
                  <div style="clear: both;"></div>
                </div>
              </div>
            </div>
            <div class="row m-0">
              <div class="col-6 p-3">
                <div class="payment_food_dash pt-2 pb-0 pl-4 pr-3 shadow-sm" style="height: 300px;background: #fff">
                  <p style="font-size: 110%" class=" mt-1">All Orders</p>
                  <div id="scroll_height" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:220px;overflow-y: scroll;padding-right: 10px;">   
                  <table class="table table-borderless" style="margin-top: -25px;">
  <thead>
    <tr>
      <th scope="col" style="width: 80%;font-size: 115%;" ></th>
      
    
    </tr>
  </thead>

  <tbody id="prinfPaymentDash">
  	

  </tbody>

</table></div>

                </div>
              </div>

              <div class="col-6 p-3">
                <div class="payment_food_dash pt-2 pb-0 pl-4 pr-3 shadow-sm" style="height: 300px;background: #fff">
                  <p style="font-size: 110%" class=" mt-1">Dishes</p>
                  <div id="scroll_height2" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:220px;overflow-y: scroll;padding-top: 5px;padding-right: 10px;">    
    <table class="table table-borderless" style="margin-top: -25px;">
  <thead>
    <tr>

      <th scope="col" style="width: 60%;font-size: 115%;" ></th>
      
      <th scope="col" style="width: 40%;font-size: 115%;" class="text-center"></th>
      
    </tr>
  </thead>

  <tbody id="prinfManagementFood2">


  </tbody>

</table>
</div>
                </div>
              </div>

              <div class="col-6 p-3">
                <div class="payment_food_dash pt-2 pb-0 pl-4 pr-3 shadow-sm" style="height: 300px;background: #fff">
                  <p style="font-size: 110%" class="float-left mt-1">Feedback from Customers</p>
                  <div id="scroll_height2" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  >
                    <table style="width: 100%">
                <thead>
    <tr>
      <th scope="col" style="width: 20%;font-size: 115%;" >Order ID</th>
      <th scope="col" style="width: 40%;font-size: 115%;">Customer Name</th>
      <th scope="col" style="width: 40%;font-size: 115%;">Feedback</th>
    </tr>
  </thead>

  <tbody id="commentPrinf">
    <tr>
      <td>jfj</td>
      <td>jfj</td>
       <td>jfj</td>
    </tr>

  </tbody>
              </table>
                  </div>
                </div>
              </div>

            </div>

 
          </div>












          <div id="management_food_order" class="col-12" style="display: none;">
          	<p class="font-weight-bold" style="font-size: 130%">Order Details</p>
          	<div class="shadow-sm pt-2" style="width: 100%;height: 530px;background: #fff;">
          		<div id="scroll_height" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:480px;overflow-y: scroll;padding-top: 5px;padding-right: 10px;">
          		<div class="cart_box pl-5 pt-0 pb-4 pr-4" style="width: 100%;margin: auto;">  
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col" style="width: 20%;font-size: 115%;" >Customer Details</th>
      <th scope="col" style="width: 44%;font-size: 115%;" class="text-center">Order Details</th>
      <th scope="col" style="width: 18%;font-size: 115%;" class="text-center">Total Amount</th>
      <th scope="col" style="width: 18%;font-size: 115%;" class="text-center">Order Status</th>
    </tr>
  </thead>

  <tbody id="prinfPayment">
  	

  </tbody>

</table>
</div>
          	</div></div>
          </div>










          <div id="management_user_box" class="col-12 bg-white mt-1" style="height: 570px;display: none;">
            <p class="font-weight-bold" style="font-size: 130%">Account Management</p>
            <p class="font-weight-bold" style="font-size: 100%">Edit Account Details</p>
            <div id="input_user" style="display: none;">
            <div  class="row m-0 shadow-sm pt-3" >
              <div class="col-3">
                <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="userNameAddInput"  placeholder="Enter Name"> 
                <input class="float-right" type="text" id="txtId" name="txtPrice" style="border:0; border-radius: 10px;height: 40px;background:#f8fafd;width:100%;outline: none;display: none;">
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="email" class="form-control" id="passwordAddInput" placeholder="Enter Password"> 
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1">Confirm Passowrd</label>
                <input type="passwork" class="form-control" id="rePasswordAddInput" placeholder="Re-enter Password"> 
            </div>
              </div>
                     
              <div class="col-8 p-0  pl-3 pb-4">
                <button id="addUser" onclick="AddUser()" class="btn btn-primary float-left" style="background: #ff6f47;border: 1px solid #ff6f47;">Thêm</button>
                <button id="updateUser" onclick="SaveUserAdmin()" class="btn btn-warning text-white float-left" style="display: none;">Update</button>
                 <button onclick="CloseUser()" class="btn btn-danger text-white ml-1">Close</button>
              </div>
              
            </div>
      </div>




      <div id="input_change_user" style="display: none;">
            <div  class="row m-0 shadow-sm pt-3" >
              <div class="col-3">
                <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="userNameChangeInput"  placeholder="Enter Name"> 
                <input class="float-right" type="text" id="txtId" name="txtPrice" style="border:0; border-radius: 10px;height: 40px;background:#f8fafd;width:100%;outline: none;display: none;">
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="addressChangeInput" placeholder="Enter Address"> 
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" class="form-control" id="phoneChangeInput" placeholder="Enter Phone Number"> 
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1">Default Payment Method</label>
                <select class="form-control" id="bankChangeInput">
                    <option value="visa">Visa</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="namabank">Alipay/wechat</option>
                    <option value="COD">COD</option>
                </select>
            </div>
              </div>
                     
              <div class="col-8 p-0  pl-3 pb-4">
                <button id="updateUser" onclick="SaveUserAdmin()" class="btn btn-warning text-white float-left">Update</button>
                 <button onclick="CloseUser()" class="btn btn-danger text-white ml-1">Close</button>
              </div>
              
            </div>
</div>




            <div class="cart_box pl-5 pt-4 shadow-sm mt-3 pb-4" style="width: 100%;margin: auto;">
<div id="scroll_height" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:450px;overflow-y: scroll;padding-top: 5px;padding-right: 10px;">    
    <table class="table table-borderless">
  <thead>
    
  </thead>

  <tbody >
    <div id="prinfManagementUser" class="row m-0" >
    
  
    </div>
  </tbody>

</table>
</div>
</div>

 
          </div>










<div id="management_food_box" class="col-12 bg-white mt-1" style="height: 570px;display: none;">
            <p class="font-weight-bold" style="font-size: 130%">Food Management</p>
            <div id="input_food2" style="display: none;">
            <div  class="row m-0 shadow-sm pt-3" >
              <div class="col-3">
                <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" id="foodAddNameInput"  placeholder=""> 
                <input class="float-right" type="text" id="txtId" name="txtPrice" style="border:0; border-radius: 10px;height: 40px;background:#f8fafd;width:100%;outline: none;display: none;">
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="email" class="form-control" id="foodAddNoteInput" placeholder=""> 
            </div>
              </div>
              <div class="col-3" style="height: 100px;">
                <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="number" class="form-control" id="foodAddPriceInput" placeholder=""> 
            </div>
              </div>
              <div class="col-3 p-0 pt-3 pl-3" style="height: 100px;">
                <div class="btn btn-rounded waves-effect btn-sm" style="border-radius: 10px;width: 90%;background: #ff6f47">
      <span class="text-white">Chọn hình ảnh</span>
      <input class="text-white" type="file" type="file" name="file" id="foodAddImageInput" >
    </div>
              </div>
              <div class="col-8 p-0  pl-3 pb-4">
                <button id="addfood2" onclick="AddFood()" class="btn btn-primary float-left" style="background: #ff6f47;border: 1px solid #ff6f47;">Add</button>
                <button id="updatefood2" onclick="SaveUpdateFood()" class="btn btn-warning text-white float-left" style="display: none;">Update</button>
                 <button onclick="CloseFood()" class="btn btn-danger text-white ml-1">Close</button>
              </div>
              
            </div>
</div>

            <div class="cart_box pl-5 pt-4 shadow-sm mt-3 pb-4" style="width: 100%;margin: auto;">
<div id="scroll_height2" data-spy="scroll" data-target="#myScrollspy" data-offset="10"
                  style="height:450px;overflow-y: scroll;padding-top: 5px;padding-right: 10px;">    
    <table class="table table-borderless">

  <tbody id="prinfManagementFood">


  </tbody>

</table>
</div>
</div>
          </div>
       </div>
     </div> 
     </div> 
    </div>
 
  </body>

  <script type="text/javascript">

    function CloseFood(){
      document.getElementById('input_food2').style.display = 'none';
      document.getElementById('scroll_height2').style.height = '450px';

    }

     function showAdd_food(){
      document.getElementById('scroll_height2').style.height = '280px';
      document.getElementById('addfood2').style.display = 'block'; 
      document.getElementById('updatefood2').style.display = 'none';   
      document.getElementById('input_food2').style.display = 'block';
      document.getElementById('foodAddNameInput').value='';
     document.getElementById('foodAddNoteInput').value='';
    document.getElementById('foodAddPriceInput').value='';
    document.getElementById('foodAddImageInput').value='';

    }


var food =JSON.parse(localStorage.getItem('food'));
  document.getElementById("dem_food").innerHTML=food.length;


    var account =JSON.parse(localStorage.getItem('account'));
    document.getElementById("dem_cus").innerHTML=account.length;
var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
    document.getElementById("dem_payment").innerHTML=paymentFood.length-1;

    var commentCustomer =JSON.parse(localStorage.getItem('commentCustomer'));
    document.getElementById("dem_comment").innerHTML=commentCustomer.length-1;
   

// var paymentFood=[];

var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
if (paymentFood === null) {
        paymentFood = [];
        var paymentFood=[{}];
        localStorage.setItem("paymentFood", JSON.stringify(paymentFood));
    }
var idupFood =JSON.parse(localStorage.getItem('idupFood'));
if (idupFood === null) {
        idupFood = [];
    var idupFood = 8;
    localStorage.setItem("idupFood", JSON.stringify(idupFood));
}



function ManagementFood(){
document.getElementById("prinfManagementFood").innerHTML ='';
var food =JSON.parse(localStorage.getItem('food'));
    for(let i = 0; i < food.length; i++) { 
    var prinfManage =`<tr>
      <td><div>
        <div class="cart_img_box float-left bg-warning" style="width: 30%;height: 80px;">
          <img src="`+food[i].image+`" width="100%" height="100%">
        </div>
        <div class="cart_info_box float-left pl-3" style="width: 70%;height: 80px;">
          <p class="mb-1 font-weight-bold" style="font-size: 115%;">`+food[i].name+`</p>
          <p style="font-size: 85%">`+food[i].note+`</p>
        </div>
      </div> </td>
      
      <td class="text-center"><p class="mt-2" style="padding:5px;">`+food[i].price+`</p> </td>
      <td class="text-center">'<div class="btn btn-danger text-white ml-2" onclick="DeleteFood(`+food[i].id+`)" style="width: 16%;border-radius: 10px;"><i class="fa fa-trash" aria-hidden="true"></i></div>
  <div class="btn btn-warning  text-white mr-2" onclick="UpdateFood(`+food[i].id+`)" style="width: 16%;border-radius: 10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div> </td>
</tr>`;
    document.getElementById("prinfManagementFood").innerHTML +=prinfManage;
    }}

function ManagementFood2(){
document.getElementById("prinfManagementFood2").innerHTML ='';
var food =JSON.parse(localStorage.getItem('food'));
    for(let i = 0; i < food.length; i++) { 
    var prinfManage =`<tr>
      <td><div>
        <div class="cart_img_box float-left bg-warning" style="width: 30%;height: 80px;">
          <img src="`+food[i].image+`" width="100%" height="100%">
        </div>
        <div class="cart_info_box float-left pl-3" style="width: 70%;height: 80px;">
          <p class="mb-1 font-weight-bold" style="font-size: 115%;">`+food[i].name+`</p>
          <p style="font-size: 85%">`+food[i].note+`</p>
        </div>
      </div> </td>
      
      <td class="text-center"><p class="mt-2" style="padding:5px;">`+food[i].price+`</p> </td>
    
</tr>`;
    document.getElementById("prinfManagementFood2").innerHTML +=prinfManage;
    }}



    function paymentPrinf(){
    document.getElementById("prinfPayment").innerHTML ='';

	var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
  	for(let i = 1; i < paymentFood.length; i++) {
   
    var prinf_payment_cart = `<tr style="border-bottom:1px solid #ccc;">
      <td>
      <p>Recipient's name: `+paymentFood[i].name_customer+`</p>
      <p>Address: `+paymentFood[i].address_customer+`</p>
      <p>Phone Number: `+paymentFood[i].phone_customer+`</p>
       <p>Payment Method: `+paymentFood[i].bank+`</p>
      </td>
      
      <td>`+paymentFood[i].showDetailOrder+`<p id="commentPrinfPayment`+paymentFood[i].id_payment+`"></p></td>
      <td class="text-center">`+paymentFood[i].priceTotal+`</td>
      <td class="text-center"><button id="status_prinf`+paymentFood[i].id_payment+`" onclick="verify_payment(`+paymentFood[i].id_payment+`)" class="btn btn-warning text-white">`+paymentFood[i].status+`</button></td>
    </tr>
    ` 
    document.getElementById("prinfPayment").innerHTML +=prinf_payment_cart;
  }

  }



  function paymentPrinfDash(){
    document.getElementById("prinfPaymentDash").innerHTML ='';

	var paymentFood =JSON.parse(localStorage.getItem('paymentFood'));
  	for(let i = 1; i < paymentFood.length; i++) {
   
    var prinf_payment_cart = `<tr style="border-bottom:1px solid #ccc;">
      
      <td>`+paymentFood[i].showDetailOrder+`</td>
 
     
    </tr>
    ` 
    document.getElementById("prinfPaymentDash").innerHTML +=prinf_payment_cart;
  }

  }



  function verify_payment(id){
    for(let i = 0; i < paymentFood.length; i++) {
      if (id == paymentFood[i].id_payment) {
        paymentFood[i].status="Out for Delivery";
        localStorage.setItem("paymentFood", JSON.stringify(paymentFood));
        document.getElementById("status_prinf"+id).innerHTML = paymentFood[i].status;
      }
    }
  }


  function commentPrinf(){
    document.getElementById("commentPrinf").innerHTML ='';

  var commentCustomer =JSON.parse(localStorage.getItem('commentCustomer'));
  var account =JSON.parse(localStorage.getItem('account'));
    for(let i = 1; i < commentCustomer.length; i++) {
   
    var prinf_comment = `<td>`+commentCustomer[i].idPayment+`</td>
    <td>`+account[commentCustomer[i].idUser].username+`</td>
    <td>`+commentCustomer[i].content_comment+`</td>
    ` ;
    document.getElementById("commentPrinfPayment"+commentCustomer[i].idPayment).innerHTML ="Feedback from Customer: "+commentCustomer[i].content_comment;
    document.getElementById("commentPrinf").innerHTML +=prinf_comment;
  }

  }

  </script>
<script type="text/javascript">

    function CloseUser(){
      document.getElementById('input_user').style.display = 'none';
      document.getElementById('scroll_height').style.height = '450px';

    }

     function showAddUser(){
      document.getElementById('scroll_height').style.height = '280px';
      document.getElementById('addUser').style.display = 'block'; 
      document.getElementById('updateUser').style.display = 'none';   
      document.getElementById('input_user').style.display = 'block';
      document.getElementById('input_change_user').style.display = 'none';
      document.getElementById('foodAddNameInput').value='';
     document.getElementById('foodAddNoteInput').value='';
    document.getElementById('foodAddPriceInput').value='';
    document.getElementById('foodAddImageInput').value='';
    }
var account_info = [];
// var account_info =JSON.parse(localStorage.getItem('account_info'));
if (account_info === null) {
        account_info = [];
    }
var account = [];
var account =JSON.parse(localStorage.getItem('account'));
if (account === null) {
        account = [];
    }
    var idChangeUser =0;
    function editUserAdmin(id){
      var account_info =JSON.parse(localStorage.getItem('account_info'));
      document.getElementById('input_user').style.display = 'none';
      document.getElementById('input_change_user').style.display = 'block';

      for(var i = 1; i < account_info.length; i++){
        if( id == account_info[i].accountPayment) {
    idChangeUser=account_info[i].accountPayment;
          document.getElementById("txtId").value = i;
            document.getElementById("userNameChangeInput").value = account_info[i].name_customer;
            document.getElementById("addressChangeInput").value = account_info[i].address_customer;
            document.getElementById("phoneChangeInput").value = account_info[i].phone_customer;
            document.getElementById("bankChangeInput").value = account_info[i].bank;
            
            break;
        }
    }
    }

    function SaveUserAdmin() {
      var account_info =JSON.parse(localStorage.getItem('account_info'));
    for(var i = 0; i < account_info.length; i++){
        if( idChangeUser == account_info[i].accountPayment) {
           account_info[i].name_customer = document.getElementById("userNameChangeInput").value;
            account_info[i].address_customer = document.getElementById("addressChangeInput").value;
            account_info[i].phone_customer = document.getElementById("phoneChangeInput").value;
            account_info[i].bank = document.getElementById("bankChangeInput").value;
            localStorage.setItem("account_info", JSON.stringify(account_info)); 

            ManagementUser();

            break;
        }
    }

    document.getElementById('userNameChangeInput').value='';
     document.getElementById('addressChangeInput').value='';
    document.getElementById('phoneChangeInput').value='';
    document.getElementById('bankChangeInput').value='';
  
  } 


var idup =JSON.parse(localStorage.getItem('idup'));
function AddUser() {
    var checkUsername = 0;
    var id = idup;
    var username = document.getElementById('userNameAddInput').value;
    var password = document.getElementById('passwordAddInput').value;
    var repassword = document.getElementById('rePasswordAddInput').value;
    var level=0;
    if (username != '' && password !='' && repassword !='' && password == repassword) {
      for(let i = 0; i < account.length; i++) {
        if (account[i].username== username) {
          alert("Account Already Exists!");
         
           checkUsername = 1;
            break;
        }

      }
      if (checkUsername == 0) {
    accountSignupAdmin = {id,username,password,level};
    account.push(accountSignupAdmin);
    localStorage.setItem("account", JSON.stringify(account));
    idup++;
    localStorage.setItem("idup", JSON.stringify(idup));
    console.log(account); 
    alert("Registration Successful!");
    ManagementUser();
    }
}else { 
  alert("Unsuccessful Attempt!")
}
}

function deleteUserAdmin(id) {
  var account =JSON.parse(localStorage.getItem('account'));
    for(var i = 0; i < account.length; i++){
        if( id == account[i].id) {
            account.splice(i, 1);
             localStorage.setItem("account", JSON.stringify(account));
            ManagementUser();
            break;
        }
    }
}



function ManagementUser(){
document.getElementById("prinfManagementUser").innerHTML ='';
var account =JSON.parse(localStorage.getItem('account'));
    for(let i = 0; i < account.length; i++) { 
    var prinfManage =`<div class="col-4" style="height: 100px;padding:10px; padding-right:50px;">
      <div class="user_info_admin float-left" style="width: 60%">
        <p class="font-weight-bold" style="font-size: 120%">`+account[i].username+`</p>
        
      </div>
      <div class="user_function_admin float-right" style="width: 40%;display: flex;">
      <div class="btn btn-warning mr-1 text-white" onclick="editUserAdmin(`+account[i].id+`)" style="width: 40%;border-radius: 10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
        <div class="btn btn-danger text-white" onclick="deleteUserAdmin(`+account[i].id+`)" style="width: 40%;border-radius: 10px;"><i class="fa fa-trash" aria-hidden="true"></i></div>

  
    </div></div>`;
    document.getElementById("prinfManagementUser").innerHTML +=prinfManage;
    }}
 function onloadAll1(){
      paymentPrinf();
      ManagementFood();
      paymentPrinfDash();
      ManagementFood2();
      commentPrinf();
      ManagementUser();
    }
  </script>
</html>


