<?php
include_once "koneksi.php";
$no = $_POST['no'];
$id_dokter = $_POST['id_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$nama_poli = $_POST['nama_poli'];
$query = mysqli_query($connection, "update dokter set no ='$no', id_dokter = '$id_dokter', nama_dokter = '$nama_dokter', nama_poli = '$nama_poli' where no = '$no'");
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