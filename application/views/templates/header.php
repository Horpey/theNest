<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>The Nest</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/img/nest-black.png'); ?>">
    <!-- <link rel="apple-touch-icon" href="images/favicon_60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon_76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon_120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon_152x152.png"> -->

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>



    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-custom.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animations.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.transitions.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/colorbox.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/colors/red.css'); ?>" id="colors" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body class="sticky-nav">

    <!-- Loader -->
    <div id="page-loader" class="loader-white"></div>

    <!-- Header -->
    <header id="header" class="<?php if($this->uri->segment(1)==""){echo "header header-white transparent wide dark clearfix";}else{echo "header header-black wide dark clearfix";}?>">

        <div class="row">
            <div class="col-xs-12">
                <div class="nav-bar clearfix">
                    <!-- Logo -->
                    <div class="logo pull-left">
                        <a href="<?php echo base_url()?>">
                             <img class="my-logo" src="<?php echo base_url('assets/images/img/nest-new.svg'); ?>" alt="Nest" />
                         </a>
                    </div>
                    <!-- Mobile Nav Toggle -->
                    <a href="#" class="mobile-menu-toggle pull-right"></a>
                    <!-- Social Icons -->
                    <!-- <div class="social-icons text-muted pull-right margin-left-20 hidden-sm hidden-xs">
                        <a href="#" class="icon icon-xs icon-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="icon icon-xs icon-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="icon icon-xs icon-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div> -->
                    <!-- Main Navigation-->
                    <ul class="menu nav nav-main text-uppercase pull-right margin-left-20 dropdown-dark">
                        <li class="<?php if($this->uri->segment(1)==""){echo "active";}?>">
                            <a href="<?php echo base_url()?>">Home</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="about"){echo "active";}?>">
                            <a href="<?php echo base_url('about')?>">About</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="training"){echo "active";}?>">
                            <a href="<?php echo base_url('training')?>">Training</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="cowork"){echo "active";}?>">
                            <a href="<?php echo base_url('cowork')?>">Co-Work Space</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="incubation"){echo "active";}?>">
                            <a href="<?php echo base_url('incubation')?>">Incubation</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="lounge"){echo "active";}?>">
                            <a href="<?php echo base_url('lounge')?>">Lounge</a>
                        </li>
                        <li>
                           <a href="https://web.whatsapp.com/send?phone=2348188664398" target="_blank" class="phone-call">
                                <span class="fa fa-whatsapp"></span>+234 8113852536</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="signup"){echo "active";}?>">
                            <a href="<?php echo base_url('signup')?>">
                                    <i class="icon-before fa fa-plus text-primary"></i>Create Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu text-uppercase"></div>

    </header>
    <!-- Header / End -->