<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
  <title>Belajar Codeiginter - 3</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Codeigniter 3</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('dashboard')?>">Dashboard </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('dashboard/add')?>">Tambah Data mahasiswa</a>
      </li>
    </ul>
  </div>
</nav>
<h3>Data mahasiswa</h3>	
<br>
<?php $this->load->view('message'); ?>
<table id="example"class="table wy-table-bordered wy-table-responsive table-hover">
  <thead>
    <tr>
      <th>No</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Prodi</th>
      <th>Akreditasi</th>
      <th>umur</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      $no = 1 ; 
      foreach($row as $key => $data ) { ?>
        <td><?php echo $no++ ?> </td>
        <td><?php echo $data->id_mhs ?> </td>
        <td><?php echo $data->nama?> </td>
        <td><?php echo $data->alamat?> </td>
        <td><?php echo $data->jenis_kelamin ?> </td>
        <td><?php echo $data->nama_prodi ?> </td>
        <td><?php echo $data->akreditasi ?> </td>
        <td><?php echo $data->umur ?> </td>
        <td>
          <a href="<?=site_url('dashboard/delete/' . $data->id_mhs)?>" class="btn btn-warning btn-sm ">Delete</a>
          <a href="<?=site_url('dashboard/edit/' . $data->id_mhs)?>" class="btn btn-info btn-sm ">Update</a>
        </td>
    </tr>
  </tbody>
<?php } ?>
</table>
</body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

  </html>

  <script>
    $(document).ready(function() {
          $('#example').DataTable();
      } );
  </script>

