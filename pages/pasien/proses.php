<?php
include_once "koneksi.php";
$no = $_POST['no'];
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$query = mysqli_query($connection, "insert into data_pasien (no,id_pasien,nama_pasien,tanggal_lahir,jenis_kelamin,alamat) 
value ('$no','$id_pasien','$nama_pasien','$tanggal_lahir','$jenis_kelamin','$alamat')");
if ($query) {
    echo "
    <script>
    alert('Data Dokter Berhasil Disimpan');
    </script>
";
?> <script language="javascript">
        document.location.href = "<?= $_SERVER['HTTP_REFERER'] ?>";
    </script>
    <?php
    ?><?php
    } else {
        echo "Gagal input data";
    }
        ?>