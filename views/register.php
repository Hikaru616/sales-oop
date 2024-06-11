<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container w-50 mx-auto mt-5">      
        <h1 class="text-danger fw-bold  text-center" style="letter-spacing: 2px;"><i class="fa-solid fa-user-plus me-3 "></i>Registration</h1>
        <form action="../actions/register.php" method="POST">
            <div class="row mt-4 text-secondary">
                <div class="col-6">
                    <label for="first_name" class="text-start form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="w-100 p-1 rounded form-control" required>
                </div>
                <div class="col-6">
                    <label for="last_name" class="text-start form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="w-100 p-1 rounded form-control" required>
                </div>
                <div class="col-12 mt-3">
                    <label for="username" class="text-start form-label">Username</label>
                    <input type="text" name="username" id="username" class="w-100 p-1 rounded form-control" required>
                </div>
                <div class="col-12 mt-3">
                    <label for="password" class="text-start form-label">Password</label>
                    <input type="password" name="password" id="password" class="w-100 p-1 rounded form-control" required>
                </div>
                <div class="col-12 mt-5">
                 <button type="submit" name="btn_sbm" class="text-white bg-danger rounded p-2 w-100 form-control">Register</button>
                </div>
            </div>
        </form>   
    </div>

    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>