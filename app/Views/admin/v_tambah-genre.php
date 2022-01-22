<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper"> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tambah Genre</h1>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">

                <div class="shadow-sm p-3 bg-white">
                    <form method="post" action="<?php echo base_url('genreController/prosesTambah') ?>">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control <?php if(session('validation.nama')) : ?>is-invalid<?php endif ?>" value="<?= old('nama') ?>">

                            <div class="invalid-feedback text-start" id="invalid-nama">
                                <?php echo session('validation.nama'); ?>
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