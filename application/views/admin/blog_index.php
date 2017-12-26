<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Blog</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-file-text"></i> Blog</a></li>
	        <li class="active">Semua Artikel</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Atrikel</h3>
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
                  <th>Judul</th>
                  <th>Tanggal Posting</th>
                  <th>Author</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               	<?php
                    $no = 1;
                    foreach($blog as $blog) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?=$blog->judul?></td>
                            <td><?=$blog->tgl_post?></td>
                            <td><?=$blog->nama_users?></td>
                            <td>
                                 <?=anchor('blog/ubah/' . $blog->id_blog, 'Edit', ['class'=>'btn btn-xs btn-primary'])?>
                                 <?=anchor('blog/hapus/' . $blog->id_blog, 'Hapus', ['class'=>'btn btn-xs btn-danger', 'onclick'=>'return confirm(\'Apakah Anda yakin menghapus data ini?\')'])?>
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