<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card border-secondary mb-6">
                <div class="card-header">Update Data Alternatif</div>
                <div class="card-body">
                    <h4 class="card-title">Silahkan Inputkan Data Alternatif</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <fieldset>
                                <label class="control-label" for="readOnlyInput">id</label>
                                <input class="form-control" id="nama" type="text" placeholder="Nama Nasabah" readonly="nama" value="<?= $alternatif['id'] ?>">
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <label class="control-label" for="readOnlyInput">Nama Nasabah</label>
                                <input class="form-control" id="nama" type="text" placeholder="Nama Nasabah" readonly="nama">
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="c1">C1</label>
                            <input type="text" name="c1" class="form-control" placeholder="Input C1" id="c1" value="<?= $alternatif['c1'] ?>">
                            <small class="form-text text-danger"><?= form_error('c1') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c2">C2</label>
                            <input type="text" name="c2" class="form-control" placeholder="Input C2" id="c2" value="<?= $alternatif['c2'] ?>">
                            <small class="form-text text-danger"><?= form_error('c2') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c3">C3</label>
                            <input type="text" name="c3" class="form-control" placeholder="Input C3" id="c3" value="<?= $alternatif['c3'] ?>">
                            <small class="form-text text-danger"><?= form_error('c3') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c4">C4</label>
                            <input type="text" name="c4" class="form-control" placeholder="Input C4" id="c4" value="<?= $alternatif['c4'] ?>">
                            <small class="form-text text-danger"><?= form_error('c4') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="c5">C5</label>
                            <input type="text" name="c5" class="form-control" placeholder="Input C5" id="c5" value="<?= $alternatif['c5'] ?>">
                            <small class="form-text text-danger"><?= form_error('c5') ?></small>
                        </div>
                        <button type="submit" name="update" class="btn btn-success float-right margin-right" href="">Update</button>
                        <button type="reset" class="btn btn-warning float-right mr-1" href="">Reset</button>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>