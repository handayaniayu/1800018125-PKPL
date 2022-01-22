<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper"> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tambah Film</h1>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">

                <div class="shadow-sm p-3 bg-white">
                    <form method="post" action="<?php echo base_url('filmController/prosesTambah') ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control <?php if(session('validation.nama')) : ?>is-invalid<?php endif ?>" value="<?= old('nama') ?>">

                            <div class="invalid-feedback text-start" id="invalid-nama">
                                <?php echo session('validation.nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Genre</label>
                            <select class="form-select <?php if(session('validation.genre')) : ?>is-invalid<?php endif ?>" value="<?= old('genre') ?>" name="genre">
                                <option value="">Pilih Genre</option>
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
                            <input type="text" name="tahun" class="form-control <?php if(session('validation.tahun')) : ?>is-invalid<?php endif ?>" value="<?= old('tahun') ?>">

                            <div class="invalid-feedback text-start" id="invalid-tahun">
                                <?php echo session('validation.tahun'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Trailer</label>
                            <input type="text" name="trailer" class="form-control <?php if(session('validation.trailer')) : ?>is-invalid<?php endif ?>" value="<?= old('trailer') ?>">

                            <div class="invalid-feedback text-start" id="invalid-trailer">
                                <?php echo session('validation.trailer'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Poster</label>
                            <input type="file" name="poster" class="form-control <?php if(session('validation.poster')) : ?>is-invalid<?php endif ?>" value="<?= old('poster') ?>">

                            <div class="invalid-feedback text-start" id="invalid-poster">
                                <?php echo session('validation.poster'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Sampul</label>
                            <input type="file" name="sampul" class="form-control <?php if(session('validation.sampul')) : ?>is-invalid<?php endif ?>" value="<?= old('sampul') ?>">

                            <div class="invalid-feedback text-start" id="invalid-sampul">
                                <?php echo session('validation.sampul'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Sinopsis</label>
                            <textarea name="sinopsis" id="" class="form-control <?php if(session('validation.nama')) : ?>is-invalid<?php endif ?>" value="<?= old('nama') ?>" cols="30" rows="10"></textarea>

                            <div class="invalid-feedback text-start" id="invalid-sinopsis">
                                <?php echo session('validation.sinopsis'); ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-dark" value="Tambah">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $this->endSection(); ?>