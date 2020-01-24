<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
           
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }


            echo form_open_multipart('menu/edit/'.$menu->id_menu);
            ?>

                <div class="form-group">
                    <label>Nama Menu</label>
                    <input class="form-control" name="nama_menu" value="<?= $menu->nama_menu?>" placeholder="Masukkan Menu" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan_menu" rows="3" placeholder="Masukkan Keterangan" required><?= $menu->keterangan_menu?></textarea>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name="harga_menu" value="<?= $menu->harga_menu?>" placeholder="Masukkan Harga" required>
                </div>
                <div class="form-group">
                    <img src="<?= base_url('gambar_menu/'.$menu->gambar_menu)?>" width="120px">
                </div>
                <div class="form-group">
                    <label>Ganti Gambar</label>
                    <input type="file" class="form-control" type="text" name="gambar_menu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            <?php echo form_close(); ?>
           
        </div>
    </div>
</div>
