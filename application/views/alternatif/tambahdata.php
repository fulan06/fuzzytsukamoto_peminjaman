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
                                    <option><?= $idnsb['id'] ?></option>

                                <?php endforeach; ?>
                                <small class="form-text text-danger"><?= form_error('id') ?></small>
                            </select>
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <label class="control-label" for="readOnlyInput">Nama Nasabah</label>
                                <input class="form-control" id="nama" type="text" placeholder="Nama Nasabah" readonly="nama">
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="c1">C1 Rp.(500.000 - 2.500.000)</label>
                            <input type="text" name="c1" class="form-control" placeholder="Input C1" id="c1">
                            <small class="form-text text-danger"><?= form_error('c1') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c2">C2 (1 - 15) Tahun</label>
                            <input type="text" name="c2" class="form-control" placeholder="Input C2" id="c2">
                            <small class="form-text text-danger"><?= form_error('c2') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c3">C3 Rp.(500.000 - 20.000.000)</label>
                            <input type="text" name="c3" class="form-control" placeholder="Input C3" id="c3">
                            <small class="form-text text-danger"><?= form_error('c3') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c4">C4 Rp.(500.000 - 25.000.000)</label>
                            <input type="text" name="c4" class="form-control" placeholder="Input C4" id="c4">
                            <small class="form-text text-danger"><?= form_error('c4') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c5">C5 (1-40)Kali</label>
                            <input type="text" name="c5" class="form-control" placeholder="Input C5" id="c5">
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