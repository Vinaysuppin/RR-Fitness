<?php
// used for database connectivity
require_once 'include\dbmscon.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>RR Fitness</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="Web/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.wow:first-child {
			visibility: hidden;
		}
	</style>

</head>

<body>

	<!-- Start Header  -->
	<header>
		<div class="container">
			<div class="logo">
				<a href="">RR <span>Fitness</span></a>
			</div>
			<a href="javascript:void(0)" class="ham-burger">
				<span></span>
				<span></span>
			</a>
			<div class="nav">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#classes">Classes</a></li>
					<li><a href="#schedule">Schedule</a></li>
					<li><a href="#price">Price</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- End Header  -->

	<!-- Start Home -->
	<section class="home wow flash" id="home">
		<div class="container">
			<h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
			<h1 class="wow slideInRight" data-wow-delay="1s">We are ready to <span>fit you</span></h1>
		</div>
		<!-- go down -->
		<a href="#about" class="go-down">
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
		<!-- go down -->

	</section>
	<!-- End Home -->


	<!-- Start About -->
	<section class="about" id="about">
		<div class="container">
			<div class="content">
				<div class="box wow bounceInUp">
					<div class="inner">
						<div class="img">
							<img src="images/about1.jpg" alt="about" />
						</div>
						<div class="text">
							<h4>Free Consultation</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.2s">
					<div class="inner">
						<div class="img">
							<img src="images/about2.jpg" alt="about" />
						</div>
						<div class="text">
							<h4>Best Training</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
					<div class="inner">
						<div class="img">
							<img src="images/about3.jpg" alt="about" />
						</div>
						<div class="text">
							<h4>Build Perfect Body</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About -->


	<!-- Start Service -->
	<section class="service" id="service">
		<div class="container">
			<div class="content">
				<div class="text box wow slideInLeft">
					<h2>Services</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
					<a href="#price" class="btn">Start Now</a>
				</div>
				<div class="accordian box wow slideInRight">
					<div class="accordian-container active">
						<div class="head">
							<h4>Cardiovascular Equipment</h4>
							<span class="fa fa-angle-down"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Strength Training Equipment</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Group Fitness Class</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Other Services</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service -->

	<!-- Start Classes -->
	<section class="classes" id="classes">
		<div class="container">
			<div class="content">
				<div class="box img wow slideInLeft">
					<img src="images/class2.png" alt="classes" />
				</div>
				<div class="box text wow slideInRight">
					<h2>Our Classes</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
					<div class="class-items">
						<div class="item wow bounceInUp">
							<div class="item-img">
								<img src="images/class1.jpg" alt="classes" />
								<div class="price">
									$99
								</div>
							</div>
							<div class="item-text">
								<h4>Stretching Training</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="">Get Details</a>
							</div>
						</div>
						<div class="item wow bounceInUp">
							<div class="item-text">
								<h4>Stretching Training</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a href="">Get Details</a>
							</div>
							<div class="item-img">
								<img src="images/class1.jpg" alt="classes" />
								<div class="price">
									$99
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Classes -->

	<!-- Start Today -->
	<section class="start-today">
		<div class="container">
			<div class="content">
				<div class="box text wow slideInLeft">
					<h2>Start Your Training Today</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
					<a href="#price" class="btn">Start Now</a>
				</div>
				<div class="box img wow slideInRight">
					<img src="images/gallery4.jpg" alt="start today" />
				</div>

			</div>
		</div>
	</section>
	<!-- End Start Today -->

	<!-- Start Schedule -->
	<section class="schedule" id="schedule">
		<div class="container">
			<div class="content">
				<div class="box text wow slideInLeft">
					<h2>Classes Schedule</h2>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
					</p>
					<img src="images/schedule1.png" alt="schedule" />
				</div>
				<div class="box timing wow slideInRight">
					<table class="table">
						<tbody>
							<tr>
								<td class="day">Monday</td>
								<td><strong>9:00 AM</strong></td>
								<td>Body Building <br /> 9:00 to 10:00 AM</td>
								<td>Room No:210</td>
							</tr>
							<tr>
								<td class="day">Tuesday</td>
								<td><strong>9:00 AM</strong></td>
								<td>Body Building <br /> 9:00 to 10:00 AM</td>
								<td>Room No:210</td>
							</tr>
							<tr>
								<td class="day">Wednesday</td>
								<td><strong>9:00 AM</strong></td>
								<td>Body Building <br /> 9:00 to 10:00 AM</td>
								<td>Room No:210</td>
							</tr>
							<tr>
								<td class="day">Thursday</td>
								<td><strong>9:00 AM</strong></td>
								<td>Body Building <br /> 9:00 to 10:00 AM</td>
								<td>Room No:210</td>
							</tr>
							<tr>
								<td class="day">Friday</td>
								<td><strong>9:00 AM</strong></td>
								<td>Body Building <br /> 9:00 to 10:00 AM</td>
								<td>Room No:210</td>
							</tr>
							<tr>
								<td class="day">Saturday</td>
								<td><strong>9:00 AM</strong></td>
								<td>Body Building <br /> 9:00 to 10:00 AM</td>
								<td>Room No:210</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- End Schedule -->

	<!-- Start Gallery -->
	<section class="gallery" id="gallery">
		<h2>Workout Gallery</h2>
		<div class="content">
			<div class="box wow slideInLeft">
				<img src="images/gallery1.jpg" alt="gallery" />
			</div>
			<div class="box wow slideInRight">
				<img src="images/gallery2.jpg" alt="gallery" />
			</div>
			<div class="box wow slideInLeft">
				<img src="images/gallery3.jpg" alt="gallery" />
			</div>
			<div class="box wow slideInRight">
				<img src="images/gallery4.jpg" alt="gallery" />
			</div>
		</div>
	</section>
	<!-- End Gallery -->

	<!-- Start Price -->
	<section class="price-package" id="price">
		<div class="container">
			<h2>Choose Your Package</h2>
			<p class="title-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
			<div class="content">
				<div class="box wow bounceInUp">
					<div class="inner">
						<div class="price-tag">
							<?php
							$sql="SELECT price FROM `plans` WHERE Planname ='Basic';";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo "₹".$row['price']."/Month";
							?>
						</div>
						<div class="img">
							<img src="images/price1.jpg" alt="price" />
						</div>
						<div class="text">
							<h3>Basic Pack</h3>
							<p>Get Free WiFi</p>
							<p>Month to Month</p>
							<p>No Time Restrictions</p>
							<p>Gym and Cardio</p>
							<p>Service Locker Rooms</p>
							<a href="join.php" class="btn">Join Now</a>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.2s">
					<div class="inner">
						<div class="price-tag">
						<?php
							$sql="SELECT price FROM `plans` WHERE Planname ='Value';";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo "₹".$row['price']."/Month";
							?>
						</div>
						<div class="img">
							<img src="images/price2.jpg" alt="price" />
						</div>
						<div class="text">
							<h3>Value Pack</h3>
							<p>Get Free WiFi</p>
							<p>Month to Month</p>
							<p>No Time Restrictions</p>
							<p>Gym and Cardio</p>
							<p>Service Locker Rooms</p>
							<a href="join.php" class="btn">Join Now</a>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
					<div class="inner">
						<div class="price-tag">
						<?php
							$sql="SELECT price FROM `plans` WHERE Planname ='Premium';";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo "₹".$row['price']."/Month";
							?>
						</div>
						<div class="img">
							<img src="images/price3.jpg" alt="price" />
						</div>
						<div class="text">
							<h3>Premium Pack</h3>
							<p>Get Free WiFi</p>
							<p>Month to Month</p>
							<p>No Time Restrictions</p>
							<p>Gym and Cardio</p>
							<p>Service Locker Rooms</p>
							<a href="join.php" class="btn">Join Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Price -->

	<!-- backend starts-->
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		switch ($_POST['qtype']) {
			// this is used to post messages/contact
			case 1:
				$name = $_POST["name"];
				$email = $_POST["email"];
				$mobileno = $_POST["mobileno"];
				$query = $_POST["query"];
				$sql = "INSERT INTO `messages` (`Name`, `Email`, `Mobileno`, `Message`) VALUES ('$name', '$email', ' $mobileno','$query');";
				$result = mysqli_query($conn, $sql);
				break;

				// this is used to post new users
				case 2:
					$name = $_POST["name"];
					$age = $_POST["age"];
					$phoneno = $_POST["phoneno"];
					$emailid = $_POST["emailid"];
					$gender = $_POST["gender"];
					$plan = $_POST["plan"];
					$sql = "INSERT INTO `members` (`Name`, `Age`, `Phoneno`, `emailid`, `Gender`, `PlanType`) VALUES ('$name','$age', '$phoneno', '$emailid', '$gender', '$plan');";
					$result = mysqli_query($conn, $sql);

		}
	}
	?>
	<!-- backend ends-->

	<!-- Start Contact -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="content">
				<div class="box form wow slideInLeft">
					<form method="POST">
						<input type="text" name="name" placeholder="Enter Name">
						<input type="text" name="email" placeholder="Enter Email">
						<input type="text" name="mobileno" placeholder="Enter Mobile">
						<textarea name="query" placeholder="Enter Message"></textarea>
						<button type="submit" name="qtype" value="1" onclick="alert('We will get back to you')">Send Message</button>
					</form>
				</div>
				<div class="box text wow slideInRight">
					<h2>Get Connected with Gym</h2>
					<p class="title-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<div class="info">
						<ul>
							<li><span class="fa fa-map-marker"></span> Shaitan gali,Khatra mehal,Shamshan ke samne</li>
							<li><span class="fa fa-phone"></span> 92 9999999999</li>
							<li><span class="fa fa-envelope"></span> info@gym.com</li>
						</ul>
					</div>
					<div class="social">
						<a href=""><span class="fa fa-facebook"></span></a>
						<a href=""><span class="fa fa-linkedin"></span></a>
						<a href=""><span class="fa fa-skype"></span></a>
						<a href=""><span class="fa fa-youtube-play"></span></a>
					</div>

					<div class="copy">
						PowerBy &copy; Team CYG
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact -->



	<!-- jquery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

			$(".ham-burger, .nav ul li a").click(function() {

				$(".nav").toggleClass("open")

				$(".ham-burger").toggleClass("active");
			})
			$(".accordian-container").click(function() {
				$(".accordian-container").children(".body").slideUp();
				$(".accordian-container").removeClass("active")
				$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
				$(this).children(".body").slideDown();
				$(this).addClass("active")
				$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
			})

			$(".nav ul li a, .go-down").click(function(event) {
				if (this.hash !== "") {

					event.preventDefault();

					var hash = this.hash;

					$('html,body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function() {
						window.location.hash = hash;
					});

					// add active class in navigation
					$(".nav ul li a").removeClass("active")
					$(this).addClass("active")
				}
			})
		})
	</script>
	<script src="js/wow.min.js"></script>
	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 0,
		});
		wow.init();
	</script>
</body>

</html>