<!-- Respondsive Navigation -->
<div class="header__responsive-nav">
  <!-- overlay -->
  <div id="search">
    <a href="#" id="close-btn">
      <em class="fa fa-times"></em>
    </a>
    <input placeholder="type here" id="searchbox" type="search" />
  </div>
  <!--- /overlay -->
  <nav class="nav">
    <a href="#">
      <img src="{{ asset('img/menu.svg') }}" alt="" class="nav__burger">
    </a>
    <input type="checkbox" class="nav__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="nav__button">Men</label>

    <div class="nav__background">
      <ul class="nav__list">

        @if(Auth::user())
        <li class="nav__item">
          <a href="{{ route('dashboard') }}" class="nav__bar__link nav-font">
            Dashboard
          </a>
        </li>
        @else
        <li class="nav__item">
          <a href="{{ route('index') }}" class="nav__bar__link nav-font active">
            Home
          </a>
        </li>
        @endif

        <li class="nav__item">
          <a href="{{ route('about') }}" class="nav__bar__link nav-font">
            About
          </a>
          <div class="nav__bar__link__line"></div>
        </li>
        <li class="nav__item">
          <a href="{{ route('all-projects') }}" class="nav__bar__link nav-font">
            Projects
          </a>
          <div class="nav__bar__link__line"></div>
        </li>
        <li class="nav__item">
          <a href="{{ route('contact') }}" class="nav__bar__link nav-font">
            Contact us
          </a>
          <div class="nav__bar__link__line"></div>
        </li>
        <li class="nav__item">
          <button onclick="window.location.href='{{ route('search') }}'" class="btn btn__fund">Fund a project</button>
        </li>
        @if(Auth::user())
        <li class="nav__item">
          <button onclick="window.location.href='{{ route('logout') }}'" class="btn btn__nav">Log Out</button>
        </li>
        @else
          <li class="nav__item">
            <button onclick="window.location.href='{{ route('login') }}'" class="btn btn__nav">Log in</button>
          </li>
        @endif

      </ul>
    </div>

    <!-- trigger search with a link to an anchor -->
    <a class="fr nav__search-btn" href='#search'>
      <em class="fa fa-search"></em>
    </a>
    <!-- /trigger search with a link to an anchor -->

    </ul>
  </nav>
</div>

<nav class="nav__bar nav__bar--land">
  <ul class="nav__bar__items">
    @if(Auth::user())
    <li class="nav__bar__item">
      <a href="{{ route('dashboard') }}" class="nav__bar__link nav-font active">
        Dashboard
      </a>
      <div class="nav__bar__link__line"></div>
    </li>
    @else
    <li class="nav__bar__item">
      <a href="{{ route('index') }}" class="nav__bar__link nav-font active">
        Home
      </a>
      <div class="nav__bar__link__line"></div>
    </li>
    @endif
    <li class="nav__bar__item">
      <a href="{{ route('about') }}" class="nav__bar__link nav-font">
        About
      </a>
      <div class="nav__bar__link__line"></div>
    </li>
    <li class="nav__bar__item">
      <a href="{{ route('all-projects') }}" class="nav__bar__link nav-font">
        Projects
      </a>
      <div class="nav__bar__link__line"></div>
    </li>
    <li class="nav__bar__item">
      <a href="{{ route('contact') }}" class="nav__bar__link nav-font">
        Contact us
      </a>
      <div class="nav__bar__link__line"></div>
    </li>
    <li class="nav__bar__item">
      <button onclick="window.location.href='{{ route('search') }}'" class="btn btn__fund">Fund a project</button>
    </li>
    @if(Auth::user())
    <li class="nav__bar__item">
      <button onclick="window.location.href='{{ route('logout') }}'" class="btn btn__nav">Log Out</button>
    </li>
    @else
      <li class="nav__bar__item">
        <button onclick="window.location.href='{{ route('login') }}'" class="btn btn__nav">Log in</button>
      </li>
    @endif
  </ul>
</nav>
