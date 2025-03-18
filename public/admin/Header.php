<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?=$NDVMEDIA->site('favicon');?>">
    <meta property="og:title" content="<?=$NDVMEDIA->site('tenweb');?>" />
    <meta property="og:image" content="<?=$NDVMEDIA->site('anhbia');?>" />
    <meta property="og:description" content="<?=$NDVMEDIA->site('mota');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?=$NDVMEDIA->site('tukhoa');?>" />
    <meta name="description" content="<?=$NDVMEDIA->site('mota');?>" />
    <title><?=$title;?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default/default.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/font.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/font2.css">
  <meta name="theme-color" content="#3063A0"> <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
  
<link rel="stylesheet" href="/themendv/vendors/feather/feather.css">
  <link rel="stylesheet" href="/themendv/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/themendv/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/themendv/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/themendv/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="/themendv/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/themendv/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<?php CheckLogin();?>
<?php CheckAdmin();?>