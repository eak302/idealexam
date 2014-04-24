<?php
	//include('include/connect.php');
	//connect();
	//session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ideal examp home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/ladda-theme.css" rel="stylesheet">
    <link href="css/ladda.css" rel="stylesheet">
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ladda-themeless.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
    <script src="js/spin.js"></script>
    <script src="js/ladda.js"></script>
    <script>
		$(function(){
			$('#btnLogin').click(function(){
                  var btn = $(this); 
                  btn.button('loading');
            });
        });
		$(document).ready(function(e) {
			$('#myCarousel').carousel({
    			interval: 4000
    		});	
        });
		
		function Login(){
			alert('login');	
			var btn = $(this); 
			btn.button('loading');
		}
	
		function loading(){
				//myApp.showPleaseWait();
				alert('test');
		}
		$(function() {
			
			$('#form-submit').click(function(e) {
                e.preventDefault();
				var l = Ladda.create(this);
				l.start();
				$.ajax({
					url: 'include/function.php',
					type: 'POST',
					data: 'action=login&username=eak302@gmail.com&password=028623112'
				})
				.success(function(result){
					var obj = $.parseJSON(result);
					alert(obj.username);
				});

            });
		});
		
		//exam register function
		$(function($){
			//var validation_holder;
			$('#form-submit1').click(function(e) {
                e.preventDefault();
				var l = Ladda.create(this);
				l.start();
				register();
				l.stop();
            });
			
			
		});
		
	</script>
  </head>
  <body>

    <div class="container">
    	<div class="row show-grid">
        
            <div class="col-md-8">
                <h1>Hello, world!</h1>
            </div>
            <div class="col-md-4">
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
                  Login
                </button>
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#regisbox">
                  Register
                </button>
                
            </div>
        </div>
    </div>
    
  </body>
  	<!--popup login-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="left:0;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">กรุณาล็อกอิน เพื่อเข้าสู่ระบบ</h4>
          </div>
          <div class="modal-body">
                <form>
            
                    <div class="form-group">
            
                        <label for="inputEmail">Email</label>
            
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            
                    </div>
            
                    <div class="form-group">
            
                        <label for="inputPassword">Password</label>
            
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            
                    </div>
            
                </form>


          </div>
          <div class="modal-footer">
          	<a href="#" id="form-submit" class="btn btn-primary btn-lg ladda-button" data-style="slide-left" data-size="l" style="padding:7px 14px; border-radius:4px; font-size:14px;"><span class="ladda-label" style="font-weight:normal;">Login</span></a>
          	<!--<button type="button" class="btn btn-primary" id="btnLogin" data-loading-text="Loading">Login</button>-->
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--popup register-->
    <div class="modal fade" id="regisbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="left:0;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">ลงทะเบียน</h4>
          </div>
          <div class="modal-body">
                <form id="register_form">
            
                    <div class="form-group">
            
                        <label for="Username">username</label>
            
                        <input type="text" class="form-control" id="username" placeholder="Username">
            
                    </div>
                    <div class="form-group">
            
                        <label for="Password">Password</label>
            
                        <input type="password" class="form-control" id="password" placeholder="Password">
            
                    </div>
                    <div class="form-group">
            
                        <label for="name">Name</label>
            
                        <input type="text" class="form-control" id="name" placeholder="Name">
            
                    </div>
                    <div class="form-group">
            
                        <label for="name">Surname</label>
            
                        <input type="text" class="form-control" id="surname" placeholder="Surname">
            
                    </div>
                    
                    <div class="form-group">
            
                        <label for="name">Name English</label>
            
                        <input type="text" class="form-control" id="name_en" placeholder="Name English">
            
                    </div>
                    
                    <div class="form-group">
            
                        <label for="name">Surname English</label>
            
                        <input type="text" class="form-control" id="surname_en" placeholder="Surname English">
            
                    </div>
                    
                    <div class="form-group">
            
                        <label for="email">Email</label>
            
                        <input type="email" class="form-control" id="email" placeholder="Email">
            
                    </div>
                    
                    <div class="form-group">
            
                        <label for="tel">Telephone</label>
            
                        <input type="text" class="form-control" id="tel" placeholder="Telephone Number">
            
                    </div>
                    
                    <div class="form-group">
            
                        <label for="school">School</label>
            
                        <input type="text" class="form-control" id="school" placeholder="School">
            
                    </div>

          </div>
          <div class="modal-footer">
          	<a href="#" id="form-submit1" class="btn btn-primary btn-lg ladda-button" data-style="slide-left" data-size="l" style="padding:7px 14px; border-radius:4px; font-size:14px;"><span class="ladda-label" style="font-weight:normal;">Register</span></a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            
            </form>
          </div>
        </div>
      </div>
    </div>

  
</html>