<!-- قائمة المحتوى كامل  -->
<div id="content-wrapper" class="d-flex flex-column">

        
<!-- Main Content -->
<div id="content">

  <!-- Header -->
  <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <div class="row">
    <!--  ايقونه الصفحه الرئيسية  -->
    <div class="col-lg-auto col-md-auto col-sm-auto col-auto mark offset-lg-1 offset-xl-1 col-auto  ">
   
  <div class="sidebar-brand-text mx-3 ">سداد</div>
</div>
  </div>



   <div class=" row col-auto offset-xl-6 offset-lg-6 offset-md-4 offset-sm-3   mark " >
  <div class="sidebar-brand-text mx-3  ">رصيدك : </div>
  <div id="spot_balance" class="sidebar-brand-text mx-3 "><?php echo $_SESSION['balence'] ?></div>
</div>
 
  <input id="H_input_id" type="hidden" value="<?php echo $_SESSION['id']; ?>">
             

</ul>


  </nav>