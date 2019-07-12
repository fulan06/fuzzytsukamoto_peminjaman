<div class="container pt-5 mt-5">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    Data Kriteria <strong>berhasil </strong> <?= $this->session->flashdata  ('flash'); ?>
                </div>
 
            </div>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-6">
            <h3 class="mb-4">Kriteria</h3>
        </div>
    </div>
    <table class="table table-secondary table-hover ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Batas Bawah</th>
                <th>Batas Tengah</th>
                <th>Batas Atas</th>
                <th>Nama Bawah</th>
                <th>Nama Tengah</th>
                <th>Nama Atas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kriteria as $krit) : ?>
                <tr>

                    <td><?= $krit['id']; ?></td>
                    <td><?= $krit['namakr']; ?></td>
                    <td><?= $krit['batasb']; ?></td>
                    <td><?= $krit['batast']; ?></td>
                    <td><?= $krit['batasa']; ?></td>
                    <td><?= $krit['namab']; ?></td>
                    <td><?= $krit['namat']; ?></td>
                    <td><?= $krit['namaa']; ?></td>
                    <td>
                        <a class="badge badge-success" href="<?= base_url();?>kriteria/updatedata/<?= $krit['id']; ?>">update</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>