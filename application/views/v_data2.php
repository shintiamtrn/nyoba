<!DOCTYPE html>

<html lang="id">

<head>

      <meta charset="utf-8">

      <title>Data Karyawan</title>

      <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
      <link href="<?php echo base_url().'assets/css/w3.css'?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>

 

<div class="container">

      <h1>Data <small>Karyawan </small></h1>

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>ID</td>

                        <td>Nama Lengkap</td>

                        <td>Alamat</td>

                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $id=$i['id'];

                              $nama=$i['nama'];

                              $alamat=$i['alamat'];

                 ?>

                  <tr>

                        <td><?php echo $id;?> </td>

                        <td><?php echo $nama;?> </td>

                        <td><?php echo $alamat;?> </td>
                        <td style="width: 120px;">
                        <`td>
                        <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                        <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>         
                  </td>

                  </td>


                  </tr>

                  <?php endforeach;?>

            </tbody>

            <a href="login"><button class="btn-primary">Log Out</button></a>
            
      </table>

     

</div>
<br>
 

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>

<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>

</body>

</html>