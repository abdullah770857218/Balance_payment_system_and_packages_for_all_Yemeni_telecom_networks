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

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/rtl/bootstrap.css" rel="stylesheet">
     <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
     <link href="../css/style.css" rel="stylesheet">
     
</head>

<body id="page-top">

 

  <!-- الصفحة كامله  -->
  <div id="wrapper">

    <!-- القائمة الجانبية  -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion  "  id="accordionSidebar">

        
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
        <span class="ad">الصفحة الرئيسية </span>
          <i class="fas fa-fw fa-tachometer-alt ri"></i>
          </a>
      </li>

          <!-- قائمة التقرير  -->
      <li class="nav-item">
        <a class="nav-link" href="ropetuser.php">
        <span>التقرير </span>
          <i class="fas fa-fw fa-table"></i>
          </a>
      </li>
        
      <!-- Divider -->
      <hr class="sidebar-divider">

     <!-- قائمة الاعدادات  -->
  
    
       <!-- قائمة حولنا  -->
       <li class="nav-item">
        <a class="nav-link" href="about.php">
        <span> حولنا </span>
          <i class="fas fa-fw fa-table"></i>
          </a>
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


<?php include("layout/header.php");?>


        <!-- قائمة المحتوى  -->
      

        <div class="container-fluid">
<!--
<div class="container">
  <div class="row ">
    <div class="col-xl-12 col-md-6 mb-4">
<label class="col-xl-2">من تاريخ </label>
<input  type="date" value="" class="col-xl-3" >
          <label class="col-xl-2">إلى تاريخ </label>
<input type="date" value="" class="col-xl-3">
 </div>
 </div>
 </div>
            -->
           <!--add user  -->
<br><br>
            
             <!-- الجداول  -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> تقرير العمليات للمستخدمين   </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <!--
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>عرض الصفحة 
                                    <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label> :بحث <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                </label>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                        
                       
                        <th> رقم الطلب </th>
                        <th>اسم الشركه  </th>
                        <th>نوع الخدمة  </th>
                        <th> رقم العميل </th>
                        <th> السعر </th>
                        <th>رقم المشترك   </th>
                        <th>تاريخ الطلب   </th>
                        <th> تاريخ الرد  </th>
                       <th>  الملاحظات  </th>
                       <th> الحالة </th>
                      </tr>
                  </thead>
                    <input id="hide_client_phone" type="hidden" value='<?php echo $_SESSION['phone']?>'>
          
                  <tbody id="tbodydata">
                    
                    </tbody>
<script type="javascript/text" src="jstest/clint_report.js"></script>
                        <!-- <script src="jstest/‏‏javaapi loginreport.js"></script> -->
                        <!-- <script src="jstest/‏‏javaapi loginreport.js"></script> -->
                   

                </table>
                    </div>
                    
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                        
                                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">السابق
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item next" id="dataTable_next">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">التالي
                                        </a>
                                    </li>
                                </ul>
                            
                            </div>
                        </div>
                    </div>
                    -->
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
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- <script src="../jstest/‏‏javaapi users.js"></script>   -->
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>



<script src="jstest/clint_report.js">
</script>
<script src="jstest/javaapi users.js">

	</script>




<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<!-- <script src="../jstest/‏‏javaapi users.js"></script>  -->
<!-- <script src="jstest/‏‏javaapi loginreport.js"></script>  -->
  </body>
</html>
