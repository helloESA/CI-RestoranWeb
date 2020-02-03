<div class="container">
    <div class="section-intro mb-120px">
        <h4 class="intro-title">Menu Kami</h4>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <table>
            <tr>
                <td>No</td>
                <td>Menu</td>
                <td>Gambar</td>
                <td>Harga</td>
                <td>Jml</td>
                <td>Subtotal</td>
            </tr>
            <?php $no = 0;
            foreach ($pesanan as $key => $value) {
                $no++; ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value->nama_menu ?></td>
                    <td><img class="card-img-top" src="<?= base_url('gambar_menu/' . $value->gambar_menu) ?>" alt="Card image cap" width="200px" height="200px"></td>
                    <td>Rp. <?= $value->harga_menu ?></td>
                    <td><input type="number" name="jml" value="<?= $value->jumlah_menu ?>"></td>
                    <td><?= $value->harga_menu * $value->jumlah_menu ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>