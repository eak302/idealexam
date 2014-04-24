<?php
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register ideal example</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/validationEngine.jquery.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">

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
    <script src="js/jquery.validationEngine.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/languages/jquery.validationEngine-en.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$('#form').validate(
				{
					rules: {
					name: {
						minlength: 2,
						required: true
					},
					city: {
						minlength: 2,
						required: true
					},
					state: {
						minlength: 2,
						required: true
					},
					email: {
						required: true,
						email: true
					}
					
				},
				
				highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					success: function(element) {
						element
						.text('OK!').addClass('valid')
						.closest('.control-group').removeClass('error').addClass('success');
					}
			});
		
		});
	</script>
  </head>
  <body>
  	<header>
    	<div class="container main-container">
        	<div class="row">
                	<div class="span12">
                    	<h1>Register Page</h1>
                    </div>
			</div>
        </div>
    </header>
    
    <section>
    	<div class="container main-container">
            <div class="row">
                <div class="span12">
                    
                </div>
            </div>
        </div>
	</section>
    
  	 
    
  </body>
  <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
          	<button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  
</html>