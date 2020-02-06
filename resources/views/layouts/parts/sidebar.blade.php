<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
  <i class="fas fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
    <div class="sidebar-brand">
      <a href="#">Admin Panel</a>
      <div id="close-sidebar">
        <i class="fas fa-times"></i>
      </div>
    </div>
    <div class="sidebar-header">
      <div class="user-pic">
        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
          alt="User picture">
      </div>
      <div class="user-info">
        <span class="user-name"> 
          <strong>{{Auth::user()->name}}</strong>
        </span>
        <span class="user-role">Administrator</span>
        <span class="user-status">
          <i class="fa fa-circle"></i>
          <span>Online</span>
        </span>
      </div>
    </div>
    <!-- sidebar-header  -->
    <div class="sidebar-search">
      <div>
        {{-- <div class="input-group">
          <input type="text" class="form-control search-menu" placeholder="Search...">
          <div class="input-group-append">
            <span class="input-group-text">
              <i class="fa fa-search" aria-hidden="true"></i>
            </span>
          </div>
        </div> --}}
      </div>
    </div>
    <!-- sidebar-search  -->
    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <span>General</span>
        </li>


        <li class="sidebar-dropdown ">
          <a href="#">
            <i class="fas fa-flag-checkered"></i>
            <span>Notice</span>
          </a>
          <div class="sidebar-submenu" style=" {{ Request::is('*/notice*') ? 'display: block;' : '' }}">
            <ul>
              <li >
                <a href="{{ url('/admin/notice/1/edit') }}" style=" {{ Request::is('*/notice/1/edit*') ? 'background: #212529;' : '' }}">Add Notice</a>
              </li>
               
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <!-- sidebar-menu  -->
  </div>
  <!-- sidebar-content  -->
  <div class="sidebar-footer">
    <a href="#">
      <i class="fa fa-bell"></i>
      <span class="badge badge-pill badge-warning notification">3</span>
    </a>
    <a href="#">
      <i class="fa fa-envelope"></i>
      <span class="badge badge-pill badge-success notification">7</span>
    </a>
    <a href="#">
      <i class="fa fa-cog"></i>
      <span class="badge-sonar"></span>
    </a>
    <a href="#">
      <i class="fa fa-power-off"></i>
    </a>
  </div>
</nav>
<!-- sidebar-wrapper  -->












