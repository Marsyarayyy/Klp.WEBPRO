<!DOCTYPE html>

<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styleLogin.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>assets/img/relawain logo 1.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin:10px; width: 138px;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-4">
                        <a class="nav-link active" aria-current="page" href="#">Utama</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Fitur</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="loginPage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="MasukHead fw-semibold text-center ">
                        Masuk
                    </h1>
                    <p class="text-center" style="font-size: 16px">Masuk dengan</p>

                    <div class="social_icons text-center">
                        <a href="#" class="icon" style="color: #00897b">
                            <img src="<?= base_url() ?>assets/img/Google__G__Logo 1.png" width="30" height="30" />
                        </a>
                        <a href="#" class="icon" style="color: #00897b">
                            <img src="<?= base_url() ?>assets/img/Microsoft_logo 1.png" width="30" height="30" />
                        </a>
                        <a href="#" class="icon" style="color: #00897b">
                            <img src="<?= base_url() ?>assets/img/Facebook_f_logo_(2019) 1.png" width="30"
                                height="30" />
                        </a>
                    </div>
                    <p class="text-center mt-3" style="font-size: 16px">atau</p>
                    <form>
                        <div class="input-group mb-4 mx-auto" style="max-width: 400px">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"
                                    style="color: #00897b"></i></span>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="input-group mb-2 mx-auto" style="max-width: 400px">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"
                                    style="color: #00897b"></i></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                                aria-describedby="basic-addon1" />
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" style="position: relative; right: -10%; color: #00897b">Lupa Password?</a>
                        </div>

                        <div class="mt-4" style="text-align: center">
                            <a href="<?= base_url() ?>index.php/Dashboard" class="btn MasukBut">MASUK</a>
                        </div>

                        <p class="text-center mt-3" style="font-size: 16px">
                            Belum Punya Akun?
                            <a href="#" style="color: #00897b; margin-left: 10px">Buat Akun</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>