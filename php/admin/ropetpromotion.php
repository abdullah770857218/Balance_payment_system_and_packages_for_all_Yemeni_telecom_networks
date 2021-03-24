

<?php include("layout/Sidebar.php");?>

<?php include("layout/header.php");?>


        <!-- قائمة المحتوى  -->
        <div class="container-fluid">

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
            
           <!--add user  -->

            
             <!-- الجداول  -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> تقرير المشتريات    </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
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
                                <label> بحث : <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                        
                        
                        <th> رقم الطلب </th>
                        <th> اسم الشركة  </th>
                        <th>اسم المستخدم الاداره </th>
                        <th> السعر </th>
                        <th>تاريخ العمليه  </th>
                        <th> الحالة </th>
                      
                      </tr>
                  </thead>
                    
          
                  <tbody>
                    
                  <tr role="row" class="odd">
                      <td >Airi Satou</td>
                      <td>Accountant</td>
                      <td>33</td>
                      <td>33</td>
                      <td>33</td>
                      <td>
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">ناجح </label>
                      </div>
                      </td>
                      
                     
                    </tr><tr role="row" class="even">
                      </tbody>
                </table>
                    </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                        
                                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous
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
                                        <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



<?php include("layout/footer.php");?>
