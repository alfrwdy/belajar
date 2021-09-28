<?php
include "koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($connection, "delete from transaksi where no = '$no'");
if ($query) {
    echo "
    <script>
    alert('Data Dokter Berhasil Dihapus');
    </script>
";
?> <script language="javascript">
        document.location.href = "<?= $_SERVER['HTTP_REFERER'] ?>";
    </script>
<?php
} else {
    echo "Gagal hapus data";
}
?>