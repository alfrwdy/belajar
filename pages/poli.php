<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h5 align="center">Poli</h5>
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
            $query = mysqli_query($connection, "select * from data_poli");
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Poli</th>
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
                            <td><?php echo $row['id_poli']; ?></td>
                            <td><?php echo $row['nama_poli']; ?></td>
                            <td>
                                <a href="./dokter/edit.php?id=<?= $row['no'] ?>"> <button class="btn btn-warning btn-sm" class="btn btn-primary" data-toggle="modal" data-target="#editdok"> <i class="fas fa-edit"></i> Edit</button></a>
                                <a href="./dokter/delete.php?id=<?= $row['no'] ?>" onclick="return confirm('Apakah anda yakin?')">
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
                <h5 class="modal-title" id="exampleModalLabel"> Add New </h5>
            </div>
            <form action="./dokter/proses.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> ID Poli </label>
                        <input type="text" name="id_poli" id="id_poli" class="form-control" id="recipient-name" placeholder="ID Poli..." required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Nama Poli </label>
                        <input type="text" name="nama_poli" id="nama_poli" class="form-control" id="recipient-name" placeholder="Nama Poli..." required>
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