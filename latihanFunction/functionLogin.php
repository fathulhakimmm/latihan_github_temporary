<?php
    if (isset($_POST['login1'])){
        $nama = $_POST['username1'];
        $password = $_POST['password1'];
        cekLogin($nama, $password);
    }

?>