    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/product') }}">
            <i class="fa fa-home"></i> หน้าหลัก
        </a>
    </li>
    <li class="nav-item">
        <a  class="nav-link" href="{{ url('/order-product') }}">
            <i class="fa fa-shopping-cart"></i> ตะกร้าของฉัน
        </a>
    </li>
    <li class="nav-item">
        <a  class="nav-link" href="{{ url('/order') }}">
            <i class="fa fa-box"></i> คำสั่งซื้อของฉัน
        </a>
    </li>

    </ul>
    <!-- End of Sidebar -->