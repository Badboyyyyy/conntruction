<!DOCTYPE html>
<html>
<head>
<title>DKdesigners|One place solution for your all designing content</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style type="text/css">
  	@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
  	
  	.bg{
  		  min-height: 100%;
             min-width: 1024px;
	
  /* Set up proportionate scaling */
          width: 100%;
         height: auto;
	
  /* Set up positioning */
             position:fixed;
             top: 0;
             left: 0;
  		 background-position: center;
  		 background-size: cover;
  		 background-repeat: no-repeat;
  		 backface-visibility: hidden;
  		 background-image: linear-gradient(rgba(200,0,100,0.2),rgba(0,0,100,0.2)), url("w1.jpg");
  	}
  	h2{
  		font-family: lobster;
  		color: white;
  		
  	}
  	h3{
  		font-family: lobster;
  		color: white;
  		margin-left: 12%;
  		margin-top: 10%;
  		font-size: 40px;

  	}
  	li{
  		padding: 5px;
  		float: left;
  		list-style: none;
  		color: white;
  	}
  	
  	.navbar-brand{
  		 animation: colorchange 4s linear infinite;
  		 border:2px solid white;
  		 padding: 5px;
  		 border-radius: 10px;
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
  

 
  	b{
  		color: yellow;
  	}
  	.cir{
  		   width: 80px;
  		   height: 80px;
  		   border-radius: 50%;
  		   border:3px solid white;
  		   padding: 15px;
  		   margin-left: 35%;
  		   margin-top: 3%;
  		   transition: 0.1s;
  	}
  	.cir:hover{
  		         background-color: rgba(150,150,150,0.4);
  	}
  	img{
  		   width: 40px;
  		   height: 40px;

  	}
  	#ws2{
  		   width: 60px;
  		   height: 60px;
  	}
  	.box{
  		   width: 250px;
  		   height: 80px;
  		   background-color: rgba(250,250,250,0.3);
  		   border:2px solid white;
  		   border-radius: 3%;
  		   margin-left: 45%;
  		   margin-top: -5%;
  		   
  		   text-align: center;
  		   color: #fff;

  	}
  	.box2{
  		   width: 250px;
  		   height: 80px;
  		   background-color: rgba(250,250,250,0.3);
  		   border:2px solid white;
  		   border-radius: 3%;
  		   margin-left: 45%;
  		   margin-top: -5%;
  		   
  		   text-align: center;
  		   color: #fff;

  	}
  	.box3{
  		   width: 250px;
  		   height: 80px;
  		   background-color: rgba(250,250,250,0.3);
  		   border:2px solid white;
  		   border-radius: 3%;
  		   margin-left: 45%;
  		   margin-top: -5%;
  		   text-align: center;
  		   color: #fff;

  	}
  	.btn{
  		    outline: none;
  		    margin-top: 3%;
  		    color: #fff;
  	}
  	a{
  		 margin-left:80%;
  		 margin-top: -5%;
  	}
  #home{
         margin-top:2%;
         color: white; 
         margin-left: 60%;
         font-size:30px;
  }
  .navbar-brand a{
                    text-decoration:none;
                    color:white;
                    margin-left:1%;
  }
  @media only screen and (max-width:1600px){
      .cir{
          margin-top:5%;
          
      }
  }
  @media only screen and (max-width: 768px){
      .cir{
          margin-left:25%;
          margin-top:6%;
      }
      .box{
            margin-left:40%;
            margin-top:-6%;
        
      }
      .box2{
             margin-left:40%;
             margin-top:-6%;
      }
      .box3{
             margin-left:40%;
             margin-top:-6%;
      }
  }
  @media only screen and (max-width: 720px){
      .cir{
              margin-left:3%;
      }
      .box{
             margin-left:13%;
             width:18%;
             margin-top:-7%;
      }
      .box2{
             margin-left:13%;
             width:18%;
             margin-top:-7%;
           }
    .box3{
             margin-left:13%;
             width:18%;
             margin-top:-7%;
    }
    .input-sm{
         width:80%;
    }
    .box p{
        font-size:90%;
    }
  }
   @media only screen and (max-width: 480px){
      .cir{
              margin-left:2%;
              margin-top:1%;
      }
      .box{
             margin-left:12%;
             width:18%;
             margin-top:-7%;
      }
      .box2{
             margin-left:12%;
             width:18%;
             margin-top:-7%;
           }
    .box3{
             margin-left:12%;
             width:18%;
             margin-top:-7%;
    }
    .input-sm{
         width:80%;
    }
    .box p{
        font-size:90%;
    }
  }
  </style>
