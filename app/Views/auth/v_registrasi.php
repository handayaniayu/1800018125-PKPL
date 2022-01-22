<?php $this->extend('auth/layout/_template'); ?>

<?php $this->section('content'); ?>

    <center>
        <div style="width: 400px; margin-top: 125px; background-color: transparent;" class="card p-3 text-white">
            <h3>Bioskopi</h3>

            <form action="<?php echo base_url('AuthController/prosesRegistrasi') ?>" method="post" class="mt-4">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control <?php if(session('validation.username')) : ?>is-invalid<?php endif ?>" value="<?= old('username') ?>" placeholder="Username">

                    <div class="invalid-feedback text-start" id="invalid-username">
                        <?php echo session('validation.username'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control <?php if(session('validation.password') or session('error_pass')) : ?>is-invalid<?php endif ?>" value="<?= old('password') ?>" placeholder="Password">

                    <div class="invalid-feedback text-start" id="invalid-password">
                        <?php echo session('validation.password'); ?>
                        <?php echo session('error_pass'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="password" name="password1" class="form-control <?php if(session('validation.password') or session('error_pass')) : ?>is-invalid<?php endif ?>" value="<?= old('password') ?>" placeholder="Konfirmasi Password">

                    <div class="invalid-feedback text-start" id="invalid-password">
                        <?php echo session('validation.password'); ?>
                        <?php echo session('error_pass'); ?>
                    </div>
                </div>
                <div class="mt-4">
                    <input type="submit" class="btn bg-merah px-5" value="Daftar">
                </div>
            </form>
        </div>
    </center>

<?php $this->endSection(); ?>