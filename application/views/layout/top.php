<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eufloria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>public/img/logo.png">
        <!-- google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/animate.css">
        <!-- pe-icon-7-stroke -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pe-icon-7-stroke.min.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/jquery-ui.min.css">
        <!-- Image Zoom CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/img-zoom/jquery.simpleLens.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/meanmenu.min.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?php echo base_url() ?>public/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-4">
                            <div class="left-header clearfix">
                                <ul>
                                <?php $query = $this->db->where('id_setting', 1)->limit(1)->get('d_setting');;
                                foreach ($query->result() as $row)
                                    {
                                        echo"<li>";
                                        echo"<p><i class='fa fa-phone' aria-hidden='true'></i>$row->value</p>";
                                        echo"</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <div class="right-header">
                                <ul>
                                    <li><a href="my-account.html"><i class="fa fa-user"></i>My account</a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>My cart</a></li>
                                    <li><a href="login.html"><i class="fa fa-lock"></i>Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-one" id="sticky-menu">
                <div class="container relative">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-xs-4">
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo base_url() ?>public/img/logo-first.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-10 col-xs-8 static">
                            <div class="all-manu-area">
                                <div class="mainmenu clearfix hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home Version One</a></li>
                                                    <li><a href="index-2.html">Home Version Two</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">Shop</a>
                                                <div class="magamenu ">
                                                    <ul class="again">
                                                        <li class="single-menu colmd4">
                                                            <span>men’s wear</span>
                                                            <a href="#">shirts & top</a>
                                                            <a href="#">shoes</a>
                                                            <a href="#">dresses</a>
                                                            <a href="#">shwmwear</a>
                                                        </li>
                                                        <li class="single-menu colmd4">
                                                            <span>women’s wear</span>
                                                            <a href="#">shirts & tops</a>
                                                            <a href="#">shoes</a>
                                                            <a href="#">dresses</a>
                                                            <a href="#">shwmwear</a>
                                                        </li>
                                                        <li class="single-menu colmd4">
                                                            <span>accessories</span>
                                                            <a href="#">sunglasses</a>
                                                            <a href="#">leather</a>
                                                            <a href="#">belts</a>
                                                            <a href="#">rings</a>
                                                        </li>
                                                        <li class="single-menu colmd4 colmd5">
                                                            <a href="#">
                                                                <img alt="" src="<?php echo base_url() ?>public/img/maga-banner.png">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="shop.html">Lookbook</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul>
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
                                            <li><a href="about-us.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="index.html">Home</a>
                                                    <ul>
                                                        <li><a href="index.html">Home Version One</a></li>
                                                        <li><a href="index-2.html">Home Version Two</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Shop</a>
                                                    <ul>
                                                        <li><a href="#">all products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="#">shirts & top</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                    <a href="#">shwmwear</a>
                                                                    <a href="#">jeans</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="#">shirts & tops</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                    <a href="#">shwmwear</a>
                                                                    <a href="#">jeans</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="#">sunglasses</a>
                                                                    <a href="#">leather</a>
                                                                    <a href="#">belts</a>
                                                                    <a href="#">rings</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">persess</a>
                                                                    <a href="#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">New products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="#">shirts & top</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">jeans</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="#">shirts & tops</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                    <a href="#">shwmwear</a>
                                                                    <a href="#">jeans</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="#">sunglasses</a>
                                                                    <a href="#">leather</a>
                                                                    <a href="#">belts</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">persess</a>
                                                                    <a href="#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">best sell</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="#">shirts & top</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                    <a href="#">shwmwear</a>
                                                                    <a href="#">jeans</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="#">sunglasses</a>
                                                                    <a href="#">leather</a>
                                                                    <a href="#">belts</a>
                                                                    <a href="#">rings</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">persess</a>
                                                                    <a href="#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">features products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="#">shirts & top</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="#">shirts & tops</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="#">sunglasses</a>
                                                                    <a href="#">leather</a>
                                                                    <a href="#">belts</a>
                                                                    <a href="#">rings</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">persess</a>
                                                                    <a href="#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">popular products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="#">shirts & top</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                    <a href="#">jeans</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="#">shirts & tops</a>
                                                                    <a href="#">shoes</a>
                                                                    <a href="#">dresses</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="#">sunglasses</a>
                                                                    <a href="#">leather</a>
                                                                    <a href="#">belts</a>
                                                                    <a href="#">rings</a>
                                                                    <a href="#">sweaters</a>
                                                                    <a href="#">persess</a>
                                                                    <a href="#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Lookbook</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="#">Pages</a>
                                                    <ul>
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
                                                <li><a href="about-us.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- mobile menu end -->
                                <div class="right-header re-right-header">
                                    <ul>
                                        <li class="re-icon tnm"><i class="fa fa-search" aria-hidden="true"></i>
                                            <form method="get" id="searchform" action="#">
                                                <input type="text" value="" name="s" id="ws" placeholder="Search product..." />
                                                <button type="submit"><i class="pe-7s-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header section end -->