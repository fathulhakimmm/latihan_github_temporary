<?php
require_once "MySQL_connection.php";
session_start();
if(!isset($_SESSION['login'])){
    header("location: Halaman_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>
<body>
<!-- Navbar Logout -->
    <nav class="navbar navbar-light bg-warning">
        <a class="navbar-brand" href="Proses_logout.php">Logout</a>
    </nav>
<!-- Alert Insert-->
    <?php
        if (isset($_SESSION["insert_status"])) {
        if ($_SESSION["insert_status"] == 1) {
    ?>
        <div class= "<?=$_SESSION['alert_status']; ?>" role="alert">
        <?= $_SESSION['insert_message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }
        } unset($_SESSION['insert_status'])?>
    <!-- Jumbotron + Form input Buku Tamu -->
    <div align="center">
        <div class="jumbotron" style="max-width: 47rem;">
            <h2 class="display-5" align="center">Form Input Buku Tamu</h2>
            <br>
            <br>
            <form action="Proses_insert_buku_tamu.php" method="post">
                <div class="form-group" align="left">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group" align="left">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group" align="left">
                    <label>Pesan</label>
                    <textarea class="form-control" name="pesan" placeholder="Masukkan Pesan & Kesan Anda" required></textarea>
                </div>
                <div class="form-group" align="left">
                    <input type="submit" class="btn btn-warning btn-block" value="Kirim">
                </div>
                <!-- Alert Update + Delete-->
                <?php
                if (isset($_SESSION["update_status"]) || isset($_SESSION["delete_status"])) {
                ?>
                        <div class="<?=$_SESSION['alert_status']; ?>" role="alert">
                            <?= $_SESSION['alert_message']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <?php }
                unset($_SESSION['update_status']);
                unset($_SESSION['delete_status']);
                ?>
                <h3 class="dbTamu" align="left">Data Buku Tamu</h3>
            </form>
            <!-- Data Table -->
            <table class="table table-bordered bg-warning" id="myTable">
                <thead>
                    <tr class="tabel1" align="center">
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan/Komentar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $no = 1;
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['id_tamu']; ?></td>
                                <td><?= $row['nama_tamu']; ?></td>
                                <td><?= $row['email_tamu']; ?></td>
                                <td><?= $row['pesan_tamu']; ?></td>
                                <td align="center">
                                    <div class="btn-group">
                                        <a href="Proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda akan menghapus record ini?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_tamu']; ?>" data-nama="<?= $row['nama_tamu']; ?>" data-email="<?= $row['email_tamu']; ?>" data-pesan="<?= $row['pesan_tamu']; ?>"><i class="fa fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Buku Tamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Proses_update_buku_tamu.php" method="post">
                        <div class="form-group" align="left">
                            <label>ID</label>
                            <input type="text" class="form-control edit-id" name="id" readonly required>
                        </div>
                        <div class="form-group" align="left">
                            <label>Nama</label>
                            <input type="text" class="form-control edit-name" name="nama" placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="form-group" align="left">
                            <label>Email</label>
                            <input type="text" class="form-control edit-email" name="email" placeholder="Masukkan Email Anda" required>
                        </div>
                        <div class="form-group" align="left">
                            <label>Pesan</label>
                            <textarea class="form-control edit-pesan" name="pesan" placeholder="Masukkan Pesan & Kesan Anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning btn-block" onclick="return confirm ('Anda akan mengubah record ini?')" value="Ubah">
                        </div>
                    </form>
                </div>
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
        $(document).ready(function() {
            $('#myTable').DataTable({
                pageLength: 3,
            });
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                var nama = button.data('nama')
                var email = button.data('email')
                var pesan = button.data('pesan')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                // modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body .edit-id').val(id)
                modal.find('.modal-body .edit-name').val(nama)
                modal.find('.modal-body .edit-email').val(email)
                modal.find('.modal-body .edit-pesan').html(pesan)
            })
            $('.alert').delay(1000). fadeOut(2000);
        });
    </script>
</body>

</html>