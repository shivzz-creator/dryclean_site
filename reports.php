<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>fabspin reports page</title>
	<style type="text/css">
	#userpic{
	height:32px;
	width:32px;
	margin:5px;
	padding:4px;
	border:2px inset white;
	border-radius:50%;
	}
	#logged{
	position:relative;
	right:55px;
	}
	#nav-icon{
	width:18px;
	padding: 0px 5px;
	margin-right:6px;
	display:flex;
	}
	#icon-bar{
	padding:4px;
	margin-right:30px;
	margin-left:1px;
	border-right:1px solid #a3c2c2;
	}
	#navbar-list a {
  color:white;
  
}
#navbar-list a:hover {
  color:black;
  padding:6px;
  margin-bottom:4px;
  transition: all 0.3s ease;
	font-size:16px;
	background-color:#a3c2c2;
  
}
.jumbotron{

background-image: url('https://media.istockphoto.com/photos/the-gray-and-silver-are-light-black-with-white-the-gradient-is-the-picture-id1188030698?b=1&k=6&m=1188030698&s=170667a&w=0&h=g2evBkDG-PEB85K4Ou3QBCfFKKf9K0dmqFjeG8WwKNs=');
  background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  opacity:0.93;
	top:40px;
	margin: 0px 10px;
}
#customRadio1{
color:#a3c2c2;
border:2px inset #e0b3ff ;
}
body{
background-color: #e0b3ff;

}
.form-inline{
display:flex;
}
.custom-select custom-select-sm{
width:120px;
}
#searchbtn{
position:relative;
top:4px;
}
#get-started{
position:relative;
top:70px;
}
#gs-button{
padding:15px;
margin:6px;
}
#d-a{
color:black;

}
#drop{
background-color: #001a33;
}
#c-table{

position:relative;
top:200px;
width:100%;
}
 #bt1{
  padding:7px;
  margin:7px;
  }
  .badge{
  padding:7px;
  
  }
	</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="https://app.quickdrycleaning.com/fsd1/App/img/QDC60.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
   <b>FabSpin</b>  </a>
  
  
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="navbar-list">
	
     <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-user" id="nav-icon"></i><b>Customer</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="fabspinhome.php" >Home</a>
          <a class="dropdown-item" href="#" >Customer prefrences</a>
          <a class="dropdown-item" href="#" >Add new</a>
		  <a class="dropdown-item" href="#" >Merge</a>
		  <a class="dropdown-item" href="#" >Send promotional SMS</a>
		  <a class="dropdown-item" href="#" >Customer Rating</a>
		  <a class="dropdown-item" href="#" >Customer Advances</a>
        </div>
		</li>
	  <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="fa fa-cogs" id="nav-icon"></i><b>Admin</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#" >Change password</a>
		  <a class="dropdown-item" href="#" >Access Authentication</a>
		  <a class="dropdown-item" href="#" >Set Up</a>
		  <a class="dropdown-item" href="#" >Barcode Configurator</a>
		  <a class="dropdown-item" href="#" >Search Invoice</a>
		  <a class="dropdown-item" href="#" >SMS Configuration</a>
		  <a class="dropdown-item" href="#" >Daily Dashboard</a>
		  <a class="dropdown-item" href="#" >Email and Mobile App Notifications</a>
		  <a class="dropdown-item" href="#" >Mobile App Content Setup</a>
		  <a class="dropdown-item" href="#" >Payment Gateway Setup</a>
		  <a class="dropdown-item" href="#" >Email Configuration</a>
		  <a class="dropdown-item" href="#" >Discount Restriction</a>
		  <a class="dropdown-item" href="#" >Sticker Configuration</a>
		  <a class="dropdown-item" href="#" >QDC Marketplace</a>
		
		

		
          
        </div>
		</li>
  <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-home" id="nav-icon"></i><b>Process</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#" >Print Barcode</a>
          <a class="dropdown-item" href="#" >Send to Workshop</a>
          <a class="dropdown-item" href="#" >Recieve From Workshop</a>
		  <a class="dropdown-item" href="#" >Packing Stickers</a>
		  <a class="dropdown-item" href="#" >Workshop Note</a>
        </div>
		</li>
  <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-car" id="nav-icon"></i><b>Pickup</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#" >Multiple Payment Delivery</a>
          <a class="dropdown-item" href="#" >Order Log</a>
          <a class="dropdown-item" href="#" >Home Pickup Scheduler</a>
		  <a class="dropdown-item" href="#" >Home Dropoff Scheduler</a>
		  <a class="dropdown-item" href="#" >Assign to Driver</a>
        </div>
		</li>
  <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-bank" id="nav-icon"></i><b>Account</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#" >Cash/Day book</a>
		  <a class="dropdown-item" href="#" >Detail Cash/Day Book</a>
		  <a class="dropdown-item" href="#" >Expenses</a>
		  <a class="dropdown-item" href="#" >Income</a>
		  <a class="dropdown-item" href="#" >Payment Type</a>
		  <a class="dropdown-item" href="#" >Tax Reports</a>
		  <a class="dropdown-item" href="#" >Accounts Recievable</a>
        </div>
		</li>		
	<li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-file" id="nav-icon"></i><b>Reports</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#" >Order</a>
		  <a class="dropdown-item" href="#" >Sales and Delivery</a>
		  <a class="dropdown-item" href="#" >Service Wise Order</a>
		  <a class="dropdown-item" href="#" >Service and Garment</a>
		  <a class="dropdown-item" href="#" >Category Wise Report</a>
		  <a class="dropdown-item" href="#" >Garment Wise Report</a>
		  <a class="dropdown-item" href="#" >Garment Status</a>
		  <a class="dropdown-item" href="#" >Business Summary Report</a>
		  <a class="dropdown-item" href="#" >Payment Adjustment</a>
		  <a class="dropdown-item" href="#" >Returned Garments</a>
		  <a class="dropdown-item" href="#" >Daily Customer addition</a>
		  <a class="dropdown-item" href="#" >Invoice Statement</a>
		  <a class="dropdown-item" href="#" >Login History</a>
		  <a class="dropdown-item" href="#" >Marked Read By Users</a>
		  <a class="dropdown-item" href="#" >Cancel Booking</a>
		  <a class="dropdown-item" href="#" >Without Ticket Delivery</a>
		  <a class="dropdown-item" href="#" >Order by locality</a>
		  <a class="dropdown-item" href="#" >Package Report</a>
		  <a class="dropdown-item" href="#" >Pending Stock</a>
		  <a class="dropdown-item" href="#" >Stock Reconcillation</a>
		  <a class="dropdown-item" href="#" >Customer App Feedback</a>
		  <a class="dropdown-item" href="#" >Customers at risk</a>
		  
        </div>
		</li>	
		
	<li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-database" id="nav-icon"></i><b>Master-Data</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
         <a class="dropdown-item" href="#" >Store Information</a>
		 <a class="dropdown-item" href="#" >Services</a>
		 <a class="dropdown-item" href="#" >Laundary Services</a>
		 <a class="dropdown-item" href="#" >Garment Category</a>
		 <a class="dropdown-item" href="#" >Garment List</a>
		 <a class="dropdown-item" href="#" >Price List</a>
		 <a class="dropdown-item" href="#" >Garment Descriptions</a>
		 <a class="dropdown-item" href="#" >Brand </a>
		 <a class="dropdown-item" href="#" >Colours</a>
		 <a class="dropdown-item" href="#" >Garment Return Cause</a>
		 <a class="dropdown-item" href="#" >Payment Adjustment Type</a>
		 <a class="dropdown-item" href="#" >Payment Mode Types</a>
		 <a class="dropdown-item" href="#" >Holidays</a>
		 <a class="dropdown-item" href="#" >Garment Checking Staff</a>
		 <a class="dropdown-item" href="#" >Package Assign</a>
        </div>
		</li>		
	<li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="icon-bar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-download" id="nav-icon"></i><b>Drop</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#" >Edit Order</a>
          <a class="dropdown-item" href="#" >Cancel Order</a>
        </div>
		</li>	
    </ul>
		
