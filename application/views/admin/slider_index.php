<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Slider</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-picture-o"></i> Slider</a></li>
	        <li class="active">Semua Slider</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive slide-index">
	            <?=$this->session->flashdata('add')?>
	            <?=$this->session->flashdata('edit')?>
	            <?=$this->session->flashdata('delete')?>
              <table id="data-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 40px;">No</th>
                  <th>Gambar</th>
                </tr>
                </thead>
                <tbody>
               	<?php
                    $no = 1;
                    foreach($slider as $slider) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php $image =[ 'src'=> 'uploads/slide/' . $slider->gambar, 'style' => 'width:100px'];
                                echo img($image)
                              ?></td>
                            <td>  
                                 <?=anchor('slider/ubah/' . $slider->id_slider, 'Edit', ['class'=>'btn btn-xs btn-primary'])?>
                                 <?=anchor('slider/hapus/' . $slider->id_slider, 'Hapus', ['class'=>'btn btn-xs btn-danger', 'onclick'=>'return confirm(\'Apakah Anda yakin menghapus data ini?\')'])?>
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