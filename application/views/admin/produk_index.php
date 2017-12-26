<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Produk</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dropbox"></i> Produk</a></li>
	        <li class="active">Semua Produk</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
	            <?=$this->session->flashdata('add')?>
	            <?=$this->session->flashdata('edit')?>
	            <?=$this->session->flashdata('delete')?>
              <table id="data-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 40px;">No</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               	<?php
                    $no = 1;
                    foreach($produk as $produk) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?=$produk->nama_produk?></td>
                            <td><?=$produk->nama_kategori?></td>
                            <td><?=$produk->harga?></td>
                            <td>  
                                 <?=anchor('produk/detail/' . $produk->id_produk, 'detail', ['class'=>'btn btn-xs btn-info'])?>
                                 <?=anchor('produk/ubah/' . $produk->id_produk, 'Edit', ['class'=>'btn btn-xs btn-primary'])?>
                                 <?=anchor('produk/hapus/' . $produk->id_produk, 'Hapus', ['class'=>'btn btn-xs btn-danger', 'onclick'=>'return confirm(\'Apakah Anda yakin menghapus data ini?\')'])?>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php $this->load->view('layoutadmin/down') ?>