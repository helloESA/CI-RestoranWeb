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
   </div>
   <div class="container">
     <div class="row text-center">
       <?php foreach ($menu as $key => $value) { ?>
         <div class="card ml-3" style="width: 15rem;">
           <img class="card-img-top" src="<?= base_url('gambar_menu/' . $value->gambar_menu) ?>" alt="Card image cap" width="200px" height="200px">
           <div class=" card-body">
             <h5 class="card-title mb-1"><?= $value->nama_menu ?></h5>
             <small>"<?= $value->keterangan_menu ?>"</small><br>
             <span class="badge badge-pill mb-3 badge-dark">Rp. <?= $value->harga_menu ?></span><br>
             <a href="#" class="btn btn-sm btn-primary">Pesan</a>
           </div>
         </div>
       <?php } ?>
     </div>
 </section>
 <!--================Food menu section end =================-->