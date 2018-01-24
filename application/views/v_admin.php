<html>
<head>
    <title>Membuat login dengan codeigniter</title>
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
   
</head>
<body>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
<style>
.w3-lobster {
    font-family: "Lobster", Sans-serif;
}
</style>
<body>

<div class="w3-container w3-lobster font-effect-brick-sign">
  <center><p class="w3-xxxlarge"> Hello, <?php echo $this->session->userdata("nama"); ?> Selamat Datang!!</p></center>
</div>
</body>
<body>
   <button type="button" class="btn btn-secondary"> <a href="<?php echo base_url('login/logout'); ?>">Logout</a></button>
   <button type="button" class="btn btn-warning"> <a href="Data">Lihat Data</a></button>
</body>

</html>

