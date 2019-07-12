<div class="container pt-5 mt-5">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data alternatif <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                </div>

            </div>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-6">
            <h3>Daftar Alternatif</h3>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>alternatif/tambahdata" class="btn btn-primary mb-4 mt-4">Tambah Data Alternatif</a>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4 mt-4">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Alternatif" name="keyword">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <?php if (empty($alternatif)) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                Data Nasabah tidak ditemukan
            </div>
       
        <?php endif; ?>
    <table class="table table-secondary table-hover ">
        <thead>
            <tr>
                <th>Id</th>
                <th>nama</th>
                <th>Penghasilan</th>
                <th>Lama Menjadi Anggota</th>
                <th>Sisa Pinjaman</th>
                <th>Jumlah Pinjaman</th>
                <th>Banyak Angsuran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternatif as $alt) : ?>
                <tr>

                    <td><?= $alt['id']; ?></td>
                    <td><?= $alt['nama']; ?></td>
                    <td><?= $alt['c1']; ?></td>
                    <td><?= $alt['c2']; ?></td>
                    <td><?= $alt['c3']; ?></td>
                    <td><?= $alt['c4']; ?></td>
                    <td><?= $alt['c5']; ?></td>
                    <td><a onclick="return confirm('yakin ?');" class="badge badge-danger" href="<?= base_url(); ?>alternatif/hapus/<?= $alt['id']; ?>">hapus</a>
                        <a class="badge badge-success" href="<?= base_url(); ?>alternatif/updatedata/<?= $alt['id']; ?>">update</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>