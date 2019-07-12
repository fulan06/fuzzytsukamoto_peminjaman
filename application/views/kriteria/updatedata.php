<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card border-secondary mb-6">
                <div class="card-header">Update Data Kriteria</div>
                <div class="card-body">
                    <h4 class="card-title">Silahkan Inputkan Data Kriteria</h4>
                    <form action="" method="post">
                        <div class="form-group">

                            <label class="control-label" for="readOnlyInput">id</label>
                            <input class="form-control" name="id" type="text" readonly="nama" value="<?= $kriteria['id'] ?>">

                        </div>
                        
                        <div class="form-group">
                            <label for="batasb">Batas Bawah</label>
                            <input type="text" name="batasb" class="form-control" placeholder="Input Batas Bawah" id="batasb" value="<?= $kriteria['batasb'] ?>">
                            <small class="form-text text-danger"><?= form_error('batasb') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="batast">Batas Tengah</label>
                            <input type="text" name="batast" class="form-control" placeholder="Input Batas Tengah" id="batast" value="<?= $kriteria['batast'] ?>">
                            <small class="form-text text-danger"><?= form_error('batast') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="batasa">Batas Atas</label>
                            <input type="text" name="batasa" class="form-control" placeholder="Input Batas Atas" id="batasa" value="<?= $kriteria['batasa'] ?>">
                            <small class="form-text text-danger"><?= form_error('batasa') ?></small>
                        </div>
                        
                        <button type="submit" name="update" class="btn btn-success float-right margin-right" href="">Update</button>
                        <button type="reset" class="btn btn-warning float-right mr-1" href="">Reset</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>