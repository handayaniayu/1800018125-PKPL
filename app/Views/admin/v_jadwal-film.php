<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <h1 class="m-0 text-dark">Jadwal Film "<?php echo $film['film_nama'] ?>"</h1>

                    <div>
                        <a class="btn btn-dark" href="<?php echo base_url('tambah-jadwal/'.$film['film_id']); ?>">Tambah Film</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">

                <div class="shadow-sm bg-white p-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="40px">No</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Harga</th>
                                    <th width="40px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1; 
                                    foreach($jadwal_film as $j){ 
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $j['jadwal_tanggal']; ?></td>
                                        <td><?php echo $j['jadwal_jam']; ?></td>
                                        <td><?php echo $j['jadwal_harga']; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-danger" href="<?php echo base_url('hapus-jadwal/'.$j['jadwal_id']) ?>"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++; 
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php $this->endSection(); ?>