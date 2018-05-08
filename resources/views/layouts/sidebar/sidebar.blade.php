<div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="/images/uploads/avatar/{{ Auth::user()->avatar }}" alt="">
            <p class="name">{{Auth::user()->name}}</p>
            <p class="designation">{{ Auth::user()->role->name }}</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <img src="/images/icons/home.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="/images/icons/gdm.png" alt="">
                <span class="menu-title">Gdm<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('gdm.instore')}}">
                      Instore
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('gdm.transfer') }}">
                      Transfer
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html">
                      Staging
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/index.html">
                <img src="/images/icons/spp.png" alt="">
                <span class="menu-title">Spare Part</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-elements/buttons.html">
                <img src="/images/icons/ws.png" alt="">
                <span class="menu-title">Workshop</span>
              </a>
            </li> 
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#Service" aria-expanded="false" aria-controls="sample-pages">
                <img src="/images/icons/screwdriver.png" alt="">
                <span class="menu-title">Service<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="Service">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('gdm.instore')}}">
                      Field Service
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('gdm.transfer') }}">
                      Epc
                    </a>
                  </li>
                </ul>
              </div>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#Movement" aria-expanded="false" aria-controls="sample-pages">
                <img src="/images/icons/mv.png" alt="">
                <span class="menu-title">Movement<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="Movement">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('gdm.instore')}}">
                      Penempatan
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('gdm.transfer') }}">
                      Penarikan
                    </a>
                  </li>
                </ul>
              </div>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-elements/typography.html">
                <img src="/images/icons/inv.png" alt="">
                <span class="menu-title">Invoice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/index.html">
                <img src="/images/icons/kar.png" alt="">
                <span class="menu-title">Karyawan</span>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">
                <img src="/images/icons/logout.png" alt="">
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>