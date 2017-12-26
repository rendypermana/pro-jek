<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Kategori</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-tags"></i> Kategori</a></li>
	        <li class="active">Semua Kategori</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	            <?=$this->session->flashdata('add')?>
	            <?=$this->session->flashdata('edit')?>
	            <?=$this->session->flashdata('delete')?>
              <table id="data-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 40px;">No</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               	<?php
                    $no = 1;
                    foreach($kategoris as $kategori) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?=$kategori->nama_kategori?></td>
                            <td>
                                 <?=anchor('kategori/ubah/' . $kategori->id_kategori, 'Edit', ['class'=>'btn btn-xs btn-primary'])?>
                                 <?=anchor('kategori/hapus/' . $kategori->id_kategori, 'Hapus', ['class'=>'btn btn-xs btn-danger', 'onclick'=>'return confirm(\'Apakah Anda yakin menghapus data ini?\')'])?>
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