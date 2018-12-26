<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Front-End Toko Online by Kursus-PHP.com</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Product</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['nama_produk'] ?></td>
				</tr>
				<?php endforeach; ?>
			
		</table>
		<div align="center">
			<?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?> 
			<?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
			<?= anchor('order','Check Out',['class'=>'btn btn-success']) ?>
		</div>
	</body>
</html>