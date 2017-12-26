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

    <link rel="stylesheet" media="screen" href="js/jqueryui/css/ui-lightness/jquery-ui-1.8.13.custom.css">

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
                    <li><a href="<?php echo base_url() ?>">Beranda</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Koleksi <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php $query = $this->db->get('d_kategori');
                                foreach ($query->result() as $row)
                                {
                                    $url = $row->nama_kategori;
                                    $nama = strtolower($url);
                                    $title = url_title($nama);
                                    echo"<li>";
                                    echo anchor('page_produk/koleksi/'.$row->id_kategori .'/'.$title , $row->nama_kategori);
                                    echo"</li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <li><?=anchor('page_blog', 'Blog')?></li>
                    <li><?=anchor('page_kontak', 'Kontak')?></li>
                    <li><?=anchor('page_reseller', 'Reseller')?></li>
                    <li>
                        <?php
                        $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                        $text_cart_url .= ' Inside Cart: '. $this->cart->total_items() .' items';
                        ?>
                        <?=anchor('page_produk/cart', $text_cart_url)?>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="container searchbardiv" id="formsearch">
                <div class="container">
                    <?php 
                    $frm_cari = array('name' => 'frm_cari', 'role' => 'search'); 
                    echo form_open('page_produk/cari', $frm_cari);
                    ?>
                        <div class="input-group">
                            <input type="text" id="searchbox" class="form-control" name="search" id="s" placeholder="cari produk">
                            <div class="input-group-btn">
                                <button class="btn btn-default"  id="searchsubmit"  type="submit">
                                    <strong><span><i class="fa fa-search"></i></span></strong>
                                </button>          
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <button type="button" class="buttonsearch" id="buttonsearch">
            <i class="glyphicon glyphicon-search openclosesearch"></i><i class="glyphicon glyphicon-remove openclosesearch" style="display:none"></i>
        </button>
    </nav>