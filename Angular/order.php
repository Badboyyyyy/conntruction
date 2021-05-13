<!DOCTYPE html>
<html lang="en">
<head>
    <title>DKdesigners|One place solution for your all designing content</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');

    
    .bg{
       width: 100%;
       height: 100vh;
       background-size: cover;
       background-repeat: no-repeat;
       background-image: linear-gradient(rgba(0,0,90,0.5),rgba(0,0,90,0.5)), url("servb.jpg");
    }
    .em1{
           width: 100%;
           height: 100vh;
           padding: 5px;
           background-size:cover;
    }
    h2{
      font-family: lobster;
      color: white;
      
    }
    h3{
      font-family: lobster;
      color: white;
      margin-left: 20%;
      font-size: 80px;
      margin-top:-5%;

    }
    b{
        color: yellow;
    }
    .navbar-brand{
       animation: colorchange 4s linear infinite;
       border:2px solid white;
       padding: 5px;
       border-radius: 10px;
    }
    h5{
        font-family: 'Dancing Script', cursive;
        font-size:30px;
        animation: blink 4s linear infinite;
    }
    @keyframes blink{
        0%{
            opacity:1;
        }
        100%{
              opacity:0;
        }
    }
    
    @keyframes colorchange{
      0%{

           border-color: #FFA500; 
      }
      25%{
        
           border-color: #008000; 
      }
      50%{
           border-color: #FFFF00; 
      }
      100%{
           border-color: #00FF00; 
      }
    }
    .main{
            width: 350px;
            height: 400px;
            background-color: rgba(250,255,255,0.5);
            margin-left: 30%;
            border-radius: 10px;
            margin-bottom: 5%;
             margin-top: 5%;

    }

    h4{
        margin-left: 30%;
        font-family:acme;
        padding-top: 5px;
        color: white;
    }
    hr{
        border-color: #fff;
        width: 90%;
    }
    label{
            padding: 10px;
            font-family: acme;
            font-size: 25px;
    }
    input{
            border-radius: 10px;
            outline: none;
            border:none;
            text-align: center;
    }
    .btn{
          margin-left: 30%;
    }
    input.ng-empty{
      background-color: pink;
    }
    input.ng-valid{
         background-color:  light green;
    }

    select{
      outline: none;
    }
    .navbar-brand a{
       text-decoration: none;
    }

     .line { 
        width: 10%; 
        margin-left:20%;
        height:auto;
        background-color:#fff;
        border:1px solid white;
        animation: animate 5s linear infinite; 
    } 
  
    @keyframes animate { 
        0% { 
            width:20%;
        } 
  
        50% { 
            width:40%; 
        } 
  
        75% { 
                width:60%; 
        } 
        100%{
               width:10%;
        }
    } 
     .container-fluid li {
       float:right;
       list-style-type:none;
       display:inline-block;
       padding:10px;
       color:white;
     }
     .container-fluid a{
         color:white;
     }
    .container-fluid a:hover{
             color: white;
  		     text-decoration: none;
  		     border-top: 1px solid white;
    }
    body {
    background:#333;
}
#login {
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	margin-top:50px;
	margin-left:30%;
}
.login {
	font-family: 'Josefin Sans', sans-serif;
	-webkit-transition: .3s;
	-moz-transition: .3s;
	transition: .3s;
	-webkit-transform: rotateY(40deg);
	-moz-transform: rotateY(40deg);
	transform: rotateY(40deg);
}
.login:hover {
	-webkit-transform: rotate(0);
	-moz-transform: rotate(0);
	transform: translateY(-1);
}
.login article {
	
}
.login .form-group {
	margin-bottom:17px;
}
.login .form-control,
.login .btn {
	border-radius:0;
}
.login .btn {
	text-transform:uppercase;
	letter-spacing:3px;
}
.input-group-addon {
	border-radius:0;
	color:#fff;
	background:#f3aa0c;
	border:#f3aa0c;
}
.forgot {
	font-size:16px;
}
.forgot a {
	color:#333;
}
.forgot a:hover {
	color:#5cb85c;
}

#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
    color: #1d1d1d;
    font-size: 19px;
    line-height: 1.7em;
    font-weight: 300;
    padding: 50px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin-bottom: 100px;
}
.input-group-addon {
    border-radius: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
        border-right-color: rgb(243, 170, 12);
        border-right-style: none;
        border-right-width: medium;
}
   @media only screen and (max-width:768px){
        h3{
            font-size:50px;
            margin-top:5%;
        }
    }
    @media only screen and (max-width:479px){
        h3{
            font-size:20px;
        }
        .main{
                width:60%;
                height:58%;
                margin-left:20%;
        }
        label{
               padding:2px;
               font-size:15px;
        }
        h4{
            font-size:20px;
        }
        input{
             width:60%;
        }
        select{
            width:60%;
        }
        .btn{
              width:60%;
              margin-top:2%;
              margin-left:25%;
        }
        li{
            padding:5px;
        }
    }
    .card-body{
                background-image:url("dklogo3d.jpg");
                background-size:cover;
                text-align:center;
    }
    
  </style>
</head>
<body>
  <div class="bg">
    <div class="em1">
      <header>
      <div class="navbar navbar-expand-sm navbar-light">
        <div class="navbar-brand">
          <a href="index.html"><h2>DKdesigners</h2></a>
        </div>
      </div>
      <h3>Y<b>O</b>ur <b>B</b>usiness <b>O</b>ur <b>S</b>kills</h3>
      <div class="line"></div>
    </header>
    <section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 ">
                <div class=" ">
                    <div class="card-body">
                        <img src="dklogo3d.jpg" width="100%">
                        <h5 class="text-white">Your Thought. Our Design</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border bg-warning">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input  name="user" placeholder="Full Name" class="form-control" type="text" id="usern">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="mob" name="mobile" placeholder="Mobile No." class="form-control" required="required" type="text" >
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="inputState" class="form-control" id="serv" name="service">
                                    <option selected>Choose ...</option>
                                    <option> Buisness Cards</option>
                                    <option> Website Designing</option>
                                    <option> Logo Designs</option>
                                    <option> Social Media Posts</option>
                                    <option> Packaging</option>
                                    <option> Brochers</option>
                                  </select>
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-danger" name="s1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

   
    <div class="container-fluid fixed-bottom">
			<ul>
				<li><a href="about.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="contact.php">Contact us</a></li>
			</ul>
		</div>
  </div>
  <script type="text/javascript">
    var app = angular.module("myapp",[]);
    app.controller('myctrl',function($scope){
          $scope.user='';
          $scope.email='';
    });
  </script>

 
 
</body>
</html>
<?php
   $con=mysqli_connect("localhost","id13749868_dk264","Dhavish@681998" );
   mysqli_select_db($con,"id13749868_mywebsite");
   if(isset($_POST['s1']))
   {
   	  $a1= $_POST['user'];
   	  $a2 = $_POST['email'];
   	  $a3= $_POST['mobile'];
   	  $a4=$_POST['service'];
   	  $i="INSERT into data (name,Email,Mobile,Category) values('$a1', '$a2','$a3','$a4')";
   	  $i2= mysqli_query($con, $i);
       if($i2>0){
          ?>
      <script>
        swal("Thanks", "Our Team will contact you shortly", "success");
      </script>
      <?php
       }
       else
       {
        ?>
        <script>
          swal("Sorry", "Your request could not proceed", "error");
        </script>
        <?php
       }
   }


  ?>