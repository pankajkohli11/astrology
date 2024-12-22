@extends('admin.layouts.app')

@section('title', 'Dashboard - Admin')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
   <div class="page-content">

         <div class="card radius-10">
         <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
            <div class="col">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <h5 class="mb-0">9526</h5>
                     <div class="ms-auto">
                                  <i class='text-white bx bx-cart fs-3'></i>
                     </div>
                  </div>
                  <div class="my-3 progress" style="height:4px;">
                     <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-white d-flex align-items-center">
                     <p class="mb-0">Total Orders</p>
                     <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <h5 class="mb-0">$8323</h5>
                     <div class="ms-auto">
                                  <i class='text-white bx bx-dollar fs-3'></i>
                     </div>
                  </div>
                  <div class="my-3 progress" style="height:4px;">
                     <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-white d-flex align-items-center">
                     <p class="mb-0">Total Revenue</p>
                     <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <h5 class="mb-0">6200</h5>
                     <div class="ms-auto">
                                  <i class='text-white bx bx-group fs-3'></i>
                     </div>
                  </div>
                  <div class="my-3 progress" style="height:4px;">
                     <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-white d-flex align-items-center">
                     <p class="mb-0">Visitors</p>
                     <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <h5 class="mb-0">5630</h5>
                     <div class="ms-auto">
                                  <i class='text-white bx bx-envelope fs-3'></i>
                     </div>
                  </div>
                  <div class="my-3 progress" style="height:4px;">
                     <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-white d-flex align-items-center">
                     <p class="mb-0">Messages</p>
                     <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                  </div>
               </div>
            </div>
         </div><!--end row-->
      </div>
      
        <div class="row">
         <div class="col-12 col-lg-8 col-xl-8 d-flex">
            <div class="card radius-10 w-100">
            <div class="card-body">
               <div class="d-flex align-items-center">
                  <div>
                     <h5 class="mb-0">Site Traffic</h5>
                  </div>
                  <div class="dropdown options ms-auto">
                     <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                       <i class='bx bx-dots-horizontal-rounded'></i>
                     </div>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                       <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                       <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                     </ul>
                    </div>
               </div>
               <div class="gap-2 my-3 d-flex align-items-center ms-auto font-13">
                  <span class="px-1 border rounded cursor-pointer"><i class="text-white bx bxs-circle me-1"></i>New Visitor</span>
                  <span class="px-1 border rounded cursor-pointer"><i class="bx bxs-circle me-1 text-light-1"></i>Old Visitor</span>
               </div>
               <div class="chart-container-1">
                <canvas id="chart1"></canvas>
               </div>
            </div>
            <div class="text-center row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group border-top">
              <div class="col">
               <div class="p-3">
                 <h5 class="mb-0">45.87M</h5>
                 <small class="mb-0">Overall Visitor <span> <i class="align-middle bx bx-up-arrow-alt"></i> 2.43%</span></small>
               </div>
              </div>
              <div class="col">
               <div class="p-3">
                 <h5 class="mb-0">15:48</h5>
                 <small class="mb-0">Visitor Duration <span> <i class="align-middle bx bx-up-arrow-alt"></i> 12.65%</span></small>
               </div>
              </div>
              <div class="col">
               <div class="p-3">
                 <h5 class="mb-0">245.65</h5>
                 <small class="mb-0">Pages/Visit <span> <i class="align-middle bx bx-up-arrow-alt"></i> 5.62%</span></small>
               </div>
              </div>
            </div>
            </div>
         </div>
      
         <div class="col-12 col-lg-4 col-xl-4 d-flex">
         
            <div class="overflow-hidden card radius-10 w-100">
              <div class="card-body">
               <div class="mb-2 d-flex align-items-center">
                  <div>
                     <h5 class="mb-0">Weekly sales</h5>
                  </div>
                  <div class="dropdown options ms-auto">
                     <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                       <i class='bx bx-dots-horizontal-rounded'></i>
                     </div>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                       <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                       <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                     </ul>
                    </div>
               </div>
               <div class="chart-js-container2">
               <div class="piechart-legend">
                 <h3 class="mb-1">95K</h3>
                 <h6 class="mb-0">Total sales</h6>
                </div>
                 <canvas id="chart2"></canvas>
                </div>
              </div>
              <div class="table-responsive">
               <table class="table mb-0 align-items-center">
                 <tbody>
                  <tr class="border-top">
                    <td><i class="text-white bx bxs-circle me-2"></i> Direct</td>
                    <td>$5856</td>
                    <td>+55%</td>
                  </tr>
                  <tr>
                    <td><i class="bx bxs-circle text-light-2 me-2"></i>Affiliate</td>
                    <td>$2602</td>
                    <td>+25%</td>
                  </tr>
                  <tr>
                    <td><i class="bx bxs-circle text-light-3 me-2"></i>E-mail</td>
                    <td>$1802</td>
                    <td>+15%</td>
                  </tr>
                 </tbody>
               </table>
              </div>
            </div>
         </div>
         </div><!--End Row-->


         <div class="row row-cols-1 row-cols-lg-3">
         <div class="col">
            <div class="card radius-10">
             <div class="card-body">
               <div class="d-flex align-items-center">
                <div class="w_chart easy-dash-chart1" data-percent="60">
                  <span class="w_percent"></span>
                </div>
                <div class="ms-3">
                  <h6 class="mb-0">Facebook Followers</h6>
                  <small class="mb-0">22.14% <i class='align-middle bx bxs-up-arrow me-1'></i>Since Last Week</small>
                </div>
                <div class="text-white ms-auto fs-1"><i class='bx bxl-facebook'></i></div>
               </div>
             </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
             <div class="card-body">
               <div class="d-flex align-items-center">
                <div class="w_chart easy-dash-chart2" data-percent="65">
                  <span class="w_percent"></span>
                </div>
                <div class="ms-3">
                  <h6 class="mb-0">Twitter Tweets</h6>
                  <small class="mb-0">32.15% <i class='align-middle bx bxs-up-arrow me-1'></i>Since Last Week</small>
                 </div>
                 <div class="text-white ms-auto fs-1"><i class='bx bxl-twitter'></i></div>
               </div>
             </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
             <div class="card-body">
               <div class="d-flex align-items-center">
                <div class="w_chart easy-dash-chart3" data-percent="75">
                  <span class="w_percent"></span>
                </div>
                <div class="ms-3">
                  <h6 class="mb-0">Youtube Subscribers</h6>
                  <small class="mb-0">58.24% <i class='align-middle bx bxs-up-arrow me-1'></i>Since Last Week</small>
                 </div>
                 <div class="text-white ms-auto fs-1"><i class='bx bxl-youtube'></i></div>
               </div>
             </div>
            </div>
          </div>
         </div><!--End Row-->


         <div class="row">
            <div class="col-12 col-lg-12 col-xl-6">
              <div class="card radius-10">
               <div class="card-body">
                  <div class="mb-3 d-flex align-items-center">
                     <div>
                        <h5 class="mb-0">Selling Region</h5>
                     </div>
                     <div class="dropdown options ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                           <i class='bx bx-dots-horizontal-rounded'></i>
                        </div>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                           <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                           <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                     </div>
                  </div>
                <div id="dashboard-map" style="height: 335px;"></div>
               </div>
               <div class="table-responsive">
                  <table class="table mb-0 table-hover align-items-center">
                    <thead class="table-light">
                      <tr>
                         <th>Country</th>
                         <th>Income</th>
                         <th>Trend</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td><i class="flag-icon flag-icon-ca me-2"></i> USA</td>
                         <td>$4,586</td>
                         <td><span id="trendchart1"></span></td>
                      </tr>
                      <tr>
                         <td><i class="flag-icon flag-icon-us me-2"></i>Canada</td>
                         <td>$2,089</td>
                         <td><span id="trendchart2"></span></td>
                      </tr>
         
                      <tr>
                         <td><i class="flag-icon flag-icon-in me-2"></i>India</td>
                         <td>$3,039</td>
                         <td><span id="trendchart3"></span></td>
                      </tr>
         
                      <tr>
                         <td><i class="flag-icon flag-icon-gb me-2"></i>UK</td>
                         <td>$2,309</td>
                         <td><span id="trendchart4"></span></td>
                      </tr>
         
                      <tr>
                         <td><i class="flag-icon flag-icon-de me-2"></i>Germany</td>
                         <td>$7,209</td>
                         <td><span id="trendchart5"></span></td>
                      </tr>
                      
                   </tbody>
                </table>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-lg-12 col-xl-6">
               <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="overflow-hidden card radius-10">
                  <div class="card-body">
                     <p class="mb-2">Page Views</p>
                     <h4 class="mb-0">8,293 <small class="text-white font-13">5.2% <i class="bx bx-up-arrow-alt"></i></small></h4>
                  </div>
                  <div class="chart-container-2">
                    <canvas id="chart3"></canvas>
                  </div>
                 </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="overflow-hidden card radius-10">
                  <div class="card-body">
                     <p class="mb-2">Total Clicks</p>
                     <h4 class="mb-0">7,493 <small class="text-white font-13">1.4% <i class="bx bx-up-arrow-alt"></i></small></h4>
                     
                  </div>
                  <div class="chart-container-2">
                     <canvas id="chart4"></canvas>
                  </div>
                 </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="card radius-10">
                  <div class="text-center card-body">
                     <p class="mb-4">Total Downloads</p>
                     <input class="knob" data-width="190" data-height="190" data-readOnly="true" data-thickness=".15" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(0, 0, 0, 0.08)" data-fgcolor="#fff" data-max="15000" value="8550"/>
                     <hr>
                     <p class="mb-0 text-center small-font">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
                  </div>
                 </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="card radius-10">
                  <div class="card-body">
                     <p>Device Storage</p>
                     <h4 class="mb-3">42620/50000</h4>
                     <hr>
                     <div class="mb-4 progress-wrapper">
                       <p>Documents <span class="float-end">12GB</span></p>
                       <div class="progress" style="height:5px;">
                          <div class="bg-white progress-bar" style="width:80%"></div>
                       </div>
                     </div>
                     
                     <div class="mb-4 progress-wrapper">
                       <p>Images <span class="float-end">10GB</span></p>
                       <div class="progress" style="height:5px;">
                          <div class="bg-white progress-bar" style="width:60%"></div>
                       </div>
                     </div>
                     
                     <div class="mb-4 progress-wrapper">
                        <p>Mails <span class="float-end">5GB</span></p>
                       <div class="progress" style="height:5px;">
                          <div class="bg-white progress-bar" style="width:40%"></div>
                       </div>
                     </div>
                     
                  </div>
                 </div>
                </div>
               </div>
            </div>
          </div><!--End Row-->



           
   </div>
</div>
<!--end page wrapper -->
@endsection
         
         
      