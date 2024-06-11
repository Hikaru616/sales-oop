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
    <div class="container w-25 mx-auto mt-5">
        <h1 class="text-primary fw-bold text-center">LOGIN<i class="fa-solid fa-arrow-right-to-bracket ms-3"></i></h1>
        <form action="../actions/login.php" method="post">           
          <input type="text" name="username" class="form-control rounded mt-4" placeholder="username" required>
          <input type="password" name="password" class="form-control rounded mt-4" placeholder="password" required>
          <button type="submit" class="bg-primary text-white rounded p-2 w-100 mt-3 form-control">Login</button>
        </form>
        <a href="../views/register.php" class="text-decoration-none">
            <button type="submit" name="btn_create" class="bg-danger text-white rounded p-2 w-50 mt-3 form-control mx-auto ">Create an account</button>
        </a>
    </div>

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>