</head>
<body>
	<div class="bg">
		<header>
			<div class="navbar navbar-expand-sm navbar-light">
				<div class="navbar-brand">
					<h2><a href="index.html">DKdesigners</a></h2>
				</div>
				
			</div>
		</header>	
		         	
				<div class="cir">
					<img src="gmail2.png" width="80px" height="80px" id="gm">
				</div>
				<div class="box">
					<h5>Email us at:</h5>
					<p>dkdesigners98@gmail.com</p>
				</div>
				<div class="cir" style="padding: 8px" id="ws">
					<img src="whatsapp.png" width="100px" height="100px" style="border-radius: 60%;" id="ws2">
				</div>
				<div class="box2">
					<h5>Contact us @</h5>
					<p>+91 8305025575</p>
				</div>
				<div class="cir" id="ms">
					<img src="msg.png" width="80px" height="80px" style="border-radius: 50%;" id="ms2">
				</div>
				<form name="myform" method="post" action="contact.php">
				<div class="box3" style="height: 120px">
					<h5>Leave a message</h5>
					<input type="text" name="t1" class="input-sm" id="message" placeholder="Enter your query with your email address*">
					<button class="btn btn-sm bg-danger" name="s1">Send</button>
				</div>
				</form>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".cir:first").click(function(){
				$(".cir:first").animate({width:"80px"},1000);
				$(".cir:first").animate({height: "80px"},1000);
				$("#gm").animate({width:"40px"});
				$("#gm").animate({height:"40px"});
				$(".cir:first").animate({marginLeft: "-=100px"});
				$(".box").toggle();
			})
			$("#ws").click(function(){
				$("#ws").animate({width:"80px"},1000);
				$("#ws").animate({height: "80px"},1000);
				$("#ws2").animate({width:"60px"});
				$("#ws2").animate({height:"60px"});
				$("#ws").animate({marginLeft: "-=100px"});
				$("#ws").animate({marginTop: "-=100px"});
				$(".box2").toggle();
			})
			$("#ms").click(function(){
				$("#ms").animate({width:"80px"},1000);
				$("#ms").animate({height: "80px"},1000);
				$("#ms2").animate({width:"40px"});
				$("#ms2").animate({height:"40px"});
				$("#ms").animate({marginLeft: "-=100px"});
				
				$(".box3").toggle();
			})
		

	    })
	</script>
	 <script>
  $(document).ready(function(){
      $(".btn").click(function(){
          var name=$("#message").val();
          if (name == ''){
              swal({
                      title: "Warning",
                      text: "Please enter Your Message",
                      icon: "warning",
              });
          }
          else{
                swal({
                           title: "Succesfull!!",
                           text: "Your Mesage is submitted! Our team will contact you soon.",
                           icon: "success",
                         });
          }
      })
  })
   
  </script>

</body>
</html>
<?php
   $con=mysqli_connect("localhost","id13749868_dk264","Dhavish@681998" );
   mysqli_select_db($con,"id13749868_mywebsite");
   if(isset($_POST['s1']))
   {
   	  $a1= $_POST['t1'];
   	  $i="INSERT into msg(msg) values('$a1')";
   	  mysqli_query($con, $i);
   }


  ?>