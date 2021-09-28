<?php
include_once "koneksi.php";
$no = $_POST['no'];
$id_dokter = $_POST['id_poli'];
$nama_poli = $_POST['nama_poli'];
$query = mysqli_query($connection, "update data_poli set no ='$no', id_poli = '$id_poli', nama_poli = '$nama_poli' where no = '$no'");
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