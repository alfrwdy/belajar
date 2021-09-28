<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h5 align="center">Data Berobat</h5>
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
            $query = mysqli_query($connection, "select * from transaksi");
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Transaksi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col">Nama Poli</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Biaya</th>
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
                            <td><?php echo $row['no_transaksi']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['nama_pasien']; ?></td>
                            <td><?php echo $row['usia']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td><?php echo $row['keluhan']; ?></td>
                            <td><?php echo $row['nama_poli']; ?></td>
                            <td><?php echo $row['dokter']; ?></td>
                            <td><?php echo $row['biaya']; ?></td>
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