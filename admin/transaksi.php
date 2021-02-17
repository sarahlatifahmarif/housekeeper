
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

           <?php
                 $page = isset($_GET['page'])?$_GET['page']:'list';
                 switch ($page) {
                 case 'list':
                ?>
        
           <p><a href="?p=customer&page=entri" class="btn btn-primary ml-2 pr-2 pl-2">Add Transaksi <i class="fas fa-save mr-2"></i></a></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Data Transaksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>No</th>
                     <th>Id Transaksi</th>
                     <th>Id Customer</th>
                     <th>Id Housekeeper</th>
                     <th>Id Layanan</th>
                     <th>Tanggal</th>
                     <th>Keterangan</th>
                     <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                   <tr>
                   <th>No</th>
                     <th>Id Transaksi</th>
                     <th>Id Customer</th>
                     <th>Id Housekeeper</th>
                     <th>Id Housekeeper</th>
                     <th>Tanggal</th>
                     <th>Keterangan</th>
                     <th>Aksi</th>
                   </tr>
                  </tfoot>
                  <tbody>
                     <?php
          include('koneksi.php');
          $data = mysqli_query($koneksi,"select * from transaksi");
          $i =1;
          while ($row=mysqli_fetch_array($data)) {
            ?>
            
            <tr>
              <td><?php echo $i?></td>
              <td><?php echo $row['idtransaksi']?></td>
              <td><?php echo $row['idcustomer']?></td>
              <td><?php echo $row['idhousekeeper']?></td>
              <td><?php echo $row['idlayanan']?></td>
              <td><?php echo $row['tanggal']?></td>
              <td><?php echo $row['keterangan']?></td>

              <td>
                <a href="proses_transaksi.php?aksi=hapus&idtransaksi=<?php echo $row['idtransaksi']?>" class="btn btn-danger pr-2 pl-2" onclick="return confirm('Are You Sure to Delete?')"><i class="fas fa-trash mr-2"></i></a>
                <a href="?p=transaksi&page=update&idtransaksi=<?php echo $row['idtransaksi']?>" class="btn btn-success ml-2 pr-2 pl-2"><i class="far fa-edit mr-2"></i></a>
              </td>
            </tr>
                    
                  </tbody>
                    <?php $i++;}?>
                </table>

             <?php
          break;
          case 'entri':
        ?>
        <h2>Input Transaksi</h2>
        <form class="form-group mt-5" method="post" action="proses_petugas.php?aksi=tambah">
           <div class="form-group">
      <label>Id Housekeeper</label>
      <input type="text" class="form-control" name="idhousekeeper" placeholder="Masukkan Id Housekeeper">
      </div>
      
       <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
      </div>
      
       <div class="form-group">
      <label>Layanan</label>
      <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Telp">
      </div>

       <div class="form-group">
      <label>Umur</label>
      <input type="text" class="form-control" id="umur" name="telp" placeholder="Masukkan Umur">
      </div>
      
       <div class="form-group">
      <label>Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
      </div>

       <div class="form-group">
      <label>Pendidikan</label>
      <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukkan Telp">
      </div>

       <div class="form-group">
      <label>Keterangan</label>
      <textarea type="text" class="form-control" id="keterangan" name="telp" placeholder="Masukkan Keterangan"></textarea>
      </div>

       <div class="form-group">
      <label>Pengalaman</label>
      <input type="text" class="form-control" id="pengalaman" name="telp" placeholder="Masukkan Pengalaman">
      </div>
    
         <div class="form-group">
       <input type="submit" name="submit" value="Submit" class="btn btn-primary">
             
    </div>
     </form>

      <?php
          break;
          case 'update':
          $ambil = mysqli_query($koneksi,"select * from petugas where id_petugas='$_GET[id_petugas]'");
          $data = mysqli_fetch_array($ambil);
        ?>
        <h2>Update Petugas</h2>
    
        <form class="form-group mt-5" method="post" action="proses_petugas.php?aksi=ubah&id_petugas=<?php echo $data['id_petugas']?>">
    
     <div class="form-group">
      <label>Id Petugas</label>
      <input type="text" class="form-control" name="id_petugas" value="<?php  echo $data['id_petugas'];?>">
    </div>
      
       <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?php  echo $data['nama'];?>">
      </div>
      
       <div class="form-group">
      <label>Telp</label>
      <input type="text" class="form-control" id="telp" name="telp" value="<?php  echo $data['telp'];?>">
      </div>
      
       <div class="form-group">
      <label>Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php  echo $data['alamat'];?>">
      </div>
    
      <div class="form-group">
       <input type="submit" name="update" value="Update" class="btn btn-primary">
       <input type="reset" name="reset" value="Reset" class="btn btn-primary">
             
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
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Housekeeper 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 <?php include('topbar.php')?>

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
