<?php $this->load->view('layout/top') ?>
<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Hasil Pencarian
                </h2>
            </div>
            <div class="col-md-9">
            	<div class="pad-search">
	            	<div class="count-search">
				        <?php
							$banyak = count($search_produk->result_array());
							echo "<b>".$banyak."</b> data yang cocok dengan kata '<b><i>".$search."</i></b>'";
						?>
			 		</div>
			 	</div>
                <div class="row">
		            <?php if (count($search_produk->result_array())>0){
  						foreach($search_produk->result() as $row) :
  						$url = $row->nama_produk; $nama = strtolower($url); $title = url_title($nama);
					?>
                	<div class="col-sm-4 col-lg-4 col-md-4 wow bounceInLeft">
                            <div class="thumbnail">
                                <div class="product-categori">
                                    <div class="product-kategori">
                                        <?php $image =[ 'src'=> 'uploads/produk/' . $row->image]; echo img($image)?>
                                    </div>
                                    <div class="product-view">
                                        <ul class="nav nav-pills">
                                        <li><?=anchor('page_produk/detail/'.$row->id_produk .'/'.$title, 'Beli')?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4 class="pull-right"><?=$row->harga?></h4>
                                    <h4><a href="<?php echo base_url() ?>/index.php/page_produk/detail/<?=$row->id_produk?>/<?=$title?>"><?=$row->nama_produk?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    <?php
  						endforeach;
						}else{ 
					?>
					<div class="text-center">
  						Rupanya pencarian data dengan kata <strong><?php echo $search; ?></strong> tidak cocok dengan data manapun,
  						<br>mau kembali ke <a href="<?php echo base_url() ?>"> Beranda?</a>
  					</div>
					<?php
						}
					?>
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
<?php $this->load->view('layout/bottom') ?>