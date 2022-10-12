<?php

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
	<link rel="stylesheet" href="css/style3.css">
    
    <title>Users</title>
</head>
<body>
<!-- navbar code starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="logo.png" alt="" width="75" height="45">
        </a>
        <a class="nav-link navbar-brand active " href="admin.php">Users</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " href="queries.php">Queries</a>
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
<!-- table starts used to display uesr details -->
    <div class="container mt-2">
    <h2>User Details</h2>
    <div class="container my-3 mx-10">
        <table class=" table table-borderless table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Fullname</th>
                    <th scope="col">User Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Plan</th>
                    <th scope="col">DOJ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //backend is used to fetch userdetails from database

                $num = 1;
                $sql = "SELECT * FROM `members`ORDER BY JoinDate DESC";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                    <td>' . $row["Name"] . '</td>
                    <td>' . $row["emailid"] . '</td>
                    <td>' . $row["Phoneno"] . '</td>
                    <td>' . $row["Age"] . '</td>
                    <td>' . $row["Gender"] . '</td>
                    <td>' . $row["PlanType"] . '</td>
                    <td>' . $row["JoinDate"] . '</td>
                    </tr>';
                    $num = 0;
                }

                if ($num) 
                {
                    echo '<tr>
                        <th ></th>
                        <th >No Users</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- table ends  -->

</body>
</html>