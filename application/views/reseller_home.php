<?php $this->load->view('layoutreseller/top')?>
<div class="container">
    <div class="row">
    	<div class="col-lg-12">
            <h3 class="page-header">Reseller Dashboard</h3>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>/index.php/reseller/home">Home</a></li>
            </ol>
        </div>
        <div class="col-lg-12">
            <div class="reseller-area">
                <div class="welcome-reseller">
                	<?php $user=$this->session->userdata('nama_users');?>
                    <h4>Selamat datang <?php echo $user?></h4>
                    <p>Silahkan untuk mengelola akun anda</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-dropbox"></i>
                </div>
                <div class="text">
                    <var>3</var>
                    <label class="text-muted">Koleksi</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-join"><i class="fa fa-eye"></i> Lihat</a>
                </div>
            </div>
		</div>

		<div class="col-sm-3">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="text">
                    <var>3</var>
                    <label class="text-muted">Orderan Ku</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-join"><i class="fa fa-eye"></i> Lihat</a>
                </div>
            </div>
		</div>

		<div class="col-sm-3">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-thumbs-up"></i>
                </div>
                <div class="text">
                    <var>3</var>
                    <label class="text-muted">Tip & Trik Berjualan</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-join"><i class="fa fa-eye"></i> Lihat</a>
                </div>
            </div>
		</div>

		<div class="col-sm-3">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-child"></i>
                </div>
                <div class="text">
                    <var>3</var>
                    <label class="text-muted">Poin Kamu</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-join"><i class="fa fa-eye"></i> Poin</a>
                </div>
            </div>
		</div>




    </div>	


        
<?php $this->load->view('layoutreseller/bottom')?>