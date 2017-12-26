<?php $this->load->view('layoutadmin/top') ?>
<div class="content-wrapper">
	<section class="content-header">
	    <h1>Pesan</h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-envelope"></i> Pesan</a></li>
	        <li class="active">Detail Pesan</li>
	    </ol>
	</section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Pesan</h3>
            </div>
            <div class="box-body ">
              <table class="table table-striped">
                <tr>
                  <td style="width: 50px"><label>Nama</label></td>
                  <td style="width: 1px;"> : </td>
                  <td><?=$pesans->name?></td>
                </tr>
                <tr>
                  <td style="width: 50px"><label>email</label></td>
                  <td style="width: 1px;"> : </td>
                  <td><?=$pesans->email?></td>
                </tr>
                <tr>
                  <td style="width: 50px"><label>Subjek</label></td>
                  <td style="width: 1px;"> : </td>
                  <td><?=$pesans->subject?></td>
                </tr>
                <tr>
                  <td style="width: 50px"><label>Isi Pesan</label></td>
                  <td style="width: 1px;"> : </td>
                  <td><?=$pesans->isi_pesan?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php $this->load->view('layoutadmin/down') ?>