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
      <img src="assets/img/menu.svg" alt="" class="nav__burger">
    </a>
    <input type="checkbox" class="nav__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="nav__button">Men</label>

    <div class="nav__background">
      <ul class="nav__list">
        <li class="nav__bar__item">
          <a href="{{ route('index') }}" class="nav__bar__link nav-font active">
            Home
          </a>
          <div class="nav__bar__link__line"></div>
        </li>
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
        <li class="nav__bar__item">
          <button onclick="window.location.href='{{ route('login') }}'" class="btn btn__nav">Log in</button>
        </li>
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
    <li class="nav__bar__item">
      <a href="{{ route('index') }}" class="nav__bar__link nav-font active">
        Home
      </a>
      <div class="nav__bar__link__line"></div>
    </li>
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
    <li class="nav__bar__item">
      <button onclick="window.location.href='{{ route('login') }}'" class="btn btn__nav">Log in</button>
    </li>
  </ul>
</nav>
