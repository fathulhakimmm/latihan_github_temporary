<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Nilai</title>
  </head>
  <body>
    <div class="jumbotron">
    <!-- proses -->
    <h2 align="center">Total Nilai</h2>
    <br>
    <br>
    <?php
		$tugas = $_POST['jml_nilai'];
		$uts = $_POST['jml_nilai1'];
		$uas = $_POST['jml_nilai2'];

		$ptugas = $tugas*0.15;
		$puts = $uts*0.35;
		$puas = $uas*0.50;

		$total = $puts+$puas+$ptugas;

		echo "Nilai Tugas: ";
		echo $tugas;
		echo "<br>";
		echo "Nilai UTS: ";
		echo $uts;
		echo "<br>";
		echo "Nilai UAS: ";
		echo $uas;
		echo "<br>";
		echo "Nilai Total: ";
		echo $total;
		echo "<br>";
		echo "<br>";


	?>
	<!-- batas proses -->
        <div class="row">
            <div class="col">
                <a href="form_latihan7B.php"><button type="submit" class="btn btn-primary">Back</button></a>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>