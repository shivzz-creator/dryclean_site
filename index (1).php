
<?php
session_start();
$error="";
$link=mysqli_connect("localhost","root","","shivansh");
	if(mysqli_connect_error()){
	    die("problem");
	}else{
        echo("connected succesfully");
    }
    if(isset($_POST['submit'])){
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;

    $username = isset($_POST['username']) ? $_POST['username'] : $username;
    $password = isset($_POST['password']) ? $_POST['password'] : NULL;
    $storecode = isset($_POST['storecode']) ? $_POST['storecode'] : NULL;


	$username=$_POST['username'];
	$password=$_POST['password'];
	$storecode=$_POST['storecode'];
    $query="SELECT id from login WHERE username='$username' and password='$password' and storecode='$storecode' ";
    $result=mysqli_query($link,$query);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
        header('location:fabspinhome.php');
    }else{
        $error="try again";
    }
    }    
	?>




<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Login Page</title>
		<style type = "text/css">
				#userpic{
					margin:5px;
					padding:4px;
					border:2px inset white;
					border-radius:50%;
				}
				#logged{
					position:relative;
					right:30px;
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
				#c1{
				position:relative;
				top:80px;
				left:60px;
				
				
				}
				#customRadio1{
					color:#a3c2c2;
					border:2px inset #e0b3ff ;
				}
				body{
                    
					font-family: "Lucida Console", Courier, monospace;
					background-image:url('	https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ9u5r3OhrD66V8cHlhf2pP4d3D7dvF24zwzA&usqp=CAU');
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
				#heading{
					align : center;
				}	
				#logimg{
					margin:8px;
					padding:8px;
					border:2px inset white;
					border-radius:50%;
				}
				#exampleFormControlInput1{
					width:150px;
				
				}
				i{
				
				width:5px;height:5px;
				}
				#error{
				    
				}
                .container{
                    background-color:white;
                }
				@media (max-width: 575.98px) {  }
				@media (min-width: 576px) and (max-width: 767.98px) { }
				@media (min-width: 768px) and (max-width: 991.98px) { }
				@media (min-width: 992px) and (max-width: 1199.98px) {  }
				@media (min-width: 1200px) {  }
                #loginarea{
                    position:relative;
                    top:150px;
                    width:200px;
                    left:150px;
                }
                #logincontainer{
                    position:relative;
                    top:100px;
                }
                #materialLoginFormEmail{
                    width:100px;
                }
		</style>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">
			<img src="https://app.quickdrycleaning.com/fsd1/App/img/QDC60.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy" >
		   <b>FabSpin</b>  </a>  
		
</nav>
<div class="alert alert-danger" role="alert">
  <?php echo""."$error"; ?>
</div>
<div class="container" id="logincontainer">
<div class="card text-white bg-dark mb-3 mx-auto" style="max-width: 20rem;" id="loginarea">

  <h5 class="card-header info-color white-text text-center py-4">
  <i class="fa fa-user-circle"></i><b>USER LOGIN</b>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;"  method="post" >

      <!-- Email -->
      <div class="sm-form">
      <label for="materialLoginFormEmail">Username</label>
        <input type="text" id="materialLoginFormEmail" class="form-control" name="username">
        
      </div>

      <!-- Password -->
      <div class="sm-form">
      <label for="materialLoginFormPassword">Password</label>
        <input type="password" id="materialLoginFormPassword" name="password" class="form-control">
        
      </div>
	<!-- Email -->
      <div class="sm-form">
      <label for="materialLoginFormE">Storecode</label>
        <input type="text" id="materialLoginFormE" class="form-control" name="storecode">
        
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  name ="submit" type="submit">Sign in</button>

     

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
	
	</body>
</html>