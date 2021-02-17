<?php include 'header.php' ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  
    <!-- Sidebar -->
     <?php include 'sidebar.php'?>
    <!-- End of Sidebar -->
    
   <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php include 'topbar.php'?>
       
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            

          <!-- DataTales Example -->
          
          <?php
        $page = isset($_GET['page'])?$_GET['page']:'list';
        switch ($page) {
          case 'list':
      ?>
       <p><a href="?p=customer&page=entri" class="btn btn-primary ml-2 pr-2 pl-2">Add Customer <i class="fas fa-save mr-2"></i></a></p>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Data Customer</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Id customer</th>
                     <th>Nama</th>
                     <th>Jekel</th>
                     <th>Ttl</th>
                     <th>Alamat</th>
                     <th>Telp</th>
                     <th>Pekerjaan</th>
                     <th>Keterangan</th>
                     <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                     <th>Id customer</th>
                     <th>Nama</th>
                     <th>Jekel</th>
                     <th>Ttl</th>
                     <th>Alamat</th>
                     <th>Telp</th>
                     <th>Pekerjaan</th>
                     <th>Keterangan</th>
                     <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php
          include('koneksi.php');
          $data = mysqli_query($koneksi,"select * from customer");
          $i =1;
          while ($row=mysqli_fetch_array($data)) {
            ?>
            <tr>
              <td><?php echo $i?></td>
              <td><?php echo $row['nama']?></td>
              <td><?php echo $row['jekel']?></td>
              <td><?php echo $row['ttl']?></td>
              <td><?php echo $row['alamat']?></td>
              <td><?php echo $row['telp']?></td>
              <td><?php echo $row['pekerjaan']?></td>
              <td><?php echo $row['keterangan']?></td>
            
              <td>
                <a href="proses_customer.php?aksi=hapus&idcustomer=<?php echo $row['idcustomer']?>" class="btn btn-danger pr-2 pl-2" onclick="return confirm('Are You Sure to Delete?')"><i class="fas fa-trash mr-2"></i></a>
                <a href="?p=customer&page=update&idcustomer=<?php echo $row['idcustomer']?>" class="btn btn-success ml-2 pr-2 pl-2"><i class="far fa-edit mr-2"></i></a>
              </td>
            </tr>
            <?php $i++;}?>  
                  </tbody>
              
                  </table>
                <?php
          break;
          case 'entri':
        ?>
        <h2>Input Customer</h2>
        <form class="form-group mt-5" method="post" action="proses_customer.php?aksi=tambah">
      
      <div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
			</div>
			
			 <div class="form-group">
			<label>Gender</label>
   
   		<br>
	  	<input type="radio" name="jekel" value="L" checked>Laki-laki
	  	<input type="radio" name="jekel" value="P">Perempuan
    	
			</div>

      <div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" class="form-control"  name="ttl" placeholder="Masukkan Tanggal Lahir">
			</div>

      <div class="form-group">
			<label>Alamat</label>
			<input type="text" class="form-control"  name="alamat" placeholder="Masukkan Alamat">
			</div>

      <div class="form-group">
			<label>Telepon</label>
			<input type="text" class="form-control"  name="telp" placeholder="Masukkan Telepon">
			</div>

      <div class="form-group">
			<label>Pekerjaan</label>
			<input type="text" class="form-control"  name="pekerjaan" placeholder="Masukkan Pekerjaan">
			</div>

      <div class="form-group">
			<label>Keterangan</label>
			<textarea type="text" class="form-control"  name="keterangan" placeholder="Masukkan Keterangan"></textarea>
			</div>

      <div class="form-group">
			 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
             
		</div>
     </form>
        <?php
          break;
          case 'update':
          include('koneksi.php');
          $ambil = mysqli_query($koneksi,"select * from customer where idcustomer='$_GET[idcustomer]'");
          $data = mysqli_fetch_array($ambil);
        ?>
        <h2>Update customer</h2>
		
        <form class="form-group mt-5" method="post" action="proses_customer.php?aksi=ubah&idcustomer=<?php echo $data['idcustomer']?>">
		  
    <div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php  echo $data['nama'];?>">
			</div>
			
			 <div class="form-group">
			<label>Jekel</label><br>
			<input type="radio" name="jekel" value="L"<?php echo $data['jekel']=='L'? 'checked':''?>>Laki-Laki
      <input type="radio" name="jekel" value="P"<?php echo $data['jekel']=='P'? 'checked':''?>>Perempuan
      
			</div>

      <div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" class="form-control"  name="ttl" value="<?php  echo $data['ttl'];?>">
			</div>

      <div class="form-group">
			<label>Alamat</label>
			<input type="text" class="form-control"  name="alamat" value="<?php  echo $data['alamat'];?>">
			</div>

      <div class="form-group">
			<label>Telepon</label>
			<input type="text" class="form-control"  name="telp" value="<?php  echo $data['telp'];?>">
			</div>

      <div class="form-group">
			<label>Pekerjaan</label>
			<input type="text" class="form-control"  name="pekerjaan" value="<?php  echo $data['pekerjaan'];?>">
			</div>

      <div class="form-group">
			<label>Keterangan</label>
			<textarea type="text" class="form-control"  name="keterangan" value="<?php  echo $data['keterangan'];?>"></textarea>
			</div>
		
		  <div class="form-group">
			 <input type="submit" name="update" value="Update" class="btn btn-primary">
			 <input type="reset" name="reset" value="Reset" class="btn btn-danger">
             
		</div>
        </form>
        <?php
          break;
          }
        ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'footer.php'?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'logoutmodal.php'?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

