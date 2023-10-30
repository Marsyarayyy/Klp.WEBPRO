<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDashboard.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardKegiatan.css">
</head>

<body>
  <div>
    <?php include 'application/views/navLogin.php'; ?>
  </div>
  <!-- HEADER  -->
  <section id="headDash" style="position: relative;">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-12 headDash-tagline text-center" style="margin: 0; padding: 0;">
          <img src="<?= base_url() ?>assets/img/hutan.jpg" alt=""
            style="width: 100%; height: auto; max-width: 100%; flex-shrink: 0;" />
          <h1 class="headerDash">Kami Membutuhkan Anda!</h1>
          <p class="headerDescDash">Gabung kedalam sebuah kegiatan dan aksikan cintamu terhadap lingkungan</p>
        </div>
      </div>
    </div>
  </section>
  <!-- HEADER  -->
  <!-- FITUR  -->
  <section id="fitur">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-4 g-4 " style="padding: 25px;">
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100" style="width: 305px; height: 422px; border-radius: 20px; background: #00897B;">
            <div class="card-body">
              <p class="card-text pfitur1">Kami menghubungkan anda dengan komunitas, dengan itu bentuk nyata
                akan terwujud bagi lingkungan</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/CariKegiatan">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Cari Kegiatan</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body">
              <img src="<?= base_url() ?>assets/img/fitur 2.png" alt="" />
              <h5 class="card-title hfitur2"> Jadi Relawan </h5>
              <p class="card-text pfitur2">Minat menjadi relawan? cari kegiatan yang berada disekitarmu, kemudian
                daftarkan dirimu</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Daftar Relawan</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body">
              <img src="<?= base_url() ?>assets/img/fitur 3.png" alt="" />
              <h5 class="card-title hfitur3"> Jadi Komunitas </h5>
              <p class="card-text pfitur3">Daftarkan komunitasmu di platform kami, dan dapatkan keuntungan untuk
                komunitas yang dikelola</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Kelola
                  Komunitas</button>
              </a>
            </div>
          </div>
        </div>
        <div class="col text-center" style="padding: 10px;">
          <div class="card h-100"
            style="width: 305px; height: 422px; border-radius: 20px; border: 2px solid #00897B; background: #ffff;">
            <div class="card-body">
              <img src="<?= base_url() ?>assets/img/fitur 4.png" alt="" />
              <h5 class="card-title hfitur4">Panduan</h5>
              <p class="card-text pfitur4">Masih bingung dengan layanan yang tersedia? kami menyediakan panduan untuk
                kamu</p>
            </div>
            <div class="btn-link" style="margin:22px; margin: bottom 44px; width: 260px; height: 50px; ">
              <a href="<?= base_url() ?>index.php/Dashboard">
                <button type="button" class="btn btn-outline-light btn-lg" style="width: 260px;">Cek Panduan</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FITUR  -->

  <!-- MSG  -->
  <section id="msgDash" style="position: relative;">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-12 headDash-tagline text-center" style="margin-bottom: 74px; margin-top:64px; padding: 0;">
          <h1 class="msgDash">Banyak kegiatan yang bisa kamu ikuti</h1>
          <p class="msgDescDash">Ikuti kegiatan yang cocok denganmu, dan lihat lokasinya</p>
        </div>
      </div>
    </div>
  </section>
  <!-- MSG  -->

  <!-- CARD KEGIATAN -->
  <section id="cardKegiatan">
    <div class="container-fluid" style="background-color: #DADADA">
      <h5 style="padding-left:10px;">Rekomendasi</h5>
      <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 25px;">
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
      </div>
    </div>
  </section>
  <section id="cardKegiatan">
    <div class="container-fluid" style="background-color: #DADADA">
      <div class="row" style="padding: 25px;">
      <div class="col-md-12"
        
      </div>
    </div>
  </section>
  <div class="btn-group" role="group" aria-label="Kategori">
    <button type="button" class="btn btn-link btnKat">Kategori 1</button>
    <button type="button" class="btn btn-link btnKat">Kategori 2</button>
    <button type="button" class="btn btn-link btnKat">Kategori 3</button>
  </div>
  <div class="btn-group" role="group" aria-label="Kategori">
    <button type="button" class="btn btn-link btnKat">Kategori 1</button>
    <button type="button" class="btn btn-link btnKat">Kategori 2</button>
    <button type="button" class="btn btn-link btnKat">Kategori 3</button>
  </div>
  <!-- news -->
  <section>
    <div class="container-fluid">
      <h5 style="color:#00897b;">Berita</h5>
      <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 25px;">
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to
                additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer content than the first to show that equal
                height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer content than the first to show that equal
                height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to
                additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
        <div class="col" style="padding: 10px;">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url() ?>assets/img/hutan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title" style="color:#000;">Card title</h5>
              <p class="card-text" style="color:#000;">This card has supporting text below as a natural lead-in to
                additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">see more</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Footer -->
  <?php include 'application/views/footer.php'; ?>
  <!--Footer -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>