<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>first Year</title>
    <?php include "includes/head_links.php";?> 
    <link href="css/list.css" rel="stylesheet" />
</head>

<body>
<?php include "includes/header.php";?> 
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Search
            </li>
        </ol>
    </nav>

    

        
        <div class="property-card row">
            <div class="image-container col-md-4">
                <img src="img/properties/1/Screenshot 2024-03-22 061124.png" />
            </div>
            <div class="content-container col-md-8">
                
                <div class="detail-container">
                    <div class="property-name">Books</div>
                    <div class="property-address">Pearson Publishers</div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">Rs 2,500/-</div>
                        <div class="rent-unit">only</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="detail.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="property-card row">
            <div class="image-container col-md-4">
                <img src="img\properties\1\ca2440aae2c9d28d08de00546e3f5099-1.jpg" />
            </div>
            <div class="content-container col-md-8">
              
                <div class="detail-container">
                    <div class="property-name">Notes</div>
                    <div class="property-address">Hand written</div>
                   
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">500/-</div>
                        <div class="rent-unit">Only</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="detail.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="property-card row">
            <div class="image-container col-md-4">
                <img src="img\properties\1\download (1).jpeg" />
            </div>
            <div class="content-container col-md-8">
               
                <div class="detail-container">
                    <div class="property-name">PYQs</div>
                    <div class="property-address">IKGPTU</div>
                   
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">free</div>
                        <div class="rent-unit">soft copy</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="detail.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="filter-heading">Filters</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-success">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";?> 

</body>

</html>
