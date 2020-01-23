<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('menu/add/')?>" class="btn btn-info btn-sm"> <i class="fa fa-plus"></i> Add</a>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            } elseif ($this->session->flashdata('pesan1')) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan1');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Keterangan</th>
                        <th>Harga(Rp)</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($menu as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->nama_menu ?></td>
                        <td><?= $value->keterangan_menu ?></td>
                        <td><?= $value->harga_menu ?></td>
                        <td><img src="<?= base_url('gambar_menu/'.$value->gambar_menu)?>" width="100p"></td>
                        <td> <center>
                            <a href="<?= base_url('menu/edit/'.$value->id_menu)?>" class="btn btn-xs btn-success" > <i class="fa fa-edit"></i> </a>
                            <a href="<?= base_url('menu/delete/'.$value->id_menu)?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-xs btn-danger"> <i class="fa fa-remove"></i> </a>
                        </center> </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>