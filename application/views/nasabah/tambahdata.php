<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card border-secondary mb-6">
                <div class="card-header">Tambah Data Nasabah</div>
                <div class="card-body">
                    <h4 class="card-title">Silahkan Inputkan Data Nasabah</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP" id="nip">
                            <small class="form-text text-danger"><?= form_error('nip') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Nasabah" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No. Hp</label>
                            <input type="text" name="nohp" class="form-control" placeholder="No. HP" id="nohp">
                            <small class="form-text text-danger"><?= form_error('nohp') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan">
                            <small class="form-text text-danger"><?= form_error('keterangan') ?></small>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-success float-right margin-right" href="">Simpan</button>
                        <button type="reset" class="btn btn-warning float-right mr-1" href="">Reset</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>