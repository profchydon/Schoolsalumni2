@include('layouts.dashboard_header')

    <section class="dashboard dashboard--empty">

      @include('layouts.dashboard_sidebar')

      <div class="dashboard__body">

        @include('layouts.control')

        @if(count($projects) == 0)

        <div class="dashboard__body__empty">
          <h4 class="empty-font">
            You currently do not have an ongoing project
          </h4>
          <button class="btn btn__empty" onclick="window.location.href='{{ route('create_loggedin') }}'">Create a project</button>
          <h4 class="or-margin empty-font">or</h4>
          <h4 class="empty-font">
            <a href="{{ route('search') }}" class="dashboard__body__link">Donate</a> to an existing
            project
          </h4>
        </div>

        @else

        <section class="dashboard">

          <div class="dashboard__body">

            <div class="dashboard__body__progress">

              <h1 class="dashboard-header">Ongoing projects</h1>

              <p class="progress-margin progress-font">
                You have <?php echo count($projects); ?> ongoing project
              </p>

              <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="dashboard__box">
                <div class="dashboard__box__image">
                  <img
                    src="assets/img/bad-school.jpg"
                    alt="Bad-school"
                    class="dashboard__box__img"
                  />
                </div>
                <div class="dashboard__box__details">
                  <h5 class="dash-font dash-font-header">
                    Ruby Springfield College
                  </h5>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount needed:</p>
                    <p class="dash-font">Nil</p>
                  </div>
                  <div class="dashboard__box__amount">
                    <p class="dash-font dash-font-title">Amount left:</p>
                    <p class="dash-font">NGN 10,000,000</p>
                  </div>
                  <button class="btn btn__progress">View details</button>
                </div>
              </div>
            </div>
          </div>

            </div>
          </div>

        </section>

        @endif


      </div>
    </section>

@include('layouts.dashboard_footer')
