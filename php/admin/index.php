<?php session_start(); 
if(!(isset($_SESSION['id']))){
header('Location:login.php');

}
?>
<!DOCTYPE html>
<html dir="rtl">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>نظام الدفع الالكتروني</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="../jstest/jquery-3.5.1.slim.min.js"></script>
  <!-- <script src="../jstest/jquery.dataTables.js"></script> -->
  <script src="../../jstest/jquery.dataTables.js"></script>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <link href="../../jstest/jquery.dataTables.min.css" rel="stylesheet"> -->
  <!-- <link href="../../jstest/scroller.dataTables.min.css" rel="stylesheet"> -->
  <link href="css/rtl/bootstrap.css" rel="stylesheet">
     <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
     <link href="../css/style.css" rel="stylesheet">

</head>

<body id="page-top">


  <!-- الصفحة كامله  -->
  <div id="wrapper">

    <!-- القائمة الجانبية  -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion  "  id="accordionSidebar">

        
      <!-- Sidebar - Brand -->
        
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.php">
          <!--  ايقونه الصفحه الرئيسية  -->
        
          <div class="sidebar-brand-text mx-3 "> شعار الموقع  </div>
      </a>

        
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
        
      <!--  قائمه الصفحه الرئيسية  -->
      <li class="nav-item active ">
        <a class="nav-link " href="index.php">
        <span class="">الصفحة الرئيسية </span>
          <i class="fas fa-fw fa-tachometer-alt ri"></i>
          </a>
      </li>

          <!-- قائمة الباقات  -->
      <li class="nav-item">
        <a class="nav-link" href="offer.php">
        <span>الباقات </span>
          <i class="fas fa-fw fa-table"></i>
          </a>
      </li>
        
               <!-- قائمة الشركات  -->
      <li class="nav-item">
        <a class="nav-link" href="compeny.php">
        <span>الشركات </span>
          <i class="fas fa-fw fa-table"></i>
          </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- قائمة التقارير -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <span>التقارير </span>
         <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
         
           </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="ropetuser.php">تقارير المستخدمين </a>
            <a class="collapse-item" href="ropetprocess.php">تقارير العمليات </a>
              <a class="collapse-item" href="ropetsales.php">تقارير المبيعات  </a>
              <a class="collapse-item" href="ropetpromotion.php">تقارير المشتريات  </a>
          </div>
         </div>
          
          
      </li>

          <!-- قائمة الخروج  -->
      <li class="nav-item">
        <a class="nav-link" href="login.php">
        <span>الخروج  </span>
          <i class="fas fa-fw fa-table"></i>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- قائمة المحتوى كامل  -->
    <div id="content-wrapper" class="d-flex flex-column">

        
      <!-- Main Content -->
      <div id="content">
      <div class="row">
  <nav class="navbar navbar-expand bg-dark topbar mb-4 static-top shadow bg-gradient-dark col-lg-12">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


    <!--  ايقونه الصفحه الرئيسية  -->
      
   <div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto  offset-xl-5 offset-lg-5 offset-md-5 offset-sm-5 offset-4">
    <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link col-lg-auto ">
                          
  <div class="sidebar-brand-text mx-3  "> سداد</div>

  </a> </div>
     <!--
          <ul class="navbar-nav col-auto offset-lg-7 offset-md-7 offset-sm-6">

            -->     

            <!-- قائمة الرسائل  -->
            <!--
            <li class="nav-item dropdown no-arrow mx-1  le>
              <a class="nav-link dropdown-toggle " href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>-->
                <!-- Counter - Messages --><!--
                <span class="badge badge-danger badge-counter">7</span>
              </a>-->
              <!-- Dropdown - Messages --><!--
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li> -->


            <!-- قائمة الاشعارات  -->
             <!--

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">الاشعارات  </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
             --> <!-- Dropdown - User Information --><!--
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  الاعدادات
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  الحاله النشط
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  تسجيل الخروخ
                    
                </a>
              </div>
            </li>-->

              
   </ul>
      

        </nav>
        <!-- End of Header -->
                <!-- قائمة المحتوى  -->
                <div class="container-fluid">

