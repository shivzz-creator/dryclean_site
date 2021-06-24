<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>fabspin home page</title>
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
	margin-right:10px;
	display:flex;
	}
	#icon-bar{
	padding:10px;
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
#bt1{
    margin:3px;
}
#bt2{
    margin:3px;
}
@media (max-width: 575.98px) {  }


@media (min-width: 576px) and (max-width: 767.98px) { }

@media (min-width: 768px) and (max-width: 991.98px) { }


@media (min-width: 992px) and (max-width: 1199.98px) {  }


@media (min-width: 1200px) {  }
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
	
      <li class="nav-item active">
        <a class="nav-link" href="#"id="icon-bar" ><b>HOME</b><i class="fa fa-home" id="nav-icon"></i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="icon-bar"><b>DASHBOARD</b><i class="fa fa-dashboard" id="nav-icon"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"id="icon-bar" ><b>CUSTOMER</b><i class="fa fa-user-circle"id="nav-icon"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="reports.php"id="icon-bar" ><b>REPORT</b><i class="fa fa-bar-chart-o"" id="nav-icon"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" id="icon-bar"><b>SETUP</b><i class="fa fa-cogs" id="nav-icon"></i></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" id="icon-bar"><b>SUPPORT</b><i class="fa fa-question-circle-o" id="nav-icon"></i></a>
      
      </li>
    </ul>
    <ul class="navbar-nav ml-auto" id="logged">
     
	<li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img src="https://app.quickdrycleaning.com/fsd1/App/img/User2.png" id="userpic"></img><span id="greet">Hello </span><span id="username"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="	fa fa-gear"></i>Change password</a>
          <a class="dropdown-item" href="#"><i class="fa fa-question-circle-o"></i>Help</a>
          <a class="dropdown-item" href="logout.php"><i class="fa fa-mail-reply"></i>Logout</a>
        </div>
  </div>
  </ul>
  
</nav>
<div class="container">
<div class="jumbotron">
  <h1 class="display-4"><b>Welcome to FabSpin</b></h1>
 <div id="h-form">
	<div class="custom-control custom-radio">
  1.<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1"><b>Search Customer</b>(Name, Address, Mobile Number, Membership/customer id)</label>
</div>
<div class="custom-control custom-radio">
  2.<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2"><b>Search Invoice</b></label>
</div>
  <hr class="my-4"><!-- -->
  <form>
	<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option selected>Select Here</option>
		<option value="1">Search All</option>
		<option value="2">Customer Code</option>
		<option value="3">Name</option>
		<option value="4">Mobile</option>
		<option value="5">Membership Id</option>
		<option value="6">Address</option>
      </select>
	   <input class="form-control mr-sm-2" type="search" placeholder="Search Here" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchbtn">Search</button>
    </div>
</form>
<hr class="my-4">
  <p class="lead">
    <a href="#" class="btn btn-secondary"id="bt1">Add New Customer <i class="fa fa-user-plus" id="bicon"></i></a>
	<a href="#" class="btn btn-secondary" id="bt2">Daily Dashboard  <i class="	fa fa-dashboard"id="bicon"></i></a>
	
  </p>
</div>
</div>
</div>
</div>
<div class="container" id="get-started">
  <div class="card-deck-wrapper">
	<div class="card-deck">
    <div class="card text-white bg-dark mb-3"style="max-width: 17rem;">
      <div class="card-body">
        <h5 class="card-title">Help Me<i class="fa fa-question-circle-o" ></i></h5>
        <p class="card-text"> To understand how to deliver garments post processing.</p>
        <a href="#" class="btn btn-primary"id="gs-button">Start Tour <i class="	fa fa-video-camera" ></i></a>
      </div>
    </div>

    <div class="card text-white bg-dark mb-3"style="max-width: 17rem;">
      <div class="card-body">
        <h5 class="card-title">Help Me <i class="fa fa-question-circle-o" ></i></h5>
        <p class="card-text">To add a new customer and create a new order</p>
        <a href="#" class="btn btn-primary"id="gs-button">Start Tour <i class="	fa fa-video-camera" ></i></a>
      </div>
    </div>
  
    <div class="card text-white bg-dark mb-3"style="max-width: 17rem;">
      <div class="card-body">
        <h5 class="card-title">Help Me<i class="fa fa-question-circle-o" ></i></h5>
        <p class="card-text">To connect to support team for technical assistance </p>
        <a href="#" class="btn btn-primary" id="gs-button">Start Tour <i class="	fa fa-video-camera" ></i></a>
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
