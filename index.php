<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime Chat App</header>
			<form enctype="multipart/form-data" id="signupForm" >
				<div class="error-txt">this is an error text</div>
				<div class="name-details">
					<div class="field input">
						<label>First name
						<input name="first_name" type="text" placeholder="First name"></label>
					</div>
					<div class="field input">
						<label>Last name
							<input name="last_name" type="text" placeholder="Last name"></label>
					</div>
				</div>
				<div class="field input">
					<label>Email
						<input name="email" type="email" placeholder="Email">
					</label>
				</div>
				<div class="field input">
					<label>Password
						<input name="password" type="password" placeholder="password">
					</label>
				</div>
				<div class="field image">
					<label>Select image
						<input name="image" type="file">
					</label>
				</div>
				<div class="field btn">
					<button>continue to chat</button>
				</div>
			</form>
			<div class="link">Already signed up?<a href="/login.php">Login now</a></div>
		</section>
	</div>
	
	<script src="assets/js/signup.js"></script>
</body>
</html>