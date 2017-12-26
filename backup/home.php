<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo base_url() ?>resource/images/slide-3.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url() ?>resource/images/slide-2.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url() ?>resource/images/slide-1.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Koleksi 
                </h2>
            </div>
            <?php foreach($produk as $produk): ?>
            <?php $url = $produk->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
            <div class="col-sm-4 col-lg-4 col-md-4 wow bounceInLeft" >
                <div class="thumbnail">
                    <div class="product-single">
                        <div class="product-thumb">
                            <?php $image =[ 'src'=> 'uploads/produk/' . $produk->image, 'class' => 'img-responsive', 'alt'=>'<?=$produk->nama_produk?>'];
                                echo img($image)
                            ?>
                        </div>
                        <div class="product-view">
                            <ul class="nav nav-pills">
                            <li><?=anchor('page_produk/detail/'.$produk->id_produk .'/'.$title, 'Beli')?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="caption">
                        <h4 class="pull-right">Rp <?=$produk->harga?></h4>
                        <h4><a href="<?php echo base_url() ?>index.php/page_produk/detail/<?=$produk->id_produk?>/<?=$title?>"><?=$produk->nama_produk?></a>
                        </h4>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            
            <div class="row text-center">
                <div class="col-lg-12">
                    <?php echo $this->pagination->create_links() ?>
                </div>
            </div>

        </div>

        <!-- /.row -->

        <!-- Call to Action Section -->
        <div class="well wow slideInLeft">
            <div class="row">
                <div class="col-md-8">
                    <h4>Join Jadi Reseller</h4>
                </div>
                <div class="col-md-4">
                    <!-- <a class="btn btn-lg btn-block btn-join" href="">Join!</a> -->
                    <?php echo anchor('page_reseller','Join!', ['class'=>'btn btn-lg btn-block btn-join']);?>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container">
            <!-- Blog Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Blog
                </h2>
            </div>
            <?php foreach($blog as $blog): ?>
                <?php $url = $blog->judul; $nama = strtolower($url); $title = url_title($nama);?>
            <div class="col-md-4 img-portfolio wow fadeInDown">
                <a>
                <?php $image =[ 'src'=> 'uploads/blog/' . $blog->gambar, 'class' => 'img-responsive img-hover img-bloghome', 'alt'=>'<?=$blog->judul?>'];
                                echo img($image)
                            ?>
                </a>
                <h3>
                    <a class="blog-tittle" href="<?php echo base_url() ?>index.php/page_blog/detail/<?=$blog->id_blog?>/<?=$title?>"><?=$blog->judul?></a>
                </h3>
                <p>
                    <?php $str = $blog->konten; $string = character_limiter($str, 155); echo"$string";?> 
                    <?=anchor('page_blog/detail/'.$blog->id_blog .'/'.$title, '[baca]', ['class'=>'read-more'])?>
                </p>
            </div>
        <?php endforeach;?>
        </div>
        <!-- /.row -->
        </div>