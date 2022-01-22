<?php $this->extend('layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="info-film text-white px-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-12 pe-lg-5">
                    <img style="height: 460px;" class="w-100 rounded" src="<?php echo base_url('image/'.$film_1['film_poster']) ?>" alt="">
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="fw-light"><?php echo $film_1['film_tahun'] ?></div>

                    <div class="mt-3">
                        <h2><?php echo $film_1['film_nama'] ?></h2>
                    </div>

                    <div class="d-flex mt-3 fw-light">
                        <?php echo $film_1['genre_nama'] ?>
                    </div>

                    <div class="mt-3 w-75">
                        <?php echo $film_1['film_sinopsis'] ?>
                    </div>

                    <div class="d-flex mt-5 align-items-center">
                        <div class="me-5">
                            <a href="<?php echo $film_1['film_trailer'] ?>" target="blank" class="btn bg-merah d-flex align-items-center px-4"><span class="me-3" style="font-size: 10px;"><i class="fas fa-play"></i></span> Watch Trailer</a>
                        </div>
                        <div>
                            <a href="<?php echo base_url('detail-film/'.$film_1['film_id']) ?>" class=" d-flex align-items-center link-merah">
                                <span class="me-1"><i class="fas fa-ellipsis-h"></i></span>

                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mask">
        <div class="w-100 d-flex opacity">
            <div class="position-relative" style="background-image: url(../image/<?php echo $film_1['film_sampul'] ?>); width: 100%; height: 600px; background-size: cover; ">
            
            </div>
        </div>
    </div>

    <div class="index-jadwal px-lg-5 py-3" style="min-height: 50px;">
        <div class="container-fluid">
            <form action="<?php echo base_url('TransaksiController/prosesTambah') ?>" method="post">
                <div class="row align-items-center text-white">
                    <div class="col-lg-10 col-sm-12 my-3">
                        <label>Pilih Jadwal Nonton</label>
                        <div class="mt-1">
                            <select name="jadwal_id" class="form-select">
                                <?php foreach($jadwal_film as $j){ ?>
                                    <option value="<?php echo $j['jadwal_id']; ?>">tranggal : <?php echo $j['jadwal_tanggal']; ?> - jam : <?php echo $j['jadwal_jam']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12 my-3">
                        <?php if (session()->get('username')) { ?>
                            <input type="hidden" name="user_id" value="<?php echo session()->get('id') ?>">
                            <input type="hidden" name="film_id" value="<?php echo $film_1['film_id'] ?>">
                            <input type="submit" class="btn bg-merah w-100 mt-4" value="Buy Ticket">
                        <?php }else{ ?>
                            <a href="<?php echo base_url('login')?>" class="btn bg-merah w-100 mt-4"> Buy Ticket</a>
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="px-lg-5 mt-4">
        <div class="container-fluid">
            <div class="mt-5">
                <form action="<?php echo base_url('Home/cariFilm') ?>" method="get">
                    <div class="row">
                        <div class="col-lg-11 col-sm-12">
                            <input type="text" name="keyword" placeholder="Cari Film" class="form-control">
                        </div>
                        <div class="col-lg-1 col-sm-12">
                            <input type="submit" class="btn bg-merah w-100" value="Cari">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mt-4">
                <?php foreach($film as $f){ ?>
                <div class="col-lg-3 col-sm-12 p-3">
                    <div class="card border-0 rounded shadow">
                        <img class="w-100 rounded" src="<?php echo base_url('image/'.$f['film_poster']) ?>" alt="">

                        <a href="<?php echo base_url('detail-film/'.$f['film_id']) ?>" class="stretched-link"></a>
                    </div>
                    <div class="mt-3 text-white fw-bold">
                        <a href="<?php echo base_url('detail-film/'.$f['film_id']) ?>" class="link-merah"><?php echo $f['film_nama'] ?></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


<?php $this->endSection(); ?>