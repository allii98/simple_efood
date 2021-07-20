<!-- <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= base_url().'assets/bootstrap/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets/fontawesome/all.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets/style/style.css'?>">
  <title><?= $judul;?></title>
</head> -->
<link rel="icon" href="<?= base_url().'assets/img/icon_18394.png';?>" type="image/gif"> 


        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
           <!--  <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
                
            </div> -->
            </form>
            <ul class="navbar-nav navbar-right">            
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?= base_url().'assets/ass/img/avatar/avatar-1.png';?>" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata('username') ?></div></a>

                <div class="dropdown-menu dropdown-menu-right">        
                <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>                
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="<?= base_url().'login/logout';?>" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt" ></i> Logout
                </a>
                </div>
            </li>
        </ul>
    </nav>