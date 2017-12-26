<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Customer</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-users"></i> Customers</a></li>
	        <li class="active">Semua Customer</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	            <?=$this->session->flashdata('edit')?>
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
                    foreach($customer as $customer) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?=$customer->nama_users?></td>
                            <td><?=$customer->email?></td>
                            <td>
                                 <?=anchor('users/detail/' . $customer->id_users, 'Detail', ['class'=>'btn btn-xs btn-primary'])?>
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