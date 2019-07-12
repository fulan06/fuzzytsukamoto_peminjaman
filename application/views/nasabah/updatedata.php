<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card border-secondary mb-6">
                <div class="card-header">Update Data Nasabah</div>
                <div class="card-body">
                    <h4 class="card-title">Silahkan Inputkan Data Nasabah</h4>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $nasabah['id']; ?>">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP" id="nip" value="<?= $nasabah['nip'];  ?>">
                            <small class="form-text text-danger"><?= form_error('nip') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Nasabah" id="nama" value="<?= $nasabah['nama'];  ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat" value="<?= $nasabah['alamat'];  ?>">
                            <small class="form-text text-danger"><?= form_error('alamat') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No. Hp</label>
                            <input type="text" name="nohp" class="form-control" placeholder="No. HP" id="nohp" value="<?= $nasabah['nohp'];  ?>">
                            <small class="form-text text-danger"><?= form_error('nohp') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan" value="<?= $nasabah['keterangan'];  ?>">
                            <small class="form-text text-danger"><?= form_error('keterangan') ?></small>
                        </div>
                        <button type="submit" name="update" class="btn btn-success float-right margin-right" href="">Update</button>
                        <button type="reset" class="btn btn-warning float-right mr-1" href="">Reset</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>