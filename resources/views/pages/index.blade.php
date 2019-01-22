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
          <p class="landing-font">
            Majority of students in Nigeria attend public schools. It is rather
            disheartening that most of the children who are in these schools are
            not learning. There is a massive learning crisis and all education
            indices are poor: learning outcomes, literacy levels etc. and even
            after 6 years of primary education, majority cannot read and write.
          </p>
          <p class="land-margin landing-font"></p>
          <p class="land-margin2 landing-font">
            This however was the not the case many years ago as majority of
            today’s leaders are products of public education. This clearly shows
            that something is definitely missing in the public school system and
            considering the importance of public education in Nigeria, there is
            radical and desperate need to restore the lost glory in this system.
          </p>
          <h4 class="land-margin2 landing-font landing-font-header">
            The journey starts <span class="orange-color">now!</span>
          </h4>
        </div>
    </div>
  </section>
  <section class="product">
    <div class="project__logo">
        <img src="{{ asset('img/Logo.svg') }}" alt="Logo" class="product__logo" />
    </div>
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
