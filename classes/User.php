<?php

require_once "Database.php";

class User extends Database {
    public function store($request) {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(first_name, last_name, username, password)
                       VALUES('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)) {
            header("location: ../views/login.php");
            exit;
        } else {
            die("Error creating the user" . $this->conn->error);
        }
    }

    public function login($request) {
       $username = $request['username'];
       $password = $request['password'];

       $sql = "SELECT * FROM users WHERE username = '$username'";

       $result = $this->conn->query($sql);

       if($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['id']= $user['id'];
                $_SESSION['username']= $user['username'];
                $_SESSION['fullname']= $user['first_name']." ".$user['last_name'];
                
                header("location:../views/product.php");
            } else {
                die('Password is incorrect');
            }
       } else {
        die('Username not found.');
    }
    }

    public function getProduct($request) {
        $name = $request['name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO products(product_name, price, quantity)
                       VALUES('$name', '$price', '$quantity')";

        if($this->conn->query($sql)) {
            $sql_product = "SELECT * FROM products";
            if($result = $this->conn->query($sql_product)) {
                $product = $result->fetch_assoc();
                session_start();
                $_SESSION['product_id']       = $product['id'];
                $_SESSION['product_name']     = $product['product_name'];
                $_SESSION['product_price']    = $product['price'];
                $_SESSION['product_quantity'] = $product['quantity'];
            } else {
                die('Error');
            }
            header("location: ../views/product.php");
        } else {
            die('Error');
        }
    }

    public function product($id) {
        $sql = "SELECT product_name, price, quantity FROM products WHERE id = $id";
        if($result = $this->conn->query($sql)) {
           return $result->fetch_assoc();
        } else {
            die ('Error: '. $this->conn->error);
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        header("location :../views/login.php");
        exit;
    }

    public function getAllproduct() {
        $sql = "SELECT * FROM products";
        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retreiving all users: ' . $this->conn->error);
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = $id";
        if($this->conn->query($sql)) {
            header("location: ../view/product.php");
        } else {
            die('Error retreiving all users: ' . $this->conn->error);
        }
    }

    public function update($request) {
        $id = $_GET['id'];
        $name = $request['name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products 
                SET product_name = '$name', price = $price, quantity = $quantity
                WHERE id = $id";
        if($this->conn->query($sql)) {
            header("location: ../views/product");
        } else {
            die('Error : ' . $this->conn->error);
        }               
    }

    public function getDetaile() {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = $id";
        if($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die('Error : ' . $this->conn->error);
        }
    }

    public function updateQuantity($product,$request) {
        $id = $_GET['id'];
        $quantity = $request['quantity'];
        $rest = $product['quantity'] - $quantity;
        $sql = "UPDATE products
                SET quantity = $rest
                WHERE id = $id";
        if($this->conn->query($sql)) {
            header("location: ../views/payment.php?id=" . $id);
        } else {
            die('Error : ' . $this->conn->error);
        }
    }








}