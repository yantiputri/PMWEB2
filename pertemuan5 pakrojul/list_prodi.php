<?php 
require_once ('dbkoneksi.php');
// 4) Query Data Mahasiswa
$sql = "SELECT * FROM prodi";
// 5) Eksekusi Query
$rs = $dbh->query($sql);
// 6) Ambil Data Hasil Query
foreach ($rs as $row) {
    echo '<br>'.$row->kode. ' - ' . $row->nama;
}
?>

<table border="1" width="100%">
    <tr><th>No</th><th>Kode</th><th>Nama Prodi</th>
    <th>Kepala Prodi</th><th>Aksi</th></tr>

<?php 
$nomor = 1;
foreach($rs as $row) { ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row->'kode'; ?></td>
        <td><?php echo $row->'nama'; ?></td>
        <td><?php echo $row->kaprodi; ?></td>
        <td>
            <a href="editprodi.php?id=<?php echo $row->'kode'; ?>">Edit</a>
            <a href="proses_prodi.php?id_delete=<?php echo $row->id_hapus; ?>">Hapus</a>
        </td>
?>
</table>

