<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper"> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Film</h1>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">

                <div class="shadow-sm p-3 bg-white">
                    <form method="post" action="<?php echo base_url('filmController/prosesEdit') ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $film['film_id'] ?>">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control <?php if(session('validation.nama')) : ?>is-invalid<?php endif ?>" value="<?php echo $film['film_nama'] ?>">

                            <div class="invalid-feedback text-start" id="invalid-nama">
                                <?php echo session('validation.nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Genre</label>
                            <select class="form-select <?php if(session('validation.genre')) : ?>is-invalid<?php endif ?>" value="<?= old('genre') ?>" name="genre">
                                <option value="<?php echo $genre_lama['genre_id'] ?>"><?php echo $genre_lama['genre_nama'] ?></option>
                                <?php foreach($genre as $g){ ?>
                                    <option value="<?php echo $g['genre_id'] ?>"><?php echo $g['genre_nama'] ?></option>
                                <?php } ?>
                            </select>

                            <div class="invalid-feedback text-start" id="invalid-genre">
                                <?php echo session('validation.genre'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control <?php if(session('validation.tahun')) : ?>is-invalid<?php endif ?>" value="<?php echo $film['film_tahun'] ?>">

                            <div class="invalid-feedback text-start" id="invalid-tahun">
                                <?php echo session('validation.tahun'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Trailer</label>
                            <input type="text" name="trailer" class="form-control <?php if(session('validation.trailer')) : ?>is-invalid<?php endif ?>" value="<?php echo $film['film_trailer'] ?>">

                            <div class="invalid-feedback text-start" id="invalid-trailer">
                                <?php echo session('validation.trailer'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Poster</label>
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-sm-12">
                                    <img class="w-100 rounded" src="<?php echo base_url('image/'.$film['film_poster']) ?>" alt="">

                                    <input type="hidden" name="poster_lama" value="<?php echo $film['film_poster'] ?>">
                                </div>
                                <div class="col-lg-9 col-sm-12">
                                    <input type="file" name="poster" class="form-control <?php if(session('validation.poster')) : ?>is-invalid<?php endif ?>">

                                    <div class="invalid-feedback text-start" id="invalid-poster">
                                        <?php echo session('validation.poster'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Sampul</label>
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-sm-12">
                                    <img class="w-100 rounded" src="<?php echo base_url('image/'.$film['film_sampul']) ?>" alt="">

                                    <input type="hidden" name="sampul_lama" value="<?php echo $film['film_sampul'] ?>">
                                </div>
                                <div class="col-lg-8 col-sm-12">
                                    <input type="file" name="sampul" class="form-control <?php if(session('validation.sampul')) : ?>is-invalid<?php endif ?>">

                                    <div class="invalid-feedback text-start" id="invalid-sampul">
                                        <?php echo session('validation.sampul'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Sinopsis</label>
                            <textarea name="sinopsis" id="" class="form-control <?php if(session('validation.nama')) : ?>is-invalid<?php endif ?>" cols="30" rows="10"><?php echo $film['film_sinopsis'] ?></textarea>

                            <div class="invalid-feedback text-start" id="invalid-sinopsis">
                                <?php echo session('validation.sinopsis'); ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-dark" value="Update">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $this->endSection(); ?>