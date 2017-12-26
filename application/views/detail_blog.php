<?php $this->load->view('layout/top')?>
 <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    <?=$blog->judul?>
                </h2>
            </div>
            <div class="col-md-9">
                <div class="detail-post">
                    <!-- Blog Post -->
                    <p><i class="fa fa-clock-o"></i> Diterbitkan <?=$blog->tgl_post?></p>
                    <?php $image =[ 'src'=> 'uploads/blog/' . $blog->gambar, 'class' => 'img-responsive'];
                     echo img($image)
                    ?>
                    <hr>
                    <!-- Post Content -->
                    <p><?=$blog->konten?></p>

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