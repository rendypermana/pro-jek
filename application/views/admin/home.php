<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Dashboard<small>Kontrol Panel</small></h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dashboard</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">

      	<div class="col-xs-12">
      		<?=$this->session->flashdata('edit')?>
	      	<div class="callout callout-info">
	      		<?php $user=$this->session->userdata('nama_users');?>
	            <h4>Selamat Datang <?php echo $user?></h4>
	            <p>Silahkan untuk menglola konten web anda</p>
	        </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-tags"></i></span>
                <div class="info-box-content">
                	
                  <span class="info-box-text">Kategori</span>
                  <span class="info-box-number"></span>
                </div>
             </div>
      	</div>

      	<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-dropbox"></i></span>
                <div class="info-box-content">
                
                  <span class="info-box-text">Produk</span>
                  <span class="info-box-number"></span>
                </div>
             </div>
      	</div>

      	<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-file-image-o"></i></span>
                <div class="info-box-content">
                	
                  <span class="info-box-text">Gallery</span>
                  <span class="info-box-number"></span>
                </div>
             </div>
      	</div>

      	<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-envelope"></i></span>
                <div class="info-box-content">
                	
                  <span class="info-box-text">Pesan</span>
                  <span class="info-box-number"></span>
                </div>
             </div>
      	</div>
      </div>
    </section>
</div>
<?php $this->load->view('layoutadmin/down') ?>