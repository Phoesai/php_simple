<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style type="text/css">
        body{
            padding: 50px;
        }
    </style>
</head>
<body>

<?php 

    require "connect.php";
        if(isset($_POST['add_button'])){
           $pid = $_POST['product_id'];
           $pname = $_POST['product_name'];
           $qty = $_POST['quantity'];
           $price = $_POST['unit_price'];
      
        mysqli_query ($conn,"INSERT INTO products(Product_ID,Product_Name,Quantity,Unit_Price)
        VALUES ('$pid','$pname','$qty','$price')");
        }
?>
    <div class="container">
        <div class="row">
            <div class="col-mt-12">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-11">
                                <div class="card-title"><h2>Product Order</h2></div>
                            </div>
                            <div class="col-1">
                            <a href="index.php" class="btn btn-secondary"> << Back </a>
                            </div>
                        </div>
                    </div>
                    <form action="add_product.php" class="was-validated" method="POST">   
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Product ID:</label>
                                <input type="text" class="form-control" placeholder="Enter ProductID" 
                                name="product_id" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Name :</label>
                                <input type="text" class="form-control" placeholder="Enter ProductName" 
                                name="product_name" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quantity :</label>
                                <input type="number" class="form-control" placeholder="Enter Quantity" 
                                name="quantity" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
             
                            <div class="mb-3">
                                <label class="form-label">Unit Price :</label>
                                <input type="number" class="form-control" placeholder="Enter Unit Price" 
                                name="unit_price" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="add_button" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  
</body>
</html>