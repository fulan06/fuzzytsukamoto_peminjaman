<div class="container pt-5 mt-5">
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
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rules as $rul) : ?>
                <tr>

                    <td><?= $rul['id']; ?></td>
                    <td><?= $rul['penghasilan']; ?></td>
                    <td><?= $rul['lama_menjadi_anggota']; ?></td>
                    <td><?= $rul['sisa_pinjaman']; ?></td>
                    <td><?= $rul['jumlah_pinjaman']; ?></td>
                    <td><?= $rul['banyak_angsuran']; ?></td>
                    <td><?= $rul['z']; ?></td>
                    

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>