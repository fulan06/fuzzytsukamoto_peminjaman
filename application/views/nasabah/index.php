<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data nasabah <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                </div>

            </div>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-6">
            <h3>Daftar Nasabah</h3>
            <a href="<?= base_url(); ?>nasabah/tambahdata" class="btn btn-primary mb-4 mt-4">Tambah Data Nasabah</a>

        </div>
    </div>
    <table class="table table-secondary table-hover ">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Nomor HP</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nasabah as $nsb) : ?>
                <tr>

                    <td><?= $nsb['id']; ?></td>
                    <td><?= $nsb['nip']; ?></td>
                    <td><?= $nsb['nama']; ?></td>
                    <td><?= $nsb['nohp']; ?></td>
                    <td><?= $nsb['keterangan']; ?></td>
                    <td><a onclick="return confirm('yakin ?');" class="badge badge-danger" href="<?= base_url(); ?>nasabah/hapus/<?= $nsb['id']; ?>">hapus</a>
                        <a class="badge badge-success" href="<?= base_url(); ?>nasabah/updatedata/<?= $nsb['id']; ?>">update</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>