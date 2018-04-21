	<!-- NAVBAR -->
	
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MatchMe</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Kuis <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="kuis_lihat.php">Lihat Kuis</a></li>
            <li><a href="kuis_tambah.php">Tambah Kuis</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Jurusan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="jurusan_lihat.php">Lihat Jurusan</a></li>
            <li><a href="jurusan_tambah.php">Tambah Jurusan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Tipe Kepribadian <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tipe_kepribadian_lihat.php">Lihat Tipe Kepribadian</a></li>
            <li><a href="tipe_kepribadian_tambah.php">Tambah Tipe Kepribadian</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><?php echo $_SESSION['username']; ?></b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin_tambah.php">Tambah Admin</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!-- NAVBAR -->