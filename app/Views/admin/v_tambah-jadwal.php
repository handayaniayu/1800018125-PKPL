<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper"> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tambah Jadwal</h1>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">

                <div class="shadow-sm p-3 bg-white">
                    <form method="post" action="<?php echo base_url('jadwalController/prosesTambah') ?>">
                        <input type="hidden" name="id_film" value="<?php echo $film_id ?>">
                        <div class="mb-3">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control <?php if(session('validation.tanggal')) : ?>is-invalid<?php endif ?>" value="<?= old('tanggal') ?>">

                            <div class="invalid-feedback text-start" id="invalid-tanggal">
                                <?php echo session('validation.tanggal'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Jam</label>
                            <input type="text" name="jam" class="form-control <?php if(session('validation.jam')) : ?>is-invalid<?php endif ?>" value="<?= old('jam') ?>">

                            <div class="invalid-feedback text-start" id="invalid-jam">
                                <?php echo session('validation.jam'); ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control <?php if(session('validation.harga')) : ?>is-invalid<?php endif ?>" value="<?= old('harga') ?>">

                            <div class="invalid-feedback text-start" id="invalid-harga">
                                <?php echo session('validation.harga'); ?>
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