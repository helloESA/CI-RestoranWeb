<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>UserName</th>
            <th>Level</th>
            <th>Alamat</th>
            <th>No Telepon</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($pengguna as $key => $value) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->nama_lengkap ?></td>
                <td><?= $value->username ?></td>
                <td><?= $value->level ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->no_telepon ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    window.print();
</script>