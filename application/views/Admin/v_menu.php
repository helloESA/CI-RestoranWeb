<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i> Add</button>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Menu</th>
                        <th>Harga(Rp)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($menu as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->nama_kategori ?></td>
                        <td><?= $value->nama_menu ?></td>
                        <td><?= $value->harga_menu ?></td>
                        <td>
                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_menu ?>"> <i class="fa fa-edit"></i> Edit</button>
                            <a href="<?= base_url('menu/delete/'.$value->id_menu)?>" onclick="return confirm('Apakah data ini akan dihapus?')" class="btn btn-xs btn-danger"> <i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Add-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
            </div>
            <div class="modal-body">
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                <?php echo form_open('menu/add'); ?>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori_idkategori">
                            <option value="kosong">--Pilih Kategori--</option>
                            <?php foreach ($kategori as $key => $value) { ?>
                            <option value="<?php echo $value->id_kategori;?>"><?php echo $value->nama_kategori;?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input class="form-control" name="nama_menu" placeholder="Masukkan Menu">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name="harga_menu" placeholder="Masukkan Harga">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- Modal Edit-->
<?php foreach ($menu as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_menu ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Ubah Menu</h4>
            </div>
            <div class="modal-body">
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                <?php echo form_open('menu/edit/'.$value->id_menu); ?>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori_idkategori">
                            <option value="kosong">--Pilih Kategori--</option>
                            
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input class="form-control" name="nama_menu" value="<?= $value->nama_menu ?>" placeholder="Masukkan Menu">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name="harga_menu" value="<?= $value->harga_menu ?>"placeholder="Masukkan Harga">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- /.modal -->