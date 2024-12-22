<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>ACS</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a href="{{route('admin.dashboard')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          
        </a>
    
      </li>
     
      <li class="treeview {{ request()->routeIs(['all.user', 'add.user','edit.user']) ? 'active menu-open' : '' }}">
        <a href="#">
          <i class="fa fa-users"></i> <span>User Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="{{ request()->routeIs(['all.user', 'add.user']) ? 'display: block;' : '' }}">
          <li class="{{ request()->routeIs('all.user') ? 'active' : '' }}"><a href="{{route('all.user')}}"><i class="fa fa-circle-o"></i>Users List</a></li>
          <li class="{{ request()->routeIs('add.user') ? 'active' : '' }}"><a href="{{route('add.user')}}"><i class="fa fa-circle-o"></i>Add User</a></li>
        </ul>
      </li>

      <li class="treeview {{ request()->routeIs(['all.user', 'add.user','edit.user']) ? 'active menu-open' : '' }}">
        <a href="#">
          <i class="fa fa-sliders"></i> <span>Slider Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="{{ request()->routeIs(['all.slider', 'add.slider']) ? 'display: block;' : '' }}">
          <li class="{{ request()->routeIs('all.slider') ? 'active' : '' }}"><a href="{{route('all.slider')}}"><i class="fa fa-circle-o"></i>Slider</a></li>
          <li class="{{ request()->routeIs('add.slider') ? 'active' : '' }}"><a href="{{route('add.slider')}}"><i class="fa fa-circle-o"></i>Add Slider</a></li>
        </ul>
      </li>
      
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>