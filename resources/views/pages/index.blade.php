@include('layouts.header')

@include('layouts.nav_landing')

  <div class="header">
    <div class="header__background"></div>

    <img src="{{ asset('img/Banner_optimized.jpg') }}" srcset="{{ asset('img/Banner_optimized.jpg 1x, assets/img/Banner.jpg 2x') }}" alt="Banner" class="header__image">

    <div class="header__text">
      <h1 class="header-font">Help Make an Impact in Education in Nigeria</h1>
    </div>
    <div class="header__button">
      <a href="#service" class="btn btn__header">Learn How</a >
    </div>
  </div>
  <section class="problem">
    <div class="problem__statement">
      <div class="problem__text">
        <h4 class="landing-font landing-font-header">
          Imagine you couldn't read anything on this page. Imagine walking down the street, not being able to read
          signs or being able to add up your wages.<span class="orange-color"> Where would you be today?</span>
        </h4>
        <p class="land-margin landing-font">
          Public high schools in Nigeria have practically collapsed over the years because of poor funding leaving
          millions of children out of school as well as receiving poor education. Nigeria has the highest number of
          children out of school in the world. 80% of Nigerian children who complete primary school cannot read.
        </p>
        <p class="land-margin2 landing-font">
          Make a donation today to not only give children the chance to go to school, but also save their lives and protect their childhoods.
        </p>
      </div>

    </div>
  </section>
  <section class="product">
    <h1 class="logo-font" style="margin: 8% 0;">logo</h1>
    <div class="product__title">
      <p class="landing-font landing-font-title">What We Do</p>
      <div class="product__title__line"></div>
    </div>
    <div class="product__text">
      <p class="landing-font">
        Schoolsalumni is a school project donation and execution platform which allows projects to be carried out in schools across Nigeria to make quality education accessible to children of low-income background.
      </p>
    </div>
    <button class="btn btn__learn" onclick="window.location.href='{{ route('about') }}'">Learn More</button>
  </section>
  <section class="service" id="service">
    <div class="service__title">
      <p class="landing-font landing-font-title">How it Works</p>
      <div class="service__title__line"></div>
    </div>
    <div class="service__boxes">
      <div class="service__box">
        <img src="{{ asset('img/Create.svg') }}" alt="Create" class="service__box__icon">
        <div class="service__box__texts">
          <a href="create.html" class="service__box__link">
            <p class="service-font service-font-title">Create a Project</p>
          </a>
          <p class="service-margin service-font">Initiate a project in your school or other schools.</p>
        </div>
      </div>

      <div class="service__box">
        <img src="{{ asset('img/Fund.svg') }}" alt="Create" class="service__box__icon">
        <div class="service__box__texts">
          <a href="search.html" class="service__box__link">
            <p class="service-font service-font-title">Fund Projects</p>
          </a>
          <p class="service-margin service-font">Fund personally created projects or pick from available projects.</p>
        </div>
      </div>
      <div class="service__box">
        <img src="{{ asset('img/Monitor.svg') }}" alt="Create" class="service__box__icon">
        <div class="service__box__texts">
          <a href="dashboard.html" class="service__box__link">
            <p class="service-font service-font-title">Monitor project</p>
          </a>
          <p class="service-margin service-font">Get progress reports of ongoing projects.</p>
        </div>
      </div>
    </div>

    @if(Auth::user())
      <button onclick="window.location.href='{{ route('create_loggedin') }}'" class="btn btn__start">Create Project</button>
    @else
        <button onclick="window.location.href='{{ route('create') }}'" class="btn btn__start">Get Started</button>
    @endif

  </section>

@include('layouts.footer')
