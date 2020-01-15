 <!--================Hero Banner Section start =================-->
 <section class="hero-banner">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h2 class="hero-title">Masakan <br> yang bikin Anda ketagihan</h2>
        <div class="d-sm-flex flex-wrap">
          <btn class="button button-hero btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Pesan Sekarang</btn>
                
        </div>
        
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="<?= base_url() ?>template/front-end/img/banner/hero-banner1.png" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="<?= base_url() ?>template/front-end/img/banner/hero-banner2.png" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="<?= base_url() ?>template/front-end/img/banner/hero-banner1.png" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="<?= base_url() ?>template/front-end/img/banner/hero-banner2.png" alt="">
          </div>
        </div>
      </div>
      <ul class="social-icons d-none d-lg-block">
        <li><a href="#"><i class="ti-facebook"></i></a></li>
        <li><a href="#"><i class="ti-twitter"></i></a></li>
        <li><a href="#"><i class="ti-instagram"></i></a></li>
      </ul>
    </div>
  </section>
  <!--================Hero Banner Section end =================-->

   <!--================Food menu section start =================-->  
   <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-120px">
        <h4 class="intro-title">Menu Kami</h4>
        <h2>Sajikan Santapan Bintang 5</h2>
      </div>
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Menu</th>
                        <th>Harga(Rp)</th>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($menu as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->kategori_idkategori++ ?></td>
                        <td><?= $value->nama_menu++ ?></td>
                        <td><?= $value->harga_menu++ ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
  </section>
  <!--================Food menu section end =================-->  

  
<!-- Modal Add-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                <?php echo form_open('home/add'); ?>
                <div class="form-group">
                    <label>Menu</label>
                    <input class="form-control" name="menu" placeholder="Masukkan Menu">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input class="form-control" name="jumlah" placeholder="Masukkan Jumlah">
                </div>
                <div class="form-group">
                    <label>Nama Pemesan</label>
                    <input class="form-control" name="nama_pemesan" placeholder="Masukkan Nama Pemesan">
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
