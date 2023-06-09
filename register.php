<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>

<body>
	<div class="container">
		<form action="insertuser.php" method="POST" class="login-email needs-validation" novalidate>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<label for="nama" class="form-label"></label>
				<input type="text" placeholder="Nama" name="nama" required>
				<div class="invalid-feedback">
					Inputkan Nama
				</div>
			</div>
			<div class="input-group">
				<label for="noHP" class="form-label"></label>
				<input type="text" placeholder="No Handphone" name="no_handphone" required>
				<div class="invalid-feedback">
					Inputkan No Handphone
				</div>
			</div>
			<div class="input-group">
				<label for="inputAddress" class="form-label"></label>
				<input type="alamat" placeholder="Alamat" name="alamat" required>
				<div class="invalid-feedback">
					Inputkan Alamat
				</div>
			</div>
			<div class="input-group">
				<label for="inputEmail" class="form-label"></label>
				<input type="email" placeholder="Email" name="email" required>
				<div class="invalid-feedback">
					Inputkan Email
				</div>
			</div>
			<div class="input-group">
				<label for="inputUsername" class="form-label"></label>
				<input type="text" placeholder="Username" name="username" required>
				<div class="invalid-feedback">
					Inputkan Username
				</div>
			</div>
			<div class="input-group">
				<label for="inputPassword" class="form-label"></label>
				<input type="password" placeholder="Password" name="pass" required>
				<div class="invalid-feedback">
					Inputkan Password
				</div>
			</div>
			<div class="col-12">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Verifikasi
					</label>
				</div>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(() => {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			const forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
		})()
	</script>
</body>

</html>