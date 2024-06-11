<?php
session_start();
require_once "../classes/User.php";
$id = $_GET['id'];

$user = new User;
$product = $user->getDetaile();
$quantity = $_GET['quantity'];
echo $quantity;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand " style="margin-bottom: 80px;">
                <div class="container">   

                    <a href="buyproduct.php?id=<?= $id ?>" class="navbar-brand">                
                        <h1 class="h3"><i class="fa-solid fa-backward"></i></h1>
                    </a>

                    <div class="navbar-nav">
                        <span class="navbar-text fw-bold">Welcome, <?= $_SESSION['username'] ?></span>
                    </div>    

                    <div class="navbar-nav">
                        <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                            <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark h3"></i></button>
                        </form>
                    </div>

                </div>
    </nav>

    <div class="container w-50 mx-auto mt-5">
        <form action="" method="post">
            <h1 class="text-success text-center fw-bold" style="letter-spacing: 5px;"><i class="fa-solid fa-hand-holding-dollar"></i> Payment</h1>
                <div class="row mt-5 w-75 mx-auto">
                    <p class="col-12 text-secondary">Product Name</p>
                    <h2 class="col-12 fw-bold"><?= $product['product_name'] ?></h2>
                    <p class="col-6 text-secondary mt-3">Total Price</p>
                    <p class="col-6 text-secondary mt-3">Buy Quantity <span class="text-danger">*</span></p>
                    <h2 class="col-6 fw-bold">$ <?= $product['price'] ?></h2>
                    <h2 class="col-6 fw-bold"><?= $product['quantity'] ?></h2>
                    <div class="col-6"></div>
                    <p class="col-6 text-danger">Maximum of <?= $product['quantity'] ?></p>
                    <p class="col-12 text-secondary mt-3">Payment</p>                 
                    <div class="input-group mb-3 col-12 w-75 mx-auto">
                        <span class="input-group-text" id="price">$</span>
                        <input type="number" name="price" class="form-control">
                    </div>           
                    <div class="col-12">                      
                    <a href="" class="btn w-100 p-2 text-white bg-success form-control mt-3" name="btn_pay">Pay</a> 
                    </div>           
                </div>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</body>
</html>