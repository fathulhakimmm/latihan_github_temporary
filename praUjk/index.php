<?php
    session_start();

    $form_error = '';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $sandi = $_POST['sandi'];

        if ($nama == 'admin' and $email == 'admin@gmail.com' and $sandi == '12345') {
            $_SESSION['email'] = $email;
            header('location: profile.php');
        }else{
            $form_error = '<p>Sandi yang anda masukkan salah</p>';
        }
        if ($nama == 'user' and $email == 'user.admin@gmail.com' and $sandi == 'abcde') {
            $_SESSION['email'] = $email;
            header('location: profile.php');
        }else{
            $form_error = '<p>Sandi yang anda masukkan salah</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h4>Form Login</h4>
        <form action="index.php" method="POST">
            <label for="">Nama</label>
                <input type="text" name="nama" placeholder="Masukkan Nama" required>
            <label for="">Email</label>
                <input type="email" name="email" placeholder="Masukkan Email" required>
            <label for="">Password</label>
                <input type="password" name="sandi" placeholder="Masukkan Password" required><br/><br/>
                <?php echo $form_error; ?>
                <input type="submit" name="submit" value="Login">
        </form>
</body>
</html>