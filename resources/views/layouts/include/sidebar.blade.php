<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" # ">
        
        <span class="ms-4 text-white">Panou control</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link text-white  {{ Request::is('dashboard') ? 'active':'' }}" href="dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Prima pagină</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('products') ? 'active':'' }}" href="{{ url('products') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Pachete active</span>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('add-product') ? 'active':'' }}" href="{{ url('add-product') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Adăugare pachet</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('orders') ? 'active':'' }}" href="{{ url('orders') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Comenzi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('users') ? 'active':'' }}" href="{{ url('users') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">people</i>
            </div>
            <span class="nav-link-text ms-1">Membri</span>
          </a>
        </li>
        
      </ul>
    </div>
  </aside>