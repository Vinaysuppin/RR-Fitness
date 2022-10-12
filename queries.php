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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="Web/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/faqstyle.css">
    <link rel="stylesheet" href="css/style3.css">

    <script src="js/faqscript.js"></script>
    <title>Queries</title>
</head>
<body>
<!-- navbar code starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="logo.png" alt="" width="75" height="45">
        </a>
        <a class="nav-link navbar-brand active " href="queries.php">Queries</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="admin.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="fees.php">Fees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="updateprice.php">Update Price</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- navbar code ends -->

    <!-- Questions code starts -->
    <div class="faq-container">
        <br>
        <h1>Asked Questions</h1>

        <!-- backend code starts used to fetch questions from database -->
        <?php

        $sql="SELECT * FROM `messages`";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            echo'<div class="faq active">
            <h3 class="faq-title">' . $row["Message"] . '</h3>
            <p class="faq-text">Asked By: ' . $row["Name"] . '</p>
            <p class="faq-text">MobileNo:' . $row["Mobileno"] . ',EmailID:' . $row["Email"] . '</p>
        </div> <br>';
        }
        ?>
        <!-- backend code ends used to fetch questions from database -->


    <!-- Questions code ends -->
    </body>
</html>