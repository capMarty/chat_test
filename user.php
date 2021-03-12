<?php
	session_start();	
?>
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
		<section class="users">
			<header>
				<div class="content">
					<img src="img.jpeg" alt="">
					<div class="details">
						<span>Sergey</span>
						<p>Active now</p>
					</div>
				</div>
				<a href="#" class="logout">Logout</a>
			</header>
			<div class="search">
				<span class="text">Select an user</span>
				<input id="searchFieldUsers" type="text" placeholder="Enter name">
				<button id="searchBtnUsers">*</button>
			</div>
			<div class="users-list">
				<a href="#">
					<div class="content">
						<img src="img.jpeg" alt="">
						<div class="details">
							<span>Sergey</span>
							<p>Messege</p>
						</div>
					</div>
					<div class="status-dot">*</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpeg" alt="">
						<div class="details">
							<span>Sergey</span>
							<p>Messege</p>
						</div>
					</div>
					<div class="status-dot">*</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpeg" alt="">
						<div class="details">
							<span>Sergey</span>
							<p>Messege</p>
						</div>
					</div>
					<div class="status-dot">*</div>
				</a>
								<a href="#">
					<div class="content">
						<img src="img.jpeg" alt="">
						<div class="details">
							<span>Sergey</span>
							<p>Messege</p>
						</div>
					</div>
					<div class="status-dot">*</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpeg" alt="">
						<div class="details">
							<span>Sergey</span>
							<p>Messege</p>
						</div>
					</div>
					<div class="status-dot">*</div>
				</a>
				<a href="#">
					<div class="content">
						<img src="img.jpeg" alt="">
						<div class="details">
							<span>Sergey</span>
							<p>Messege</p>
						</div>
					</div>
					<div class="status-dot">*</div>
				</a>
			</div>
		</section>
	</div>
	
	<script src="assets/js/users.js"></script>
</body>
</html>