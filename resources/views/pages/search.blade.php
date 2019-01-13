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
        <use xlink:href="{{ asset('/img/sprite.svg#icon-magnifying-glass') }}"></use>
      </svg>
    </button>
  </form>
  
  <div class="search__boxes">

    @foreach($schools as $key => $school)
    <div class="search__box">
      <div class="search__box__items">
        <div class="search__box__text">
          <p class="box-font box-font-title"> {{ $key }}</p>
          <p class="box-font">Ikeja, Lagos</p>
        </div>
        <a href="school/{{ $key }}/projects" class="btn btn__click"> {{ $school }} Projects </a>

      </div>
    </div>
    @endforeach

  </div>

</section>

@include('layouts.footer')
