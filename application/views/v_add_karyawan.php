<html>
<!--author: www.syamadav.com-->
<head>
<title>www.syamadav.com|Tambah Data Karyawan</title>
      <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
      <link href="<?php echo base_url().'assets/css/w3.css'?>" rel="stylesheet">
      <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>
<center><h2>Tambah Data Karyawan</h2></center>
<form role="form" action="<?= $this->config->base_url(); ?>karyawan/prosesadd" method="post" enctype="multipart/form-data"> 

<div class="container">
  
  <form action="/action_page.php">
    <div class="form-group">
      <label for="text">Id:</label>
      <input type="text" class="form-control" id="id" placeholder="Enter Id" name="id">
    </div>
    <div class="form-group">
      <label for="text">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="text">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>


</form>
</body>
</html>