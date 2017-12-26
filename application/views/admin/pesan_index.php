<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Pesan</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-envelope"></i> Pesan</a></li>
	        <li class="active">Semua Pesan</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Pesan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <?=$this->session->flashdata('delete')?>
              <table id="data-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 40px;">No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($pesans as $pesan) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td>
                            	<?=$pesan->name?>
                            </td>
                            <td><?=$pesan->email?></td>
                            <td>
                              <?=anchor('pesan/lihat/' . $pesan->id_pesan, 'Lihat', ['class'=>'btn btn-xs btn-info'])?>
                              <?=anchor('pesan/hapus/' . $pesan->id_pesan, 'Hapus', ['class'=>'btn btn-xs btn-danger', 'onclick'=>'return confirm(\'Apakah Anda yakin menghapus data ini?\')'])?>
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