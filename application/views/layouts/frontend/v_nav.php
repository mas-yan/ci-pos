 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
   <div class="container">
     <a href="<?= base_url('assets/') ?>index3.html" class="navbar-brand">
       <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
       <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse order-3" id="navbarCollapse">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a href="index3.html" class="nav-link">Home</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">Contact</a>
         </li>
         <li class="nav-item dropdown">
           <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
           <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
             <li><a href="#" class="dropdown-item">Some action </a></li>
             <li><a href="#" class="dropdown-item">Some other action</a></li>

             <li class="dropdown-divider"></li>

             <!-- Level two dropdown-->
             <li class="dropdown-submenu dropdown-hover">
               <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
               <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                 <li>
                   <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                 </li>

                 <!-- Level three dropdown-->
                 <li class="dropdown-submenu">
                   <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                   <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                     <li><a href="#" class="dropdown-item">3rd level</a></li>
                     <li><a href="#" class="dropdown-item">3rd level</a></li>
                   </ul>
                 </li>
                 <!-- End Level three -->

                 <li><a href="#" class="dropdown-item">level 2</a></li>
                 <li><a href="#" class="dropdown-item">level 2</a></li>
               </ul>
             </li>
             <!-- End Level two -->
           </ul>
         </li>
       </ul>

       <!-- Right navbar links -->
       <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
         <!-- Messages Dropdown Menu -->
         <li class="nav-item">
           <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="fas fa-comments"></i>
             <span class="badge badge-danger navbar-badge">3</span>
           </a>
         </li>
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item">
           <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="fas fa-shopping-cart"></i>
             <span class="badge badge-warning navbar-badge">15</span>
           </a>
         </li>

         <li class="nav-item">
           <a class="nav-link text-primary" data-toggle="dropdown" href="#">
             | Nama user &nbsp; &nbsp;
             <img src="<?= base_url('assets/') ?>dist/img/user1-128x128.jpg" alt="" class="brand-image img-circle elevation-3">
           </a>


           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-user mr-2"></i> Profile
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-sign-out-alt mr-2"></i> Logout
             </a>
           </div>

         </li>
       </ul>
     </div>
 </nav>
 <!-- /.navbar -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item"><a href="#">Layout</a></li>
             <li class="breadcrumb-item active">Top Navigation</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <div class="content">
     <div class="container">