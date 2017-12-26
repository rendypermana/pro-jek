<?php $this->load->view('layout/top')?>
<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    <?=$ket->nama_kategori?>
                </h2>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="area-kategori">
                    	<?php foreach ($produk as $produk): ?>
                    	<?php $url = $produk->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
                        <div class="col-sm-4 col-lg-4 col-md-4 wow bounceInLeft">
                            <div class="thumbnail">
                                <div class="product-categori">
                                    <div class="product-kategori">
                                        <?php $image =[ 'src'=> 'uploads/produk/' . $produk->image]; echo img($image)?>
                                    </div>
                                    <div class="product-view">
                                        <ul class="nav nav-pills">
                                        <li><?=anchor('page_produk/detail/'.$produk->id_produk .'/'.$title, 'Beli')?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4 class="pull-right"><?=$produk->harga?></h4>
                                    <h4><a href="<?php echo base_url() ?>/index.php/page_produk/detail/<?=$produk->id_produk?>/<?=$title?>"><?=$produk->nama_produk?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    	<?php endforeach; ?>
                        
                    </div>
                    <div class="row text-center load-area">
                    	<div class="col-lg-12">
                        	<button class="btn btn-join ">Lebih Banyak</button>
                        </div>
                    </div>
                
                </div>
            </div>

            <div class="col-md-3">
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Top Koleksi</h3>
                        <?php foreach ($top as $top): ?>
                        <?php $url = $top->nama_produk; $nama = strtolower($url); $title = url_title($nama);?>
                        
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                <?php $image =[ 'src'=> 'uploads/produk/' . $top->image]; echo img($image)?>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4><a href="<?php echo base_url() ?>index.php/page_produk/detail/<?=$top->id_produk?>/<?=$title?>"><?=$top->nama_produk?></a></h4>
                            </div>
                        </div>

                    	<?php endforeach;?>
                        
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Kategori</h3>
                        <ul class="nav navbar-stacked">
                        	<?php foreach($kategori as $kategori): ?>
                        	<?php $url = $kategori->nama_kategori; $nama = strtolower($url); $title = url_title($nama);?>
                            <li><?php echo anchor('page_produk/koleksi/'.$kategori->id_kategori.'/'.$title, $kategori->nama_kategori);?></li>
                        	<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Sosial Media</h3>
                        <ul class="sosial-media">
                            <li><a href="https://www.facebook.com/Dewim-fashion-1660169040896663/" target="_blank"><img src="<?php echo base_url() ?>resource/images/Facebook.png" class="img-hover"></a></li>
                            <li><a href="http://instagram.com/dewimfashion" target="_blank"><img src="<?php echo base_url() ?>resource/images/Instagram.png" class="img-hover"></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

<?php $this->load->view('layout/bottom')?>