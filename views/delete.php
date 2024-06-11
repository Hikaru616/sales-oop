<?php
session_start();
require_once "../classes/User.php";

$id = $_GET['id'];

$user = new User;

if(isset($_POST['btn_delete'])) {
    $user->delete($id);
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

        <main class="row justify-content-center gx-0">
            <div class="col-4 text-center">
                <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
                <h2 class="text-danger mb-5">DELETE ACCOUNT</h2>

                <p class="fw-bold">Are you sure you want to delete your account?</p>

                <div class="row">
                    <div class="col">
                        <a href="dashaboard.php" class="btn btn-secondary w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <form action="" method="post">
                            <button type="submit" name="btn_delete" class="btn btn-outline-danger w-100">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
         </main>

            <?php
                
            ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>