<?php
// used for database connectivity
require_once 'include\dbmscon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="Web/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style3.css">

    <title>Update Price</title>
</head>
<body stle="background-color: #29669a;">
<!-- navbar code starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="logo.png" alt="" width="75" height="45">
        </a>
        <a class="nav-link navbar-brand active " href="updateprice.php">Update Price</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="admin.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="queries.php">Queries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="fees.php">Fees</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
	<!-- navbar code ends -->

	
	<!-- backend starts used for updating price -->
    <?php
         if ($_SERVER['REQUEST_METHOD'] == 'POST')
         {
          $price=$_POST["price"];
          $plan=$_POST["Update"];
          $sql="UPDATE plans SET price=$price WHERE Planname ='$plan';";
		  $result = mysqli_query($conn, $sql);
         }
    ?>
	<!-- backend ends -->

    <!-- Start Price -->
	<section class="price-package" id="price">
		<div class="container">
			<h2>Current Prices</h2>
			<div class="content">
				<div class="box wow bounceInUp">
					<div class="inner">
						<div class="price-tag">
							
							<?php
							//backend is used to fetch price from database
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
                            <form action="" method="post">
                                <input type="number" name="price" id="" placeholder="Enter Price Here">
                                <br>
                                <button type="submit" class="btn" value="Basic" name="Update">Update Price</button>
                            </form>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.2s">
					<div class="inner">
						<div class="price-tag">
						<?php
							//backend is used to fetch price from database

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
							<form action="" method="post">
                                <input type="number" name="price" id=""  placeholder="Enter Price Here">
                                <br>
                                <button type="submit" class="btn" value="Value" name="Update">Update Price</button>
                            </form>
						</div>
					</div>
				</div>
				<div class="box wow bounceInUp" data-wow-delay="0.4s">
					<div class="inner">
						<div class="price-tag">
						<?php							
							//backend is used to fetch price from database

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
                            <form action="" method="post">
                                <input type="number" name="price" id="" placeholder="Enter Price Here">
                                <br>
                                <button type="submit" class="btn" value="Premium" name="Update" >Update Price</button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Price -->

</body>
</html>