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

    <!-- End of Sidebar -->