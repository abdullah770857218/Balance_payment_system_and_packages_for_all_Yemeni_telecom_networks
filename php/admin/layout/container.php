        <!-- قائمة المحتوى  -->
        <div class="container-fluid">

           <!--add user  -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">اسم المستخدم  </h1>
     
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- قائمة عدد المستخدمين  -->
            <div class="col-xl-4 col-md-6 mb-6">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> عدد المستخدمين </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">العدد للمستخدمين </div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- قائمة صاقي الارباح  -->
            <div class="col-xl-4 col-md-6 mb-6">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">صافي الارباح </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto"> 
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>

           <!--add user  -->
<!-- Modal -->
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
                   <label>الاسم </label>
                      <input type="text" name="name" >
                <br>
                      <label> كلمة المرور </label>
                    <input type="password"  name="password">
                    <br>
                      <label>رقم الجوال </label>
                       <input type="tel" name="phone">
          <br>
          <label> المدينة </label>
          <input type="text" name="city">
          <br>
          <label>العنوان </label>
          <input type="text" name="address">
          <br>
          <label>اسم المنشاء المستخدم </label>
                      <input type="text" name="name" >
                <br>
          <label>تاريخ الانشاء </label>
          <input type="date" name="creat_at">
          <br>
          
          <label>المبلغ الافتتاحي </label>
          <input type="number" name="balence">
          


        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
        <button type="button" class="btn btn-primary">حفظ</button>
      </div>
    </div>
  </div>
</div>
        
                <!-- /.container-fluid -->
         <div >
          <div clas="row">
          
            <div class="col-lg-2 col-md-6 mb-4 ">
    
              
             </div>
               </div>
                  </div>


            
             <!-- الجداول  -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> المستخدمين </h6>
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
                                <label> :بحث <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                </label>
                            </div>
                        </div>
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
                    
          
                  <tbody>
                    <script src="../../jstest/‫‫javaapi main.js"></script>
      <tr role="row" class="even">
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