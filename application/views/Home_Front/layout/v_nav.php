<!--================ Header Menu Area start =================-->

<div class="main_menu">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container box_1620">
      <a class="navbar-brand" href="index.html"><?= $title ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
        <ul class="nav navbar-nav menu_nav justify-content-end">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('home/menu_tampil') ?>">Menu</a>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a>
        </ul>
      </div>
    </div>
  </nav>
</div>

</header>
<!--================Header Menu Area =================-->