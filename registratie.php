<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gebruikers registratie | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registratie.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Aanmelden</h1>
					<p>Vul het formulier in met de juiste waarden.</p>
					<hr class="mb-3">
					<label for="username"><b>username</b></label>
					<input class="form-control" id="username" type="text" name="username" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="wachtwoord"><b>wachtwoord</b></label>
					<input class="form-control" id="wachtwoord"  type="wachtwoord" name="wachtwoord" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="meld je aan">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var username 	= $('#username').val();
			var email 		= $('#email').val();
			var wachtwoord 	= $('#wachtwoord').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {userName: username,email: email,wachtwoord: wachtwoord},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>