</nav>
<div class="container"id="c-table" >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>ORDER REPORTS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      </ul>
   
  </div>
</nav>
<div class="jumbotron">



 <form class="form-inline my-2 my-lg-0">
	<div class="col-auto">
	<label class="form-check-label" for="inlineCheckbox1"><span class="badge badge-secondary"><i class="fa fa-search" id="nav-icon"></i></span></label>
  <input class="form-check-input" type="text" id="inlineCheckbox1" placeholder="Search Order">
  </div>

<div class="col-auto">
<label class="form-check-label" for="inlineCheckbox2"><span class="badge badge-secondary"><i class="fa fa-user-o" id="nav-icon"></i></span></label>
  <input class="form-check-input" type="text" id="inlineCheckbox2" placeholder="Filter by customer">
  </div>

<div class="col-auto">
 <label class="form-check-label" for="inlineCheckbox3"><span class="badge badge-secondary"><i class="fa fa-user" id="nav-icon"></i></span></label>
  <input class="form-check-input" type="text" id="inlineCheckbox3" placeholder="Filter by user" >
 </div>

	<div class="col-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit "id="bt1">SHOW<i class="fa fa-download" id="nav-icon"></i></button>
 </div>
    </form>


<div class="table-responsive">
<table class="table table-striped table-dark" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Date / Time</th>
      <th scope="col">Order No.</th>
      <th scope="col">Name</th>
	  <th scope="col">Address</th>
	  <th scope="col">Phone</th>
	  <th scope="col">Due Date</th>
	  <th scope="col">Pcs.</th>
	  <th scope="col">Weight</th>
	  <th scope="col">Gross Amount</th>
	  <th scope="col">Discount</th>
	  <th scope="col">Net Amount</th>
	  <th scope="col">Paid</th>
	  <th scope="col">Balance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>14 july 2020 10:38AM</td>
      <td>A9519</td>
      <td>	ravinder</td>
	  <td>mohan garden</td>
	  <td>9654542974</td>
	  <td>18 Jul 2020</td>
	  <td>4</td>
	  <td>32</td>
	  <td>34</td>
	  <td>34</td>
	  <td>43</td>
	  <td>4</td>
	  <td>200</td>
    </tr>
      
  </tbody>
</table>
</div>
</div>
</div>
 
        </div>
    </div>
</div>	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>