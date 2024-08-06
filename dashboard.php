<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <?php include "includes/head_links.php";?> 
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<?php include "includes/header.php";?> 
<nav aria-label="breadcrumb">
    <ol class="breadcrumb py-2">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Dashboard
        </li>
    </ol>
</nav>

<div class="my-profile page-container">
    <h1>My Profile</h1>
    <div class="row">
        <div class="col-md-3 profile-img-container">
            <i class="fas fa-user profile-img"></i>
        </div>
        <div class="col-md-9">
            <div class="row no-gutters justify-content-between align-items-end">
                <div class="profile">
                    <div class="name"><?php
                    echo $_SESSION['full_name']?></div>
                    <div class="email"><?php echo $_SESSION['email']?></div>
                    <div class="phone"><?php echo $_SESSION['phone']?></div>
                    <div class="college"><?php echo $_SESSION['college']?></div>
                </div>
              
            </div>
        </div>
    </div>
</div>


</div>
<?php include "includes/footer.php";?> 


</html>