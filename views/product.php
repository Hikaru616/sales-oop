<?php
    session_start();
    require_once "../classes/User.php";
    $products = new User;
    $all_products = $products->getAllproduct();
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
    <div class="container w-75">
        <div class="row">
            <div class="col-6">
              <h1 col-6>Product List</h1>
            </div>
            <div class="col-6">
              <a href="add-product.php" class="float-end"><i class="fa-solid fa-plus text-info h1"></i></a> 
              <!-- float使いたくない -->
            </div>
        </div>
        <table class="w-100">
            <thead class="bg-dark text-white fw-bold" style="height: 40px;">
                <tr>
                    <th class="ms-1">ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              <?php while($products = $all_products->fetch_assoc()) { ?>
                <tr class="border-bottom text-secondary">
                    <td><?= $products['id'] ?></td>
                    <td><?= $products['product_name'] ?></td>
                    <td><?= $products['price'] ?></td>
                    <td><?= $products['quantity'] ?></td>
                    <td><a href="../views/edit.php?id=<?= $products['id'] ?>" class="btn btn-warning text-black"><i class="fa-solid fa-pen"></i></a><a href="../views/delete.php?id=<?= $products['id'] ?>" class="btn btn-danger text-white ms-1"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="../views/buyproduct.php?id=<?= $products['id'] ?>" class="btn btn-success text-white"><i class="fa-solid fa-cash-register"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>