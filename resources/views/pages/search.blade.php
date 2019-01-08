@include('layouts.header')

@include('layouts.nav')

<section class="search">
  <div class="search__logo">
    <h1 class="logo-font">logo</h1>
  </div>
  <div class="project__header project__header--2">
    @if(Auth::user())
      <button type="button" class="blue-bg project__header__create" onclick="window.location.href='{{ route('create_loggedin') }}'">CREATE A PROJECT</button>
    @else
      <button type="button" class="blue-bg project__header__create" onclick="window.location.href='{{ route('create') }}'">CREATE A PROJECT</button>
    @endif
    <button class="blue-bg project__header__fund" onclick="window.location.href='{{ route('search') }}'">FUND EXISTING PROJECT</button>
  </div>
  <div class="center-text">
    <p class="title-margin search-title">Available Projects</p>
  </div>
  <form action="#" class="search__search">
    <input type="text" class="search__search__input" placeholder="Search School">
    <button class="btn btn__search">
      <svg class="search__search__icon">
        <use xlink:href="assets/img/sprite.svg#icon-magnifying-glass"></use>
      </svg>
    </button>
  </form>
  <div class="search__boxes">
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">King’s College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">5 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Queen’s College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">10 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Christolat Garden Montesorri Secondary School</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">2 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title">Ruby Springfield College</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <button class="btn btn__box" onclick="window.location.href='school.html'">12 Projects</button>
      </div>
    </div>

  </div>

  <div class="center-text">
    <div class="pagination" id="myDIV">
      <button class="pagination__item pagination__item--word pagination-font">Prev page</button>
      <button class="btns pagination__item pagination-font">1</button>
      <button class="btns actives pagination__item pagination-font">2</button>
      <button class="btns pagination__item pagination-font">3</button>
      <button class="btns pagination__item pagination-font">4</button>
      <button class="btns pagination__item pagination-font">5</button>
      <button class="pagination__item pagination__item--word pagination-font">Next page</button>
    </div>
  </div>

</section>

@include('layouts.footer')
