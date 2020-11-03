<?php
session_start();
if(isset($_SESSION['userlogig'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Movie</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		<?php
		
		?>
	</div>

<div>
	<form action="index.php" method="post">
		<div class="container ">
			 <div class="row justify-content-center">
				<div class="col-sm-3 ">
					<h1>เข้าสู่ระบบ</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b>Username</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Password</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Login">
					<a class="btn btn-primary" href="registration.php" class="ml-2">Register</a>
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
			var password	= $('#password').val();
			
			

				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'jslogin.php',
					data: {username: username, 
							password: password,},
					success: function(data){
                        if($.trim(data) === "1"){
                            setTimeout('window.localtion.href = "index.php"',2000);
                        }
							
					},
					error: function(data){
						alert('there were errors while doing the opreratiob');
					}
				});
				
            }
		});				
	});
	
</script>
</body>
</html>