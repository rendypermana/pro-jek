<?php $this->load->view('layoutreseller/top')?>
<div class="container">
	<div class="row">
    	<div class="col-lg-12">
    		<h3 class="page-header">Koleksi</h3>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>/index.php/reseller/home">Home</a></li>
                <li>Koleksi</li>
            </ol>
    	</div>
    	<?php foreach ($produk as $produk):?>
    	<div class="col-md-3">
    	    <div class="reseller-koleksi">
    	    	<?php $image =[ 'src'=> 'uploads/produk/' . $produk->image]; echo img($image)?>
    	    </div>
		<?php endforeach;?>
    </div>
<?php $this->load->view('layoutreseller/bottom')?>