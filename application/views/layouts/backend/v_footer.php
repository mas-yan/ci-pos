 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>

 <!-- Main Footer -->
 <footer class="main-footer">
   <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 3.0.5
   </div>
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->
 <!-- jQuery -->

 <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>
 <!-- SweetAlert2 -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <!-- DataTables -->
 <script src=" <?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

 <script type="text/javascript">
   $('.logout').on('click', function(e) {
     e.preventDefault();
     const href = $(this).attr('href')
     Swal.fire({
       title: 'Are you sure?',
       text: "Anda ingin keluar!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes yakin'
     }).then((result) => {
       if (result.value) {

         swal.fire({
           title: "BERHASIL",
           text: "Anda telah keluar",
           icon: "success",
           buttons: [false, "OK"],
         }).then(function() {
           document.location = href;
         });
       }
     })
   })
   $(function() {
     $("#example1").DataTable({
       "responsive": true,
       "autoWidth": false,
     });
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false,
       "responsive": true,
     });
   });

   let error = $('.error').data('error');
   let success = $('.success').data('success');

   $('.hapus').on('click', function(e) {
     e.preventDefault();
     const href = $(this).attr('href');

     Swal.fire({
       title: 'Apakah anda yakin?',
       text: "Menghapus data ini?",
       icon: 'warning',
       showCancelButton: true,
       cancelButtonColor: '#d33',
       confirmButtonColor: '#3085d6',
       cancelButtonText: 'batal',
       confirmButtonText: 'Hapus!'
     }).then((result) => {
       if (result.isConfirmed) {
         document.location.href = href;
       }
     })

   })


   $('.logout').on('click', function(e) {
     e.preventDefault();
     const href = $(this).attr('href');
     Swal.fire({
       title: 'Apa anda yakin?',
       text: "ingin keluar!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, keluar!'
     }).then((result) => {
       if (result.isConfirmed) {
         document.location.href = href;
       }
     })
   })

   if (success) {
     Swal.fire({
       title: 'Success!',
       text: success,
       icon: 'success',
     })
   } else if (error) {
     Swal.fire({
       title: 'Error!',
       html: '<h5>' + error + '</h5>',
       icon: 'error',
     })
   }
 </script>
 </script>
 </body>

 </html>