<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Matkul</th>
      <th scope="col">Tugas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Total</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <?php 
    $nilai1 = ["no" => 1, "nim" => "0112345679", "nama" => "Yantielnaya", "matkul" => "PEMWEB", "tugas" => "93", "uts" => 88, "uas" => 95, "predikat" => "A"];
    $nilai2 = ["no" => 2, "nim" => "0123456780", "nama" => "Nadiaa", "matkul" => "BASIS DATA","tugas" => 89, "uts" => 96, "uas" => 99, "predikat" => "A"];
    $nilai3 = ["no" => 3, "nim" => "0198734562", "nama" => "Allifya","matkul" => "STATISTIK","tugas" => 84, "uts" => 88, "uas" => 80, "predikat" => "A-"];
    $nilai4 = ["no" => 4, "nim" => "0234567890", "nama" => "Marsyanda","matkul" => "KOMTIF","tugas" => 71, "uts" => 60, "uas" => 70, "predikat" => "B"];
    $nilai5 = ["no" => 5, "nim" => 1190635264, "nama" => "Giorgino","matkul" => "UI/UX","tugas" => 60, "uts" => 64, "uas" => 61, "predikat" => "C+"];
    $nilai6 = ["no" => 6, "nim" => 1221345987, "nama" => "Wulandari","matkul" => "PPKN","tugas" => 50, "uts" => 59, "uas" => 52, "predikat" => "C"];
    $mhs = [$nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6];

  ?>
  <tbody>
    <?php foreach ($mhs as $item) { ?>
    <tr>
      <td scope="col"><?= $item['no'] ?></td>
      <td scope="col"><?= $item['nim'] ?></td>
      <td scope="col"><?= $item['nama'] ?></td>
      <td scope="col"><?= $item['matkul'] ?></td>
      <td scope="col"><?= $item['tugas'] ?></td>
      <td scope="col"><?= $item['uts'] ?></td>
      <td scope="col"><?= $item['uas'] ?></td>
      <td scope="col"><?= $item['tugas'] + $item['uts'] + $item['uas'] ?></td>
      <td scope="col"><?= $item['predikat'] ?></th>
    </tr>
        <?php } ?>
  </tbody>
</table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>