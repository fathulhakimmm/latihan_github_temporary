<?php
    require_once "functionLogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<!-- Jumbotron + Form Lingkaran -->
<div class="kontenLogin" align="center">
    <div class="jumbotron w-25">
    <h2 class="display-5" align="center">Login</h2>
    <br>
    <br>
        <form name="formLogin" action="" method="post">
        <div class="form-group" align="left">
            <label for="username1">Username</label>
            <input type="username" class="form-control" name="username1" id="username">
        </div>
        <div class="form-group" align="left">
            <label for="password1">Password</label>
            <input type="password" class="form-control" name="password1" id="password">
        </div>
        <div class="form-group form-check" align="left">
            <input type="checkbox" id="showpass" onclick="showPass()" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Show Password</label>
        </div>
        <div  align="left">
            <button type="submit" class="btn btn-primary" name="login1">Submit</button>
        </div>
        </form>
    </div>
</div>
<!-- Function Login -->
<?php
    function cekLogin($nama, $password){
        if ($nama == "user" && $password == "pass") {
            header("location:formPenjualan.php");
        }else{
            echo "<script>
                alert('Username dan Password Anda masih salah!');
            </script>";
        }
    }
?>
<script>
    function showPass(){
        var pass = document.getElementById("password").type;

        if(pass == 'password'){
            document.getElementById("password").type = 'text';
        }else{
            document.getElementById("password").type = 'password';
        }
    }
</script>
</body>
</html>