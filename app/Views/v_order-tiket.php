<?php $this->extend('layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="px-lg-5 mt-4 text-white">
        <div class="container-fluid" style="margin-top: 100px; min-height: 400px;">
            <h2>Tiket Anda </h2>

            <div class="mt-4 table-responsive">
                <table class="table text-white">
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


<?php $this->endSection(); ?>