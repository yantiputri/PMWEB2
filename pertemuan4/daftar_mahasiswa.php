<?php 
    include 'class_mahasiswa.php';

    $daftar_mahasiswa = [
        new Mahasiswa("012345", "Rahmad", 2024 ,"TI", 3.50),
        new Mahasiswa("012346", "Rahmawan", 2024 , "BD", 3.75),
        new Mahasiswa("012347", "Rahmadani", 2024 , "TI", 2.50),
        new Mahasiswa("012348", "Budi", 2024, "SI", 1.75),
    ];

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $thn_angkatan = $_POST['thn_angkatan'];
        $ipk = $_POST['ipk'];
        
        array_push($daftar_mahasiswa, new Mahasiswa($nim, $nama, $prodi, $thn_angkatan, $ipk));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($daftar_mahasiswa as $mhs) {
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->prodi ?></td>
                    <td><?= $mhs->thn_angkatan ?></td>
                    <td><?= $mhs->ipk ?></td>
                    <td><?= $mhs->predikat_ipk() ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>