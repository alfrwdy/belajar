<?php
include "koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($connection, "select * from data_poli where no = '$no'");
?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Poli</h3>
            </div>
            <form action="simpan.php" method="POST">
                <input type="hidden" name="no" value="<?= $row['no'] ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ID Poli</label>
                        <input type="text" name="id_poli" id="id_poli" class="form-control" id="recipient-name" placeholder="ID Poli..." required value="<?= $row['id_poli'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Poli</label>
                        <input type="text" name="nama_poli" id="nama_poli" class="form-control" id="recipient-name" placeholder="Nama Poli..." required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>