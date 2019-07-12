<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card border-secondary mb-6">
                <div class="card-header">Tambah Data Alternatif</div>
                <div class="card-body">
                    <h4 class="card-title">Silahkan Inputkan Data Alternatif</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleSelect1">Id</label>
                            <select class="form-control" id="id" name="id" aria-selected="pilih">
                            <option selected>Pilih ....</option>
                                <?php foreach ($idnasabah as $idnsb) : ?>
                                    <option value="<?= $idnsb['id'] ?>"><?= $idnsb['id'] ?> : <?= $idnsb['nama'] ?></option>

                                <?php endforeach; ?>
                                <small class="form-text text-danger"><?= form_error('id') ?></small>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="c1">Penghasilan Rp.(500.000 - 2.500.000)</label>
                            <input type="text" name="c1" class="form-control" placeholder="Penghasilan" id="c1">
                            <small class="form-text text-danger"><?= form_error('c1') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c2">Lama Menjadi Anggota (1 - 15) Tahun</label>
                            <input type="text" name="c2" class="form-control" placeholder="Lama Menjadi Anggota" id="c2">
                            <small class="form-text text-danger"><?= form_error('c2') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c3">Sisa Pinjaman Rp.(500.000 - 20.000.000)</label>
                            <input type="text" name="c3" class="form-control" placeholder="Sisa Pinjaman" id="c3">
                            <small class="form-text text-danger"><?= form_error('c3') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c4">Jumlah Pinjaman Rp.(500.000 - 25.000.000)</label>
                            <input type="text" name="c4" class="form-control" placeholder="Jumlah Pinjaman" id="c4">
                            <small class="form-text text-danger"><?= form_error('c4') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c5">Angsuran (1-40) Kali</label>
                            <input type="text" name="c5" class="form-control" placeholder="Angsuran" id="c5">
                            <small class="form-text text-danger"><?= form_error('c5') ?></small>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-success float-right margin-right" href="">Simpan</button>
                        <button type="reset" class="btn btn-warning float-right mr-1" href="">Reset</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>