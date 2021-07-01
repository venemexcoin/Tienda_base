@push('style')
<style>
    

@media screen and (min-width: 768px) {
    .mobil {
       display: block;
    }
}

</style>
@endpush
<div>
    
  {{-- inici --}}
  @if(Auth::user()->utype === 'ADM')
  <li class="menu-item menu-item-has-children parent" >
    <a title="My Account" href="#">My Account ({{Auth::user()->name}})</a>
    <ul class="submenu curency" >
      <li class="menu-item" >
        <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
      </li>
      <li class="menu-item">
        <a title="Categories" href="{{route('admin.categories')}}">Categories</a>
      </li>
      <li class="menu-item">
        <a title="Products" href="{{route('admin.products')}}">All Products</a>
      </li>
      <li class="menu-item">
        <a title="Manage home slider" href="{{route('admin.homeslider')}}">Manage home slider</a>
      </li>
      <li class="menu-item">
        <a title="Manage home Categories" href="{{route('admin.homecategories')}}">Manage home Categories</a>
      </li>
      <li class="menu-item">
        <a title="Sale Setting" href="{{route('admin.sale')}}">Sale Setting</a>
      </li>
      <li class="menu-item">
        <a title="All Coupon" href="{{route('admin.coupons')}}">All Coupon</a>
      </li>
      <li class="menu-item">
        <a title="All Orders" href="{{route('admin.orders')}}">All Order</a>
      </li>
      <li class="menu-item">
        <a title="Contact Messages" href="{{route('admin.contact')}}">Contact Messages</a>
      </li>
      <li class="menu-item">
        <a title="Settings" href="{{route('admin.settings')}}">Settings</a>
      </li>
      <li class="menu-item">
        <a title="All Orders" href="{{route('admin.logo')}}">Home Logo</a>
      </li>
      <li class="menu-item" >
        <a title="Dashboard" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
      </li>
      <form id="logout-form" method="POST" action="{{route('logout')}}">
        @csrf
        
      </form>
    </ul>
  </li>
  @else	
  <li class="menu-item menu-item-has-children parent" >
    <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
    <ul class="submenu curency" >
      <li class="menu-item" >
        <a title="Saldo" href="#">Saldo {{Auth::user()->usd}}$</a>
      </li>
      <li class="menu-item" >
        <a title="profile" href="{{ route('profile.show') }}">Profile</a>
      </li>
      <li class="menu-item" >
        <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
      </li>
      <li class="menu-item" >
        <a title="My Orders" href="{{route('user.orders')}}">My Orders</a>
      </li>
      <li class="menu-item" >
        <a title="Change Password" href="{{route('user.changepassword')}}">Change Password</a>
      </li>
      <li class="menu-item" >
        <a title="Dashboard" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      </li>
      <form id="logout-form" method="POST" action="{{route('logout')}}">
        @csrf
        
      </form>
    </ul>
  </li>
  @endif	

{{-- fin  --}}

</div>