<!--add user  -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800" ><?php echo $_SESSION['name'] ?>  </h1>
<input type="hidden" id="user_id" value="<?php echo $_SESSION['id'] ?>" >
</div>

<!-- Content Row -->
<div class="row">

 <!-- قائمة عدد المستخدمين  -->
 <div class="col-xl-4 col-md-6 mb-6">
   <div class="card border-left-dark shadow h-100 py-2">
     <div class="card-body">
       <div class="row no-gutters align-items-center">
         <div class="col mr-2">
           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> عدد المستخدمين </div>
           <div class="h5 mb-0 font-weight-bold text-gray-800"id="total_clients"></div>
         </div>
         <div class="col-auto">
           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- قائمة الرصيد المتاح -->
 <div class="col-xl-4 col-md-6 mb-6">
   <div class="card border-left-success shadow h-100 py-2">
     <div class="card-body">
       <div class="row no-gutters align-items-center">
         <div class="col mr-2">
           <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> الرصيد المتاح  </div>
           <div class="h5 mb-0 font-weight-bold text-gray-800" id="total_money_company">RY </div>
         </div>
         <div class="col-auto">
           <i class="">
             ٌRY</i>
         </div>
       </div>
     </div>
   </div>
 </div>


 </div>

<!--add user  -->
<!-- Modalاضافة مستخدمين -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">إضافه مستخدمين </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
       </button>
        </div>
    <div class="modal-body" >
     <div >
   <form action="../api/Clients/Create.php" method="POST" dir="rtl" enctype="application/x-www-form-urlencoded">
    
    <div class="row">
      <div class="col-5  ">      
   
        <label>الاسم </label></div>
           <input type="text" name="name"id="a_name" >
           <input type="hidden" name="name"id="a_token" value="">
           <input type="hidden" name="name"id="a_status" value="1">
           <input type="hidden" name="name"id="a_activety" value="1">
           <input type="hidden" name="name"id="a_balance" value="">
           <input type="hidden" name="name"id="a_last_update" value="<?php echo date('Y-m-d H:i:s'); ?>">
           <input type="hidden" name="name"id="a_last_login" value="<?php echo date('Y-m-d H:i:s'); ?>">
     
          </div>
   
          <div class="row">
          <div class="col-5  ">   
           <label> كلمة المرور </label></div>
         <input type="password"  name="password" id="a_password">
         </div>

         <div class="row">
          <div class="col-5  ">   
           <label>رقم الجوال </label></div>
            <input type="tel" name="phone" id="a_phone">
              </div>
              <div class="row">
                <div class="col-5  ">   
         <label> المدينة </label></div>
           <input type="text" name="city" id="a_city">
            </div>
            <div class="row">
              <div class="col-5  ">   
              <label>العنوان </label></div>
               <input type="text" name="address" id="a_address">
                       </div>

                       
     
           <!-- <div class="row">
            <div class="col-5  ">   
              <label>تاريخ الانشاء </label></div>
                <input type="date" name="creat_at" id="a_date_creat">
                    </div> -->
                    <!-- <div class="row">
                      <div class="col-5  ">   
                  <label>المبلغ الافتتاحي </label></div>
                      <input type="number" name="balence">
                    </div> -->


</form>
</div>
                
</div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
<button id="add_b" type="button" class="btn btn-primary">حفظ</button>
</div>
</div>
</div>
</div>
<!-- end Modal -->
<!-- Modal اضافة رصيد-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">إضافه رصيد </h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
        </button>
         </div>
     <div class="modal-body" >
      <div >
    <form action="../api/Clients/Create.php" method="POST" dir="rtl" enctype="application/x-www-form-urlencoded">
          <div class="row">
           <div class="col-5  ">   
            <label> المبلغ </label></div>
             <input type="text" name="sel_to_client" id="payment">
               </div>

 
 </form>
 </div>
                 
 </div>
 
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
 <button type="button" class="btn btn-primary"  id="pay_balance_B">حفظ</button>
 </div>
 </div>
 </div>
 </div>
 
