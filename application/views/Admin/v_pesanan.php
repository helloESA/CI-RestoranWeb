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
            <th>Menu Yang Dipesan</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Waktu Pesan</th>
            <th>SubTotal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($pesanan as $key => $value) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->nama_menu ?></td>
                <td><?= $value->jumlah_menu ?></td>
                <td align="right">Rp. <?= number_format($value->harga_menu) ?></td>
                <td><?= $value->waktu_pesan ?></td>
                <td><?= number_format($value->harga_menu * $value->jumlah_menu) ?></td>
                <td>
                    <a href="<?= base_url('pemesanan/delete/' . $value->id_pemesanan) ?>" onclick="return confirm('Pesanan ini Sudah Diproses?')" class="btn btn-xs btn-success"> <i class="fa fa-shopping-bag"></i> Proses</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>