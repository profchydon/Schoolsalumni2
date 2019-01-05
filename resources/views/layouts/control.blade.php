<div class="wrapper-dropdown">
  <div id="dd" class="wrapper-dropdown-5" tabindex="1">
    Hello, {{ Auth::user()->first_name}}
    <ul class="dropdown">
      <li>
        <a href="{{ route('profile') }}">
          <i class="fa fa-user"></i> Profile
        </a>
      </li>
      <li>
        <a href="{{ route('logout') }}"><i class="fa fa-times"></i> Log out</a>
      </li>
    </ul>
  </div>
</div>
