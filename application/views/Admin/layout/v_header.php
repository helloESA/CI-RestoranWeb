<body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">   <?= $title?></a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="<?= base_url('home') ?>"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('nama_lengkap');
                            ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                            <li><a href="<?= base_url('info_akun')?>"><i class="fa fa-user fa-fw"></i> Info Akun</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->