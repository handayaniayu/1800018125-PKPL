<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo base_url('/css/style.css') ?>">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/b1cc3697a1.js" crossorigin="anonymous"></script>

        <title><?php echo $title ?></title>
    </head>
    <body>
        


        <nav class="navbar navbar-expand-lg navbar-dark px-lg-5 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('/') ?>">Bioskopia</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>

                    <div class="d-flex">
                        <?php if (session()->get('username')) { ?>
                            <div class="dropdown">
                                <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo session('username'); ?>
                                </a>

                                <ul class="dropdown-menu" style="margin-left: -60px;" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?php echo base_url('order-tiket/'.session('id')) ?>">Order Tiket</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('logout') ?>">Logout</a></li>
                                </ul>
                            </div>

                        <?php }else{ ?>
                            <a href="<?php echo base_url('registrasi') ?>" class="btn text-decoration-none bg-outline-merah me-2">Daftar</a>
                            <a href="<?php echo base_url('login') ?>" class="btn text-decoration-none bg-merah">Login</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>

        <?php $this->renderSection('content'); ?>

        <footer class="mt-5 py-lg-5 px-lg-5 text-white mt-5" style="min-height: 230px;">
            <div class="container-fluid">
                <div class="d-flex justify-content-between mt-5">
                    <div>
                        <h3>Bioskopia</h3>              
                    </div>
                    <div class="d-flex">
                        <div class="me-5">Home</div>
                        <div class="me-5">Film</div>
                        <div class="me-5">About</div>
                    </div>
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="me-3">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="me-3">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="p-1 text-center text-white copyright" style="font-size: 12px;">
            copyrright &copy; 2022 All Right Reserved            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>