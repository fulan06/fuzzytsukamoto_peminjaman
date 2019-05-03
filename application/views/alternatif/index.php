<div class="container">
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
            <a href="<?= base_url(); ?>alternatif/tambahdata" class="btn btn-primary mb-4 mt-4">Tambah Data Alternatif</a>

        </div>
    </div>
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