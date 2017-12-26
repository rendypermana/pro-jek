<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Promo</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-bullhorn"></i> Promo</a></li>
	        <li class="active">Promosi</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Promosi</h3>
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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               	<?php
                    $no = 1;
                    foreach($promo as $promo) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?=$promo->nama_produk?></td>
                            <td>  
                                 <?=anchor('promo/ubah/' . $promo->id_produk, 'Edit', ['class'=>'btn btn-xs btn-primary'])?>
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