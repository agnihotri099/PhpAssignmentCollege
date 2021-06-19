//Download bootstrap's CSS and JS 
<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="name"><b>Name</b></label>
					<input class="form-control" id="name" type="text" name="name" required>

					
					<label for="scholar"><b>Scholar Number</b></label>
					<input class="form-control" id="scholar"  type="text" name="scholar" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="addr"><b>Address</b></label>
					<input class="form-control" id="addr"  type="text" name="addr" required>
					
					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
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


			var name 	= $('#name').val();
			var scholar	= $('#scholar').val();
			var email 		= $('#email').val();
			var addr = $('#addr').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name,scholar: scholar,email: email,addr: addr,password: password},
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
<br>
<br>
<br>
<table border="4">
<tr>
<th>Name</th>
<th>Scholar Number</th>
<th>Email</th>
<th>Address</th>
</tr>
	<?php
	$result=mysqli_query($mysqli,"SELECT* from users ORDER by id DESC");
	while($res=mysqli_fetch_array($result)){
		echo '<tr>';
		echo '<td>'.$res['name'].'</td>';
		echo '<td>'.$res['scholar'].'</td>';
		echo '<td>'.$res['email'].'</td>';
		echo '<td>'.$res['addr'].'</td>';
		echo '</tr>';
	}	

	?>
</table>
</body>
</html>
