<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Produk</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dropbox"></i> Produk</a></li>
	        <li class="active">Deatil Produk</li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<div class="box box-primary">
					<div class="box-header with-border">
	              		<h3 class="box-title">Gambar Produk</h3>
	            	</div>
	            		<div class="box-body">
	            			<div >
	            				<?php $image =[ 'src'=> 'uploads/produk/' . $produk->image, 'class' => 'img-responsive'];
                                echo img($image)
                            	?>
	            			</div>
	            		</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="box box-primary">
						<div class="box-header with-border">
	              			<h3 class="box-title">Detail Produk</h3>
	            		</div>
	            		<div class="box-body">
	            			<table class="table table-striped">
	            				<tr>
	            					<td><label>Kategori</label></td>
	            					<td style="width: 1px;"> : </td>
	            					<td><?=$produk->nama_kategori?></td>
	            				</tr>
	            				<tr>
	            					<td><label>Nama Produk</label></td>
	            					<td style="width: 1px;"> : </td>
	            					<td><?=$produk->nama_produk?></td>
	            				</tr>
	            				<tr>
	            					<td><label>Diskon</label></td>
	            					<td style="width: 1px;"> : </td>
	            					<td> <?=$produk->diskon?> %</td>
	            				</tr>	
	            				<tr>
	            					<td><label>Harga</label></td>
	            					<td style='width: 1px;'> : </td>
	            					<td> <?=$produk->harga?></td>
	            				</tr>
	            				<?php
	            					$x = $produk->harga;
	            					$y = $produk->diskon;
	            					$z = 100;
	            					$min = ($x * $y)/$z;
	            					$harga_diskon = $x - $min;
	            				?>
	            				<tr>
	            					<td><label>Harga Diskon</label></td>
	            					<td style="width: 1px;"> : </td>
	            					<?php
	            						if($produk->diskon > 0){
	            					?>
	            					<td> <?=$harga_diskon;?></td>
	            					<?php }else{ ?>
	            					<td> - </td>
	            					<?php } ?>
	            				</tr>
	            				<tr>
	            					<td><label>Deskripsi Produk</label></td>
	            					<td style="width: 1px;"> : </td>
	            					<td> <?=$produk->deskripsi?></td>
	            				</tr>
	            			</table>
	            		</div>
				</div>
			</div>
		</div>
	</section>

</div>
<?php $this->load->view('layoutadmin/down') ?>