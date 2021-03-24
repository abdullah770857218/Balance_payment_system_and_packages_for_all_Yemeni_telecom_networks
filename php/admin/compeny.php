

<?php include("layout/Sidebar.php");?>

<?php include("layout/header.php");?>
 
 

<!-- قائمة المحتوى  -->
<div class="container-fluid">



   <!--add user  -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">تعديل </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" >
<div >
<form  id="E_FORM" dir="rtl" method="POST">
  <div class="row">
<div class="col-3">
  <label>اسم الشركة  </label>
  </div>
  <input type="hidden"  id="e_id">
  <input type="hidden"  id="e_status">
  <input type="text" name="name" id="e_name">
  </div>
  <div class="row">
<div class="col-3">
  <label> الرقم   </label>
  </div>
  <input type="text"  name="phone" id="e_phone">
  </div>
  <div class="row">
<div class="col-3">
  <label>الرصيد الافتتاحي  </label>
  </div>
  <input type="text" name="balence" id="e_balance">
  </div>
  <div class="row">
<div class="col-3">
  <label> العنوان </label>
  </div>
  <input type="text" name="address" id="e_address">
  </div>
  <div class="row">
<div class="col-3">
  <label> تاريخ الانشاء </label>
  </div>
  <input type="date" name="creat_at" id="e_date_creat">
  </div>
  <div class="row">
<div class="col-3">
  <label> api_url </label>
  </div>
  <input type="text" name="api_url" id="e_api">
  </div>
  <div class="row">
<div class="col-3">
  <label> access </label>
  </div>
  <input type="text" name="access_token" id="e_access_token">
  </div>
  <div class="row">
<div class="col-3">
  <th>promotion
  <label>  </label>
  </div>
  <input type="text"  name="promotian" id="e_promotion" >
  </div>
  <!-- <button type="submit" Onsubmit="click_edit()"  id="save_b" class="btn btn-primary">حفظ</button> -->
</form>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
<button type="button"   id="save_b" class="btn btn-primary">حفظ</button>
</div>
</div>
</div>
</div>

    
        

<!-- اضافه  -->

<div class="modal fade" id="AddModel" tabindex="-1" aria-labelledby="add_mm" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
  
  <h5 class="modal-title" id="add_mm"> إضافه شركات</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body" >
  <div >
  <form  id="A_FORM" dir="rtl" method="POST">
    <div class="row">
  <div class="col-3">
    <label>اسم الشركة  </label>
    </div>
    <input type="hidden"  id="e_id">
    <input type="hidden"  id="a_status" value="1">
    <input type="text" name="name" id="a_name">
    </div>
    <div class="row">
  <div class="col-3">
    <label> الرقم   </label>
    </div>
    <input type="text"  name="phone" id="a_phone">
    </div>
    <div class="row">
  <div class="col-3">
    <label>الرصيد الافتتاحي  </label>
    </div>
    <input type="text" name="balence" id="a_balance">
    </div>
    <div class="row">
  <div class="col-3">
    <label> العنوان </label>
    </div>
    <input type="text" name="address" id="a_address">
    </div>
   
    <div class="row">
  <div class="col-3">
    <label> api_url </label>
    </div>
    <input type="text" name="api_url" id="a_api">
    </div>
    <div class="row">
  <div class="col-3">
    <label> access </label>
    </div>
    <input type="text" name="access_token" id="a_access_token">
    </div>
    <div class="row">
  <div class="col-3">
    <th>promotion
    <label>  </label>
    </div>
    <input type="text"  name="promotian" id="a_promotion" >
    </div>
    <!-- <button type="submit" Onsubmit="click_edit()"  id="save_b" class="btn btn-primary">حفظ</button> -->
  </form>
  </div>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
  <button type="button"   id="add_b" class="btn btn-primary">حفظ</button>
  </div>
  </div>
  </div>
  </div>
  
    
     <!-- الجداول  -->
    <div class="card shadow mb-4">
    <div class="row ">
    <div class="card-header py-3 offset-lg-6 col-lg-auto">
      <h6 class="m-0 font-weight-bold text-primary ">  الشركات </h6>
    </div></div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row " id="rw">
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                  <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#AddModel">
                    إضافة   
                  </button><!--
                  <div class="dataTables_length" id="dataTable_length">
                        <label>عرض الصفحة 
                            <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries
                        </label>
                    </div>-->
                </div>
                <div class="col-sm-12 col-md-6  col-lg-6">
                    <div id="dataTable_filter" class="dataTables_filter col-lg-6">
                         <input type="search" class="form-control form-control-sm"  aria-controls="dataTable" placeholder="بحث">
                        
                    </div>
                    
                </div>
                
                  
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
                
                <th>اسم الشركة</th>
                <th>الرقم </th>
                <th>الرصيد </th>
                <th>العنوان </th>
                <th> تاريخ الانشاء </th>
                <th>api_url </th>
                <th>access </th>
                <th>promotion</th>
                <th>الحاله </th>
                <th>العمليات</th>
                
              </tr>
          </thead>
            
  
          <tbody id="tbodydata">



          <tr role="row" class="t_new_tr" id="tr_show">

              
              <!-- <td id="td_chack">
              <div class="custom-control custom-checkbox small" id="div_chk">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck" id="labs">موقف </label>
                      </div>
              </td>
              <td> -->
              
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> تعديل 
                   </button> -->
              
                  
              </td>
 

              </tbody>
              <script type="text/javascript"  src="../jstest/javaapi.js"></script>
  
              <script type="text/javascript"  src="../jstest/jquery.dataTables.min.js">
  
              
              
                        </script>
        </table>
            </div>
            
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
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
          </div>
      </div>
    </div>
  </div>
    
    
    
    
    
    
</div>


</div>



    
<?php include("layout/footer.php");?>
