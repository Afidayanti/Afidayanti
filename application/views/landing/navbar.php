<nav class="navbar navbar-expand-lg"> 
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('assets/img/Group 80.png') ?>"  class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item dropdown active">
          <a class="nav-link two" role="button" data-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('visimisi');?>">Visi Misi</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('organisasi');?>">Struktur Organisasi</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('bisnis');?>">Unit Bisnis</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('kerjasama');?>">
              Kerjasama
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link two" href="<?php echo site_url('berita');?>">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link two" href="<?php echo site_url('produk');?>">Kerjasama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link two" href="<?php echo site_url('galeri');?>">Galeri</a>
        </li> 
        <li>
          <form action="">
            <input type="search" required>
            <i><iconify-icon icon="ant-design:search-outlined" width="24" height="24"></iconify-icon></i>
          </form>
        </li>
      </ul>
       
    </div>
  </nav>