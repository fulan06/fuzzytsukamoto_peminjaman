<div class="container pt-5 mt-5">
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
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>nasabah/tambahdata" class="btn btn-primary mb-4 mt-4">Tambah Data Nasabah</a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 float-right mt-4">
        <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Nasabah" name="keyword">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <?php if (empty($nasabah)) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                Data Nasabah tidak ditemukan
            </div>
        <?php endif; ?>

    <table class="table table-secondary table-hover ">
        <thead>
            <tr>
                <th>Id</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
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
                    <td><?= $nsb['alamat']; ?></td>
                    <td><?= $nsb['nohp']; ?></td>
                    <td><?= $nsb['keterangan']; ?></td>
                    <td><a onclick="return confirm('yakin ?');" class="badge badge-danger" href="<?= base_url(); ?>nasabah/hapus/<?= $nsb['id']; ?>">hapus</a>
                        <a class="badge badge-success" href="<?= base_url(); ?>nasabah/updatedata/<?= $nsb['id']; ?>">update</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>