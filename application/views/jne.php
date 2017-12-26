<?php $this->load->view('layout/top') ?>
<br>
<br>
<br>
<?= form_open_multipart('page_produk/get_cost', ['role'=>'form', 'class'=>'contact-form']) ?>
<input type="text" name = "from" />
<input type="text" name = "to" />
<input type="submit" value = "Search" />
<?= form_close() ?>
<?php $this->load->view('layout/bottom')?>