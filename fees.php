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

<!-- navbarcode starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="logo.png" alt="" width="75" height="45">
        </a>
        <a class="nav-link navbar-brand active " href="fees.php">Fees</a>

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
                    <a class="nav-link " href="updateprice.php">Update Price</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
<!-- navbarcode ends -->

<!-- backendfor for automatically setting fees unpaid on start of the month starts -->
<?php
    $d=date("d");
    if($d==1){
        $sql="UPDATE `members` SET `fees` = 'unpaid';";
        $result = mysqli_query($conn, $sql);
        $r=0;
    }
?>
<!-- backendfor ends -->

<!-- backendfor fees confirmation starts -->
<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST')
      {
       $phone=$_POST["con"];
       $sql="UPDATE `members` SET `fees` = 'paid' WHERE `members`.`Phoneno` = $phone;";
       $result = mysqli_query($conn, $sql);
      }
?>
<!-- backendfor fees confirmation ends -->

<!-- pendingfees starts -->

    <div class="container mt-2">
    <h2>Pending Fees Details</h2>
    <div class="container my-3 mx-10">
        <table class=" table table-borderless table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Fullname</th>
                    <th scope="col">User Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Fee Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 1;
                
                $sql = "SELECT * FROM `members`WHERE fees='unpaid';";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                    <td>' . $row["Name"] . '</td>
                    <td>' . $row["emailid"] . '</td>
                    <td>' . $row["Phoneno"] . '</td>
                    <td>' . $row["PlanType"] . '</td>
                    <td><form action="fees.php" method="post"><button name="con" value="'.$row["Phoneno"].'"class="btn btn-sm btn-success">Paid</button></form><td>
                    </tr>';
                    $num = 0;
                }

                if ($num) 
                {
                    echo '<tr>
                        <th ></th>
                        <td></td>
                        <td>Everyone Paid :)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
<!-- pendingfees ends -->

<!-- paid fees starts -->
<div class="container mt-2">
    <h2>Paid Fees Details</h2>
    <div class="container my-3 mx-10">
        <table class=" table table-borderless table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Fullname</th>
                    <th scope="col">User Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Plan</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 1;
                
                $sql = "SELECT * FROM `members`WHERE fees='paid';";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                    <td>' . $row["Name"] . '</td>
                    <td>' . $row["emailid"] . '</td>
                    <td>' . $row["Phoneno"] . '</td>
                    <td>' . $row["PlanType"] . '</td>
                    <td></td>
                    </tr>';
                    $num = 0;
                }

                if ($num) 
                {
                    echo '<tr>
                        <th ></th>
                        <td></td>
                        <td>Nobody Paid :(</td>
                        <td></td>
                        <td></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>           
<!-- paidfees ends -->
</body>
</html>