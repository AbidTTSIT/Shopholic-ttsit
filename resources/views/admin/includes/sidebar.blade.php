<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="active">
          <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img" /><span>
              Dashboard</span>
          </a>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="{{ asset('assets/admin/img/icons/product.svg') }}" alt="img" /><span>
              Product</span>
            <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="{{ route('products.index') }}">Product List</a></li>
            <li><a href="{{ route('products.create') }}">Add Product</a></li>
            <li><a href="{{ route('categories.index') }}">Category List</a></li>
            <li><a href="{{ route('categories.create') }}">Add Category</a></li>
            <li><a href="{{ route('subcategories.index') }}">Sub Category List</a></li>
            <li><a href="{{ route('subcategories.create') }}">Add Sub Category</a></li>
            <li><a href="{{ route('brands.index') }}">Brand List</a></li>
            <li><a href="{{ route('brands.create') }}">Add Brand</a></li>
          </ul>
        </li>

        <li class="submenu">
          <a href="javascript:void(0);"><img src="{{ asset('assets/admin/img/icons/users1.svg') }}" alt="img" /><span>
              Users</span>
            <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="newuser.html">New User </a></li>
            <li><a href="userlists.html">Users List</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="{{ asset('assets/admin/img/icons/settings.svg') }}" alt="img" /><span>
              Settings</span>
            <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="generalsettings.html">General Settings</a></li>
            <li><a href="emailsettings.html">Email Settings</a></li>
            <li><a href="paymentsettings.html">Payment Settings</a></li>
            <li><a href="currencysettings.html">Currency Settings</a></li>
            <li><a href="grouppermissions.html">Group Permissions</a></li>
            <li><a href="taxrates.html">Tax Rates</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>