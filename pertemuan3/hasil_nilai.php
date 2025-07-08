<?php
if (!isset($_POST['nama'])) {
  echo '<script>alert("Anda Harus Mengisi Form Terlebih Dahulu!")</script>
<meta http-equiv="refresh" content="0; url=form_nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="en">
<br>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Hasil Nilai Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<center><h1>Hasil Nilai Mahasiswa</h1></center>
<br>
<table class="table table-hover">
  <thead>
  <tr class="table-primary">
      <td>Nama</td>
      <td>:</td>
      <td><?= $_POST['nama'] ?></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><?= $_POST['nim'] ?></td>
    </tr>
    <tr class="table-primary">
      <td>Rombel</td>
      <td>:</td>
      <td><?= $_POST['rombel'] ?></td>
    </tr>
    <tr>
      <td>Mata Kuliah</td>
      <td>:</td>
      <td><?= $_POST['matkul'] ?></td>
    </tr>
    <tr class="table-primary">
      <td>Nilai Tugas</td>
      <td>:</td>
      <td><?= $_POST['tugas'] ?></td>
    </tr>
    <tr>
      <td>Nilai UTS</td>
      <td>:</td>
      <td><?= $_POST['uts'] ?></td>
    </tr>
    <tr class="table-primary">
      <td>Nilai UAS</td>
      <td>:</td>
      <td><?= $_POST['uas'] ?></td>
    </tr>
    <?php
    $tugas = $_POST['tugas'] * (35 / 100);
    $uts = $_POST['uts'] * (30 / 100);
    $uas = $_POST['uas'] * (30 / 100);
    $total = $tugas + $uts + $uas;
    ?>
    <tr>
      <td>Total Nilai</td>
      <td>:</td>
      <td><?= $total ?></td>
    </tr>
    <tr class="table-primary">
      <td>Predikat</td>
      <td>:</td>
      <td>
        <?php
        if ($total <= 35) {
          $predikat = "E";
          echo $predikat;
        } elseif ($total <= 55 && $total > 35) {
          $predikat = "D";
          echo $predikat;
        } elseif ($total <= 69 && $total > 55) {
          $predikat = "C";
          echo $predikat;
        } elseif ($total <= 84 && $total > 69) {
          $predikat = "B";
          echo $predikat;
        } elseif ($total <= 100 && $total > 84) {
          $predikat = "A";
          echo $predikat;
        } else {
          $predikat = "Undefined";
          echo $predikat;
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>:</td>
      <td>
        <?php
        switch ($predikat) {
          case 'A':
            echo "Sangat Baik,perthankan";
            break;
          case 'B':
            echo "B Aja";
            break;
          case 'C':
            echo "Cukup beljar lagi!";
            break;
          case 'D':
            echo "Kurang nih";
            break;
          case 'E':
            echo "buruk banget";
            break;
          default:
            echo "Kerja Bagus!";
            break;
        }
        ?>
      </td>
    </tr>
  </tbody>
</html>