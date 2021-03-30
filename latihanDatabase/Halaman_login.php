<?php
include "MySQL_connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>
<body>
<style>
    #maincontent{
        margin: 250px;
    }
</style>
<!-- Alert -->
<?php
        if (isset($_SESSION["login"])) {
        if ($_SESSION["login"] == 0) {
    ?>
        <div class= "<?=$_SESSION['alert_status']; ?>" role="alert">
        <?= $_SESSION['alert_login']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } }
        // } unset($_SESSION['login'])?>
    <!-- Jumbotron + Form Login -->
    <div id="maincontent" align="center">
        <div class="jumbotron" style="max-width: 25rem;">
            <h2 class="display-5" align="center">Login</h2>
            <br>
            <br>
            <form action="Proses_login.php" method="post">
                <div class="form-group" align="left">
                    <label>Username</label>
                    <input type="text" class="form-control" name="user" id="username" placeholder="Masukkan Username/Email" required>
                </div>
                <div class="form-group" align="left">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass" id="password" placeholder="Masukkan password" required></input>
                </div>
                <div class="form-group form-check" align="left">
                    <input type="checkbox" id="showpass" onclick="showPass()" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                </div>
                <div class="form-group" align="left">
                    <input type="submit" name="login" class="btn btn-warning btn-block" value="Kirim">
                </div>
        </div>
    </div>
    <!-- Javascript JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- Javascript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    <script>
        // Script Tunjukkan Password
        function showPass(){
        var pass = document.getElementById("password").type;

        if(pass == 'password'){
            document.getElementById("password").type = 'text';
        }else{
            document.getElementById("password").type = 'password';
        }
    }
        // Script Alert
        $('.alert').delay(1000). fadeOut(2000);
    </script>

</body>
</html>