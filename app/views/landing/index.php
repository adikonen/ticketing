<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing | Landing</title>
    <link href="<?= BASE_URL?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL?>/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL?>/css/landing.css">
</head>
<body>
    <?php component('navbar')?>
    <section class="vh-100 text-white bg-primary pt-5 welcome-section">
        <div class="pt-md-5 pt-2 text-center">
            <h4 class="mt-5 h2">
                Selamat Datang di Ticketing
                <i class="fa fa-fw fa-train"></i>
            </h4>
            <p>Ayo Pesan Tiketmu Tanpa Harus <strong>Mengantri!</strong></p>
             <!-- <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem" src="img/undraw_posting_photo.svg" alt="..." /> -->
             <div class="d-flex flex-wrap justify-content-center px-5 py-md-3 mx-auto">
                <div class="mt-3 mx-5">
                    <h4>30rb <i class="fa fa-fw fa-wallet"></i></h4>
                    <p>Mulai Dari 30 ribu</p>
                </div>
                <div class="mt-3 mx-5">
                    <h4>58 <i class="fa fa-fw fa-bus"></i></h4>
                    <p>Transportasi tersedia</p>
                </div>
                <div class="mt-3 mx-5">
                    <h4>60 <i class="fa fa-fw fa-users"></i></h4>
                    <p>Sudah Menggunakan</p>
                </div>
                <div class="mt-3 mx-5">
                    <h4><i class="fa fa-fw fa-check"></i></h4>
                    <p>Mudah digunakan</p>
                </div>
             </div>
            <a href="#benefit-section" class="btn btn-danger mt-4">Keunggulan Ticketing <i class="fa fa-fw fa-arrow-down"></i></a>
        </div>
    </section>
    <section class="vh-100" id="benefit-section">
       <!-- <div class="bg-primary py-3"></div> -->
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4e73df" fill-opacity="1" d="M0,128L120,149.3C240,171,480,213,720,218.7C960,224,1200,192,1320,176L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
       <!-- <div class="text-center" id="white-space">
            <h2 class="benefit-heading text-white">Kenapa Harus Ticekting</h2>
            <div class="card-deck px-5 benefit-card-container">
                <div class="card shadow text-black">
                    <h4 class=" p-3 border-bottom-primary">Konen</h4>

                </div>
                <div class="card shadow text-black">
                    <h2>Konen</h2>
                </div>
                <div class="card shadow text-black">
                    <h2>Konen</h2>
                </div>
        </div>
       </div> -->
       <h2 class="mb-4 text-black font-weight-bold p-0 text-center benefit-heading">Kehebatan Ticketing</h2>
       <div class="card-deck px-5">
            <div class="card p-3">
                <div class="text-center">
                    <div class="text-danger">
                        <a href="#" class="btn btn-circle btn-danger mb-2">
                            <i class="fa fa-fw fa-dollar-sign"></i>
                        </a>
                    </div>
                    <span class="h3 text-center text-danger">Murah</span>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        Pembelian tiket dimulai dari harga 30 ribu rupiah saja
                    </p>
                </div>
            </div>
            <div class="card p-3">
                <div class="text-center">
                    <div class="text-danger">
                        <a href="#" class="btn btn-circle btn-danger mb-2">
                            <i class="fa fa-fw fa-globe"></i>
                        </a>
                    </div>
                    <span class="h3 text-center text-danger">Mudah</span>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        Anda tidak perlu repot repot mengantri dalam pembelian tiket. Cukup isi formulir pemesanan tiket. Anda diijinkan untuk membatalkan pembelian tiket selagi Anda belum membayarnya
                    </p>
                </div>
            </div>
            <div class="card p-3">
                <div class="text-center">
                    <div class="text-danger">
                        <a href="#" class="btn btn-circle btn-danger mb-2">
                            <i class="fa fa-fw fa-wrench"></i>
                        </a>
                    </div>
                    <span class="h3 text-center text-danger">24/7 Service</span>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        Customer Service siap melayani Anda dimanapun dan kapanpun dengan cepat
                    </p>
                </div>
            </div>
       </div>
    </section>
    <section class="vh-100">
    <h2 class="mb-4 text-black font-weight-bold p-0 text-center">Jelajahi Bumi Ini</h2>
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0 bg-primary text-white">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-5 d-none d-lg-block p-5">
                    <h4>Ayo Jelajah</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ab commodi suscipit voluptas consectetur! Suscipit doloribus eveniet maiores nisi ratione quo temporibus, soluta aliquid accusantium laudantium facilis, nostrum vel voluptatibus!</p>
                    <button class="btn btn-danger">Saya ingin keliling dunia <i class="fa fa-fw fa-globe"></i> </button>
                </div>
                <div class="col-lg-7">
                  <div>
                    Jepang
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="<?= BASE_URL?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_URL?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_URL?>/js/sb-admin-2.min.js"></script>
</body>
</html>