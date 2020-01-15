<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Menu Yang Dipesan</th>
                        <th>Jumlah</th>
                        <th>Nama Pemesan</th>
                        <th>Waktu Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($pesanan as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->menu_idmenu++ ?></td>
                        <td><?= $value->jumlah_menu++ ?></td>
                        <td><?= $value->nama_pemesan++ ?></td>
                        <td><?= $value->waktu_pesan++ ?></td>
                        <td>
                            <a href="<?= base_url('pesanan/delete/'.$value->id_pemesanan)?>" onclick="return confirm('Pesanan ini Sudah Diproses?')" class="btn btn-xs btn-success"> <i class="fa fa-shopping-bag"></i> Proses</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>