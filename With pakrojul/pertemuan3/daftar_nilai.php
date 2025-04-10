<?php 
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
    $mhs1->nama = "Yanti Elnaya";
    $mhs1->matakuliah = "Pemrograman Web";
    $mhs1->nilai_uts = 90;
    $mhs1->nilai_uas = 89;  
    $mhs1->nilai_tugas = 95;

    $mhs2 = new NilaiMahasiswa();
    $mhs2->nama = "Faradilla";
    $mhs2->matakuliah = "Dasar-Dasar Pemrograman";
    $mhs2->nilai_uts = 84;
    $mhs2->nilai_uas = 80;  
    $mhs2->nilai_tugas = 93;

    $mhs3 = new NilaiMahasiswa();
    $mhs3->nama = "Anatasya";
    $mhs3->matakuliah = "Tugas Akhir";
    $mhs3->nilai_uts = 60;
    $mhs3->nilai_uas = 50;  
    $mhs3->nilai_tugas = 64;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];

?>
<h3 style="text-align:center;">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="2" cellspacing="2" width="100%">
        <thead>
            <tr><th>No</th><th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Kelulusan</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $nomor = 1;
            foreach($data_mhs as $obj){
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->matakuliah?>
                </td><td><?=$obj->nilai_uts?></td>
                <td><?=$obj->nilai_uas?></td>
                <td><?=$obj->nilai_tugas?></td>
                <td><?=$obj->getNilaiAkhir()?></td>
                <td><?=$obj->kelulusan()?></td>
            </tr>
    <?php
            $nomor++; 
        }
    ?>
        </tbody>
    </table>