<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dewim Fashion Grosir Pakaian Murah</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Custom CSS -->
    <link href="<?php echo base_url() ?>resource/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>resource/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>resource/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Animate -->
    <link href="<?php echo base_url() ?>resource/css/animate.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>resource/images/icon.png">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>resource/images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><?=anchor('reseller/home', 'Home');?></li>
                    <li><?=anchor('reseller/koleksi','Koleksi');?></li>
                    <li><a>Orderan Ku</a></li>
                    <li><a>Tip & Trik</a></li>
                    <li><a>Poin</a></li>
                    <li><?=anchor('reseller/logout', 'Logout')?></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>