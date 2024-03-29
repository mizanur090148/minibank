<aside class="main-sidebar noprint col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="{{ url('/dashboard') }}" style="line-height: 25px;">
        <div class="d-table m-auto">
          <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{ asset('/backend/images/shards-dashboards-logo.svg') }}" alt="Shards Dashboard">
          <span class="d-none d-md-inline ml-1">Dashboard</span>
        </div>
      </a>
      <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
      </a>
    </nav>
  </div>
  <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
    <div class="input-group input-group-seamless ml-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-search"></i>
        </div>
      </div>
      <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
  </form>
  <div class="nav-wrapper">
    <ul class="nav flex-column">      
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'transaction-profiles') active @endif" href="{{ url('/transaction-profiles') }}">
          <i class="material-icons">note_add</i>
          <span>Transaction Profiles</span>
        </a>
      </li>
     {{--  <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'transactions') active @endif" href="{{ url('/transactions') }}">
          <i class="material-icons">note_add</i>
          <span>Transactions</span>
        </a>
      </li>       --}}
      {{-- <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'account-info') active @endif" href="{{ url('/account-info') }}">
          <i class="material-icons @if(Request::segment(1) == 'account-info') active @endif">person</i>
          <span>Account Info</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'account-info') active @endif" href="{{ url('/account-info') }}">
          <i class="material-icons">note_add</i>
          <span>Account Info</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('/logout') }}">
          <i class="material-icons">logout</i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>
</aside>