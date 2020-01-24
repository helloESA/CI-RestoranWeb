<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control disabled" value="<?= $this->session->userdata('nama_lengkap'); ?>" disabled>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" value="<?= $this->session->userdata('username'); ?>" disabled>
            </div>
            <div class="form-group">
                <label>Level</label>
                <input class="form-control" value="<?= $this->session->userdata('level'); ?>" disabled>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" value="<?= $this->session->userdata('alamat'); ?>" disabled>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input class="form-control" value="<?= $this->session->userdata('no_telepon'); ?>" disabled>
            </div>
        </div>
    </div>
</div>