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
       <p><a href="?p=layanan&page=entri" class="btn btn-primary ml-2 pr-2 pl-2">Add Status <i class="fas fa-save mr-2"></i></a></p>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Data Status</h6>
            </div>
            <div class="card-body">

   

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                   
                   <th>Id Status</th>
                   <th>Status</th>
                   <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
               
                   <th>Id Status</th>
                   <th>Status</th>
                   <th>Aksi</th>
                  </tr>
                  </tfoot>
                  <tbody>
                     <?php
          include('koneksi.php');
          $data = mysqli_query($koneksi,"select * from status");
          $i =1;
          while ($row=mysqli_fetch_array($data)) {
            ?>
            <tr>
              
              <td><?php echo $i?></td>
              <td><?php echo $row['status']?></td>
            

              <td>
                <a href="proses_status.php?aksi=hapus&idstatus=<?php echo $row['idstatus']?>" class="btn btn-danger pr-2 pl-2" onclick="return confirm('Are You Sure to Delete?')"><i class="fas fa-trash mr-2"></i></a>
                <a href="?p=status&page=update&idstatus=<?php echo $row['idstatus']?>" class="btn btn-success ml-2 pr-2 pl-2"><i class="far fa-edit mr-2"></i></a>
              </td>
            </tr>
            <?php $i++;}?>  
                  </tbody>
              
                  </table>
                <?php
          break;
          case 'entri':
        ?>
        <h2>Input Status</h2>
        <form class="form-group mt-5" method="post" action="proses_status.php?aksi=tambah">
           <div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status" placeholder="Masukkan Status">
			</div>
			
       	 <div class="form-group">
			 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
             
		</div>
     </form>
        <?php
          break;
          case 'update':
          include('koneksi.php');
          $ambil = mysqli_query($koneksi,"select * from status where idstatus='$_GET[idstatus]'");
          $data = mysqli_fetch_array($ambil);
        ?>
        <h2>Update Status</h2>
		
        <form class="form-group mt-5" method="post" action="proses_status.php?aksi=ubah&idstatus=<?php echo $data['idstatus']?>">
		
		 <div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status" value="<?php  echo $data['status'];?>">
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

