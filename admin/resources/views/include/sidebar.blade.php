 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('/img/wolf.png') }}" alt="WOLF" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WOLF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hi, {{ Auth::user()->name }}</a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              
           
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link {{ Route::currentRouteName() == 'about.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
               About Us
              </p>
            </a>
           
          </li>
        

          <li class="nav-item">
            <a href="{{ route('slider.index') }}" class="nav-link {{ Route::currentRouteName() == 'slider.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Slider
              </p>
            </a>
           
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>