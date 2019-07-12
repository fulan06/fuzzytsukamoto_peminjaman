<div class="container">

  <!-- Heading Row -->
  <div class="row align-items-center my-5">
    <div class="col-lg-5">
      <img class="img-fluid rounded mb-4 mb-lg-0" src="img/logokoperasi.png" alt="">
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-7">
      <h1 class="font-weight-light">Selamat Datang, <?= $nama_user ?></h1>
      <p class="text-justify">Aplikasi ini digunakan untuk menyeleksi peminjam pada KPRI Warga Bina Karya SMPN 7 Mataram dengan menggunakan
        metode Fuzzy Tsukamoto. Adapun kriteria yang digunakan untuk menentukan kelayakan tersebut adalah :</p>
      <ul class="list-group mb-4">
        <li class="list-group-item">1. Penghasilan</li>
        <li class="list-group-item">2. Lama Menjadi Anggota</li>
        <li class="list-group-item">3. Sisa Pinjaman Sebelumnya</li>
        <li class="list-group-item">4. Jumlah Pinjaman</li>
        <li class="list-group-item">5. Banyak Angsuran</li>
      </ul>
      <?= $button_login; ?>
    </div>
    <!-- /.col-md-4 -->
  </div>
  <!-- /.row -->
  <!-- Content Row -->
  <div class="row">
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Profil</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary btn-sm">More Info</a>
        </div>
      </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Card Two</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary btn-sm">More Info</a>
        </div>
      </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Card Three</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary btn-sm">More Info</a>
        </div>
      </div>
    </div>
    <!-- /.col-md-4 -->

  </div>
  <!-- /.row -->

</div>