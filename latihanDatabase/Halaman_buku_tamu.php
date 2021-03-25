<?php
require_once "MySQL_connection.php";
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
    <!-- Jumbotron + Form inpu Buku Tamu -->
    <div align="center">
        <div class="jumbotron" style="max-width: 47rem;">
                <h2 class="display-5 bg-warning" align="center">Form Input Buku Tamu</h2>
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
                    <h3 class="dbTamu" align="left">Data Buku Tamu</h3>
                </form>
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
                                            <a href="Halaman_edit_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pageLength: 3,
            });
        });
    </script>
</body>

</html>