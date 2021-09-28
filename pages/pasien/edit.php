<?php
include "koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($connection, "select * from data_pasien where no = '$no'");
?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Pasien</h3>
            </div>
            <form action="simpan.php" method="POST">
                <input type="hidden" name="no" value="<?= $row['no'] ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ID Pasien</label>
                        <input type="text" name="id_pasien" id="id_pasien" class="form-control" id="recipient-name" placeholder="ID Pasien..." required value="<?= $row['id_pasien'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" id="recipient-name" placeholder="Nama Pasien..." required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" id="recipient-name" placeholder="Tanggal Lahir..." required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <div class="border px-3 py-2 rounded">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki - laki" value="Laki - laki">
                                <label class="form-check-label" for="Laki - laki">
                                    Laki - laki
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan">
                                <label class="form-check-label" for="Perempuan">
                                    Perempuan
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" name="proses" value="Proses" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>