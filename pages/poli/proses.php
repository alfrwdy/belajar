<?php
include_once "koneksi.php";
$no = $_POST['no'];
$id_dokter = $_POST['id_poli'];
$nama_poli = $_POST['nama_poli'];
$query = mysqli_query($connection, "insert into data_poli (no,id_poli,nama_poli) value ('$no','$id_poli','$nama_poli')");
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