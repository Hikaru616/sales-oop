<?php
    session_start();
    require_once "../classes/User.php";
    // $id = $_GET['id'];
    $user = new User;
    $id = $_GET['id'];
    $product = $user->product($id);

    if(isset($_POST['btn_edit'])) {
        $user->update($_POST);
        header("location: ../views/product.php");
    }
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

            <a href="product.php" class="navbar-brand">                
                <h1 class="h3"><i class="fa-solid fa-house"></i></h1>
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
        <h1 class="fw-bold text-center text-warning"><i class="fa-solid fa-pen-to-square"></i> Edit Product</h1>

        <form action="" method="post">
            <div class="row w-100">
                <div class="col-12">
                    <label for="name" class="text-secondary form-label">Product Name</label>
                    <input type="text" name="name" class="w-100 p-1 form-control" value="<?= $product['product_name'] ?>">
                </div>
                <div class="text-secondary mt-3 col-6">
                        <label for="price">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="price">$</span>
                            <input type="number" name="price" class="form-control" value="<?= $product['price'] ?>">
                        </div>
                    </div>

                    <div class="text-secondary mt-3 col-6">
                        <label for="price">Quantity</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="quantity" value="<?= $product['quantity'] ?>">
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="bg-warning text-dark rounded w-100 text-center p-1 form-control" name="btn_edit">Edit</button>
                    </div>
            
            </div>
        </form>
    </div>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>