<!--Modal-->
<!-- Modal تعديل -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> تعديل </h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
        </button>
         </div>
     <div class="modal-body" >
      <div >
    <form   dir="rtl" >
     <div class="row">
       <div class="col-5  ">      
     <label>الاسم </label></div>
            <input type="text" name="name"id="e_name" >
            <input type="hidden" name="name"id="e_id" >
            <input type="hidden" name="name"id="e_balence" >
            <input type="hidden" name="name"id="e_token" >
            <input type="hidden" name="name"id="e_last_login" >
            <input type="hidden" name="name"id="e_status" >
      </div>
      <div class="row">
       <div class="col-5  ">   
            <label> كلمة المرور </label></div>
          <input type="text"  name="text" id="e_password">
          </div>
 
          <div class="row">
           <div class="col-5  ">   
            <label>رقم الجوال </label></div>
             <input type="tel" name="phone" id="e_phone">
               </div>
               <div class="row">
                 <div class="col-5  ">   
          <label> المدينة </label></div>
            <input type="text" name="city" id="e_city">
             </div>
             <div class="row">
               <div class="col-5  ">   
               <label>العنوان </label></div>
                <input type="text" name="address" id="e_address">
                        </div>
 
                        <div class="row">
                         <div class="col-5  ">   
                        <label>اسم المنشاء المستخدم </label></div>
           <select id="e_user_id"></select> </div>
      
            <div class="row">
             <div class="col-5  ">   
               <label>تاريخ الانشاء </label></div>
                 <input type="date" name="creat_at" id="e_creat_date">
                     </div>
                     <div class="row">

                     
                     </div>
 
 
 </form>
 </div>
                 
 </div>
 
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
 <button type="button" class="btn btn-primary" id="B_edit">حفظ</button>
 </div>
 </div>
 </div>
 </div>
 <!--End modal-->
     <!-- /.container-fluid -->
<div >
<div clas="row">

 <div class="col-lg-2 col-md-6 mb-4 ">

   
  </div>
    </div>
       </div>


 
  <!-- الجداول  -->
 <div class="card shadow mb-4">
 <div class="card-header text-center">
   <h6 class="m-0 font-weight-bold text-primary"> المستخدمين </h6>
 </div>
 <div class="card-body">
   <div class="table-responsive">
     <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

         <div class="row">

          <div class=" col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto xs-auto ">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               إضافة مستخدم  
                    </button>
          </div>
             
             
                            <div id="dataTable_filter" class="dataTables_filter col-auto col-md-3 col-sm-auto col-lg-auto offset-lg-4 xs-auto ">
                                 <input type="search" class="form-control form-control-sm"  aria-controls="dataTable" placeholder="بحث">
                            </div>
                       
                          <br>
                      
                   
                        </div>

         <div class="row">
             <div class="col-sm-12">
                 <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
       <thead>
         <tr role="row">
             
             <th>اسم المستخدم </th>
             
             <th>رقم الهاتف
             </th>
             
             <th >الرصيد المتاح
             </th>
             <th >اسم المنشاء المستخدم 
             </th>
             <th>الحاله
             </th>
             <th>العمليات
             </th>
          
          
      
           </tr>
       </thead>
         

       <tbody id="tbodydata">
         <script src="../../jstest/‫‫javaapi main.js"></script>
     
         <tr role="row" class="even">
           </tbody>
     </table>
         </div>
         
         </div>
         
       </div>
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
            <span> حقوق الطبع محفوظه   &copy; لدى    </span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="../jstest/‫‫javaapi main.js"></script>
  <script src="../jstest/jquery-3.5.1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  </body>
</html>