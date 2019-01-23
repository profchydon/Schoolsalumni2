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

                  @foreach ($projects as $project)

                  <div class="item">
                    <div class="dashboard__box">
                      <div class="dashboard__box__image">
                        <img
                          src="img/projects/images/{{$project->image1}}"
                          alt="Bad-school"
                          class="dashboard__box__img"
                        />
                      </div>
                      <div class="dashboard__box__details">
                        <h5 class="dash-font dash-font-header">
                          {{ $project->title }}
                        </h5>
                        <div class="dashboard__box__amount">
                          <p class="dash-font dash-font-title">Amount needed:</p>
                          <p class="dash-font">NGN {{ $project->project_cost }}</p>
                        </div>
                        <div class="dashboard__box__amount">
                          <p class="dash-font dash-font-title">Amount raised:</p>
                          <p class="dash-font">NGN {{ $project->amount_raised }}</p>
                        </div>

                        <div class="dashboard__box__amount">
                          <p class="dash-font dash-font-title">Amount left:</p>
                          <?php $amount_left = $project->project_cost - $project->amount_raised ?>
                          <p class="dash-font">NGN {{ $amount_left }}</p>
                        </div>
                        <a href="/projects/project/{{$project->id}}" id="projects-b" class="btn btn__progress">View details</a>

                      </div>
                    </div>
                  </div>

                  @endforeach

              </div>

            </div>
          </div>

        </section>

        @endif


      </div>
    </section>

@include('layouts.dashboard_footer')
