

<?php include("layout/Sidebar.php");?>

<?php include("layout/header.php");?>
 
    
 

<!-- قائمة المحتوى  -->
<div class="container-fluid">



   <!--edit user  -->
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
  <label>اسم الباقة  </label>
  </div>
  <input type="hidden"  id="e_id">
  <input type="hidden"  id="e_status">
  <select id="a_sele_comp" class="" onclick="myFunction()">

			
  </select>
  </div>
 
  <div class="row">
<div class="col-3">
  <label>اسم الباقه </label>
  </div>
  <input type="text" name="price" id="e_name">
  </div>
  <div class="row">
<div class="col-3">
  <label>السعر </label>
  </div>
  <input type="text" name="price" id="e_price">
  </div>
  <div class="row">
<div class="col-3">
  <label> الوصف  </label>
  </div>
  <input type="text" name="address" id="e_desc">
  </div>
  <div class="row">
<div class="col-3">
  <label> تاريخ الانشاء </label>
  </div>
  <input type="date" name="creat_at" id="e_date_creat">
  </div>
 
   <!-- <button type="submit" Onsubmit="click_edit()"  id="save_b" class="btn btn-primary">حفظ</button> -->
</form>
</div>
</div>
<div class="modal-footer">
<button id="exit_b" type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
<button type="button"   id="save_b" class="btn btn-primary">حفظ</button>
</div>
</div>
</div>
</div>



    <!-- form add  -->
        
    <div class="modal fade" id="add_from" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      
      <h5 class="modal-title" id="exampleModalLabel">اضافة باقه </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body" >
      <div >
      <form   dir="rtl" method="POST">
        <div class="row">
      <div class="col-3">
        <label>اسم الشركه  </label>
        </div>
        <input type="hidden"  >
        <input type="hidden"  >
        <select id="add_select_offer_comp"  class="" onclick="myFunction()">
      
            
        </select>
        </div>
       
        <div class="row">
      <div class="col-3">
        <label>اسم الباقه </label>
        </div>
        <input type="text" name="price" id="a_name">
        </div>
        <div class="row">
      <div class="col-3">
        <label>السعر </label>
        </div>
        <input type="text" name="price" id="a_price">
        </div>
        <div class="row">
      <div class="col-3">
        <label> الوصف  </label>
        </div>
        <input type="text" name="address" id="a_desc">
        </div>
        <div class="row">
      <div class="col-3">
        <label> تاريخ الانشاء </label>
        </div>
        <input type="date" name="creat_at" id="a_date_creat">
        </div>
       
         <!-- <button type="submit" Onsubmit="click_edit()"  id="save_b" class="btn btn-primary">حفظ</button> -->
      </form>
      </div>
      </div>
      <div class="modal-footer">
      <button id="exit_b1" type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
      <button type="button"   id="ADD_B" class="btn btn-primary">اضافة</button>
      </div>
      </div>
      </div>
      </div>
      

    
     <!-- الجداول  -->
    <div class="card shadow mb-4">
    <div class="row">
    <div class="card-header py-3  offset-lg-6 col-lg-auto ">
      <h6 class="m-0 font-weight-bold text-primary  "> إضافة الباقات </h6>
    </div> </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
               <!-- <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dataTable_length">
                        <label>عرض الصفحة 
                            <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries
                        </label>
                    </div>
                </div>-->
                
                          <div class="col-sm-12 col-md-6">
                    <div id="dataTable_filter" class="dataTables_filter">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_from">
                     إضافة   
                   </button>
                    </div>
                </div>
      
                   <form id="form" novalidate="" class="ng-pristine ng-invalid ng-touched">
 
  
    
        <ion-item class="item item-block item-ios item-input ng-untouched ng-pristine ng-invalid active-input">
            
 
            
            <div class="item-inner ">
                
                
                
                <div class="input-wrapper  col-xl-12 col-md-12 mb-12" id="menu">
                    
          
                    
                    <ion-label class="label label-ios label-ios-primary  col-xl-4 col-md-6 mb-6" id="lbl-11"> الشركات  </ion-label>
              
                    
  <select id="sele_comp" class="col-xl-10 col-md-8 mb-8" onclick="myFunction()">

			
			</select>
                </div>
             
            </div>
            <div class="button-effect">
            </div>
    </ion-item>
 
    <br>
    
  </form>
        
                
        
        
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
                
                
                
                <th>اسم الباقة </th>

                <th>السعر
                </th>
                <th>الحاله
                </th>
                <th>العمليات
                </th>
             
         
              </tr>
          </thead>
            
  
          <tbody id="tbodydata">
            <script src="../jstest/javaapi offer.js"></script>
  
              </tbody>
        </table>
            </div>
            
            </div>
            
          </div>
      </div>
    </div>
  </div>
    
    
    
    
    
    
</div>


</div>



    
<?php include("layout/footer.php");?>
