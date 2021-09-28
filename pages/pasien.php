<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h5 align="center">Data Pasien</h5>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                        Add NEW
                    </button>
                </ol>
            </nav>
            <!-- TAMPIL DATA -->
            <?php
            include "koneksi.php";
            $query = mysqli_query($connection, "select * from data_pasien");
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Dokter</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Nama Poli</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php
                $c = 0;
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['id_dokter']; ?></td>
                            <td><?php echo $row['nama_dokter']; ?></td>
                            <td><?php echo $row['nama_poli']; ?></td>
                            <td>
                                <a href="./pasien//edit.php?= $row['no'] ?>"> <button class="btn btn-warning btn-sm" class="btn btn-primary" data-toggle="modal" data-target="#editdok"> <i class="fas fa-edit"></i> Edit</button></a>
                                <a href="./pasien/delete.php?= $row['no'] ?>" onclick="return confirm('Apakah anda yakin?')">
                                    <button class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Hapus</button></a>
                            </td>
                        <?php
                    }
                        ?>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Modal TAMBAH -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add New Pasien </h5>
            </div>
            <form action="./pasien/proses.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> ID Pasien </label>
                        <input type="text" name="id_pasien" id="id_pasien" class="form-control" id="recipient-name" placeholder="ID Dokter..." required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Nama Pasien </label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" id="recipient-name" placeholder="Nama Dokter..." required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Tanggal Lahir </label>
                        <input type="date" name="nama_poli" id="nama_poli" class="form-control" id="recipient-name" placeholder="Nama Poli..." required>
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
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary"> Clear </button>
                    <button type="submit" name="proses" value="Proses" class="btn btn-primary"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>