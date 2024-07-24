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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                About Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <a href="{{ route('about.index') }}" class="nav-link {{ Route::currentRouteName() == 'about.index' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('production.index') }}" class="nav-link {{ Route::currentRouteName() == 'production.index' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Production</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('certificate.index') }}" class="nav-link {{ Route::currentRouteName() == 'certificate.index' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Certificate</p>
                </a>
              </li>
             
            </ul>
          </li>

          

          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link {{ Route::currentRouteName() == 'product.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Product
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

          <li class="nav-item">
            <a href="{{ route('katalog.index') }}" class="nav-link {{ Route::currentRouteName() == 'katalog.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>
                Katalog
              </p>
            </a>
           
          </li>

           

          <li class="nav-item">
            <a href="{{ route('company.index') }}" class="nav-link {{ Route::currentRouteName() == 'company.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-building"></i>
              <p>
              Reference Company
              </p>
            </a>
           
          </li>

          <li class="nav-item">
            <a href="{{ route('contact.index') }}" class="nav-link {{ Route::currentRouteName() == 'contact.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Contact
              </p>
            </a>
           
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>