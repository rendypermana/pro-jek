
<?php $this->load->view('layout/top') ?>

<!-- slider-section-start -->
        <section class="slider-main-area">
            <div class="main-slider an-si">
                <div class="bend niceties preview-2 hm-ver-1">
                    <div id="ensign-nivoslider-2" class="slides">  
                         <?php foreach($slider as $slider): ?>
                        <!-- <img src="<?php echo base_url() ?>public/img/slider/1.png" alt="" title="#slider-direction-3"  /> -->
                       <?php $image =[ 'src'=> 'uploads/slide/' . $slider->gambar,  'alt'=>'tes'];
                                echo img($image)
                            ?>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- <div id="slider-direction-1" class="t-cn slider-direction Builder">
                        <div class="slide-all slide2">
                            
                            <div class="layer-1">
                                <h2 class="title5">new collection 2</h2>
                            </div>
                           
                            <div class="layer-2">
                                <h2 class="title6">Women’s Fashion</h2>
                            </div>
                           
                            <div class="layer-2">
                                <p class="title0">Save Up To 40% Off</p>
                            </div>
                            
                            <div class="layer-3">
                                <a class="min1" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- slider section end -->
        <!-- new-products section start -->
        <section class="featured-products single-products section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">
                            <h3>PRODUK</h3>
                            <div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row tab-content">
                    <div class="tab-pane  fade in active" id="all">
                        <div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
                            <?php foreach($produk as $produk): ?>
                            <?php $url = $produk->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                          
                                            <?php $image =[ 'src'=> 'uploads/produk/' . $produk->image,  'alt'=>'<?=$produk->nama_produk?>'];
                                            echo img($image)
                                            ?>
                                            <?php $image =[ 'src'=> 'uploads/produk/' . $produk->image,  'alt'=>'<?=$produk->nama_produk?>', 'class'=>'secondary-image'];
                                            echo img($image)
                                            ?>
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="<?php echo base_url() ?>index.php/page_produk/detail/<?=$produk->id_produk?>/<?=$title?>"><?=$produk->nama_produk?></a></h3>
                                        <div class="star-price">
                                            <span class="price-left">Rp <?=$produk->harga?></span>
                                        </div>
                                    </div>
                                    <div class="actions-btn">
                                        <a data-toggle="modal" data-target="#quick-view"  onclick="javascript:load_marks(<?=$produk->id_produk; ?>)"><i class="fa fa-eye"></i></a>
                                        <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- new-products section end -->
        <!-- testimonials section start -->
        <?php foreach($proktif as $proktif):?>
        <?php if($proktif->status){?>
        <section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="re-testimonials re-testimonials2">
                <div class="container">
                    <div class="row">
                        <div class="re-testimonials-all re-owl-carousel2">
                            <div class="re-testimonials-all-slider">
                                <?php foreach($promo as $promo): ?>
                                <?php $url = $promo->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="sale-curosel1">
                                        <div class="product-img">
                                           <div class="pro-type">
                                                <span>sale</span>
                                            </div>
                                            <a href="#">
                                                <?php $image =[ 'src'=> 'uploads/produk/' . $promo->image,  'alt'=>'<?=$promo->nama_produk?>'];
                                                    echo img($image)
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="product-content">
                                        <div class="re-text">
                                            <h5><a href="#"><?=$promo->nama_produk?></a></h5>
                                        </div>
                                        <div class="pro-rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </div>
                                        <p><?=$promo->deskripsi ?></p>
                                        <?php
                                            $x = $promo->harga;
                                            $y = $promo->diskon;
                                            $z = 100;
                                            $min = ($x * $y)/$z;
                                            $harga_diskon = $x - $min;
                                        ?>
                                        <?php  if($produk->diskon > 0){ ?>
                                        <span class="old-price">Rp <?=$produk->harga?></span>
                                        <?php }else{?> 
                                        <span class="old-price">Rp <?=$produk->harga?></span>
                                        <span class="pro-price">Rp <?=$harga_diskon?></span>
                                        <?php } ?>                                
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <?php endforeach;?>

       <!-- testimonials section end -->
      
        <!-- blog section start -->
        <section class="blog section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">
                            <h3>from the blog</h3>
                            <div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="blog" class="owl-carousel product-slider owl-theme re-blog">
                        <?php foreach($blog as $blog): ?>
                        <?php $url = $blog->judul; $nama = strtolower($url); $title = url_title($nama);?>
                        <div class="col-xs-12">
                            <div class="blog-container-inner">
                                <div class="post-thumb">
                                    <a href="#">
                                        <?php $image =[ 'src'=> 'uploads/blog/' . $blog->gambar, 'class' => 'attachment-blog-list wp-post-image', 'alt'=>'<?=$blog->judul?>'];
                                        echo img($image)
                                         ?>
                                    </a>
                                </div>
                                <div class="visual-inner">
                                    <h2 class="blog-title">
                                        <a href="<?php echo base_url() ?>index.php/page_blog/detail/<?=$blog->id_blog?>/<?=$title?>"> <?=$blog->judul?></a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span class="post-category">
                                            in
                                            <a rel="category" href="#">Fashion</a>
                                        </span>
                                        <span class="published">
                                            <i class="fa fa-clock-o"></i>
                                            Oct 31, 2014
                                        </span>
                                        <span class="published2">0 comment</span>
                                    </div>
                                    <div class="blog-content"><?php $str = $blog->konten; $string = character_limiter($str, 155); echo"$string";?> 
                                        <?=anchor('page_blog/detail/'.$blog->id_blog .'/'.$title, '[baca]', ['class'=>'read-more'])?> ... </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <!-- single blog item end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->

       
               
<?php $this->load->view('layout/bottom') ?>