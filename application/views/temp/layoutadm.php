<!DOCTYPE html>
<html lang="en">

<?php
    if ($this->session->userdata('username')=='') {
        redirect('login');
    }
?>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $pageTitle; ?> &mdash; SiBorang</title>


<link rel="icon" href="<?= base_url().'assets/img/icon_18394.png';?>" type="image/gif">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/ass/modules/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ass/modules/fontawesome/css/all.min.css'); ?>">

    <!-- CSS Libraries -->    

    <!-- temp CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/ass/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/ass/css/components.css'); ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <?php $this->load->view('temp/header'); ?>

        <div class="main-sidebar sidebar-style-2">
            <?php $this->load->view('temp/sidebaradm'); ?>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?php echo $pageContent; ?>
        </div>
        
        <?php $this->load->view('temp/footer'); ?>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo base_url('assets/ass/modules/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/modules/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/modules/tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/modules/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/js/stisla.js'); ?>"></script>
    
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->    
    
    <!-- temp JS File -->
    <script src="<?php echo base_url('assets/ass/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/ass/js/custom.js'); ?>"></script>
</body>
</html>
