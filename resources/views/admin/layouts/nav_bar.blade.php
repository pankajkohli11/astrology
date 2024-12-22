<!--start header -->
<header>
   <div class="topbar d-flex align-items-center">
      <nav class="gap-3 navbar navbar-expand">
         <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
         </div>
         <div class="search-bar flex-grow-1">
            <div class="position-relative search-bar-box">
               <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
               <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
            </div>
         </div>
         <div class="top-menu ms-auto">
            <ul class="gap-1 navbar-nav align-items-center">
               <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                  <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                  </a>
               </li>
              

               <li class="nav-item dropdown dropdown-app" style="display: none">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                  <div class="p-0 dropdown-menu dropdown-menu-end">
                     <div class="p-2 my-2 app-container">
                       
      
                     </div>
                  </div>
               </li>

               <li class="nav-item dropdown dropdown-large">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">0 </span>
                     <i class='bx bx-bell'></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end" style="display: none">
                     
                     <div class="header-notifications-list">
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="user-online">
                                 <img src="{{ asset('admin/assets/images/avatars/avatar-1.png') }}" class="msg-avatar" alt="user avatar">
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec ago</span></h6>
                                 <p class="msg-info">The standard chunk of lorem</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="notify bg-light-danger text-danger">dc</div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min ago</span></h6>
                                 <p class="msg-info">You have received new orders</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="user-online">
                                 <img src="{{ asset('admin/assets/images/avatars/avatar-2.png') }}" class="msg-avatar" alt="user avatar">
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14 sec ago</span></h6>
                                 <p class="msg-info">Many desktop publishing packages</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="notify bg-light-success text-success">
                                 <img src="{{ asset('admin/assets/images/app/outlook.png') }}" width="25" alt="user avatar">
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">Account Created<span class="msg-time float-end">28 min ago</span></h6>
                                 <p class="msg-info">Successfully created new email</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="notify bg-light-info text-info">Ss</div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
                                 <p class="msg-info">Your new product has been approved</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="user-online">
                                 <img src="{{ asset('admin/assets/images/avatars/avatar-4.png') }}" class="msg-avatar" alt="user avatar">
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15 min ago</span></h6>
                                 <p class="msg-info">Making this the first true generator</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i></div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs ago</span></h6>
                                 <p class="msg-info">Successfully shipped your item</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="notify bg-light-primary">
                                 <img src="{{ asset('admin/assets/images/app/github.png') }}" width="25" alt="user avatar">
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day ago</span></h6>
                                 <p class="msg-info">24 new authors joined last week</p>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                              <div class="user-online">
                                 <img src="{{ asset('admin/assets/images/avatars/avatar-8.png') }}" class="msg-avatar" alt="user avatar">
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs ago</span></h6>
                                 <p class="msg-info">It was popularised in the 1960s</p>
                              </div>
                           </div>
                        </a>
                     </div>
                     
                     <a href="javascript:;">
                        <div class="text-center msg-footer">
                           <button class="btn btn-light w-100">View All Notifications</button>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="nav-item dropdown dropdown-large" style="display: none">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                     <i class='bx bx-shopping-bag'></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                     <a href="javascript:;">
                        <div class="msg-header">
                           <p class="msg-header-title">My Cart</p>
                           <p class="msg-header-badge">10 Items</p>
                        </div>
                     </a>
                     <div class="header-message-list">
                        <a class="dropdown-item" href="javascript:;">
                            <div class="gap-3 d-flex align-items-center">
                                <div class="position-relative">
                                    <div class="cart-product rounded-circle bg-light">
                                        <img src="{{ asset('admin/assets/images/products/11.png') }}" alt="product image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 cart-product-title">Men White T-Shirt</h6>
                                    <p class="mb-0 cart-product-price">1 X $29.00</p>
                                </div>
                                <div>
                                    <p class="mb-0 cart-price">$250</p>
                                </div>
                                <div class="cart-product-cancel"><i class="bx bx-x"></i></div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="gap-3 d-flex align-items-center">
                                <div class="position-relative">
                                    <div class="cart-product rounded-circle bg-light">
                                        <img src="{{ asset('admin/assets/images/products/02.png') }}" alt="product image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 cart-product-title">Men White T-Shirt</h6>
                                    <p class="mb-0 cart-product-price">1 X $29.00</p>
                                </div>
                                <div>
                                    <p class="mb-0 cart-price">$250</p>
                                </div>
                                <div class="cart-product-cancel"><i class="bx bx-x"></i></div>
                            </div>
                        </a>
                        <!-- Repeat for all products -->
                        <a class="dropdown-item" href="javascript:;">
                            <div class="gap-3 d-flex align-items-center">
                                <div class="position-relative">
                                    <div class="cart-product rounded-circle bg-light">
                                        <img src="{{ asset('admin/assets/images/products/09.png') }}" alt="product image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 cart-product-title">Men White T-Shirt</h6>
                                    <p class="mb-0 cart-product-price">1 X $29.00</p>
                                </div>
                                <div>
                                    <p class="mb-0 cart-price">$250</p>
                                </div>
                                <div class="cart-product-cancel"><i class="bx bx-x"></i></div>
                            </div>
                        </a>
                    </div>
                    
                     <a href="javascript:;">
                        <div class="text-center msg-footer">
                           <div class="mb-3 d-flex align-items-center justify-content-between">
                              <h5 class="mb-0">Total</h5>
                              <h5 class="mb-0 ms-auto">$489.00</h5>
                           </div>
                           <button class="btn btn-light w-100">Checkout</button>
                        </div>
                     </a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="px-3 user-box dropdown">
            <a class="gap-3 d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <img src="{{asset('user/img/'.auth()->user()->picture)}}" class="user-img" alt="user avatar">
               <div class="user-info">
                  <p class="mb-0 user-name">{{auth()->user()->firstName}}</p>
                  <p class="mb-0 designattion">{{auth()->user()->role}}</p>
               </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
               <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
               </li>
               <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
               </li>
               <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
               </li>
               <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
               </li>
               <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
               </li>
               <li>
                  <div class="mb-0 dropdown-divider"></div>
               </li>
               <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</header>
<!--end header -->