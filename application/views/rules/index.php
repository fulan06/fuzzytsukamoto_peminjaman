<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data Rules <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                </div>

            </div>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-6">
            <h3 class="mb-4">Rules</h3>
        </div>
    </div>
    <table class="table table-secondary table-hover ">
        <thead>
            <tr>
                <th>No</th>
                <th>Penghasilan</th>
                <th>Lama Menjadi Anggota</th>
                <th>Sisa Pinjaman Sebelumnya</th>
                <th>Jumlah Pinjaman</th>
                <th>Banyak Angsuran</th>
                <th>Pinjaman</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rules as $rul) : ?>
                <tr>

                    <td><?= $rul['id']; ?></td>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td><?= $rul['z']; ?></td>
                    <td>
                        <a class="badge badge-success" href="<?= base_url(); ?>nasabah/updatedata/<?= $rul['id']; ?>">update</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>