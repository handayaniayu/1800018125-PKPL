<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <h1 class="m-0 text-dark">Genre</h1>

                    <div>
                        <a class="btn btn-dark" href="<?php echo base_url('tambah-genre'); ?>">Tambah Genre</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">
                <!-- <div class="shadow-sm bg-white p-3">
                    <div class="row">
                        <div class="col-lg-11 col-sm-12">
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-lg-1 col-sm-12">
                            <input type="submit" class="btn btn-dark w-100" value="Cari">
                        </div>
                    </div>
                </div> -->

                <div class="shadow-sm bg-white p-3">
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th width="300px">Film</th>
                                    <th>Jadwal</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($tiket as $t){ 
                                ?>
                                    <tr>
                                        <td>
                                            <div><?php echo $t['film_nama'] ?></div>
                                        </td>
                                        <td><div><?php echo $t['jadwal_tanggal'] ?> - <?php echo $t['jadwal_tanggal'] ?></div></td>
                                        <td><div><?php echo $t['jadwal_harga'] ?></div></td>
                                    </tr>
                                <?php
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

<?php $this->endSection(); ?>