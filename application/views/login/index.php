<div class="container pt-5 mt-5" style="margin-top:30px">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Login <strong>Gagal!</strong>
                    <?= $this->session->flashdata('flash'); ?>.
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-md-4 mx-auto">
        <div class="login-panel panel panel-default">
            <div class="panel-heading mb-4">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">
                <form action="<?= base_url('login/login_ego'); ?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="username" type="username" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>




</div>