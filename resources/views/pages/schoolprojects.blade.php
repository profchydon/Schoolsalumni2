@include('layouts.header')

@include('layouts.nav')

<section class="school">

      <div class="header-margin center-text">
        <h1 class="school-header school-header-main">{{ $projects[0]->beneficiary_school }} - <span class="school-header">{{ $projects[0]->address }}, {{ $projects[0]->city }} {{ $projects[0]->state }}</span>
        </h1>
      </div>

      <div class="school__boxes">

        @foreach ($projects as $project)

        <div class="school__box">
          <div class="school__box__items">
            <div class="school__box__project">
              <div class="school__box__title">
                <p class="project-title"> {{ $project->title }}</p>
                @if ($project->status == "Ongoing")
                    <p class="sub-margin project-title-sub">(in progress)</p>
                @elseif ($project->status == "Completed")
                    <p class="sub-margin project-title-sub">(Completed)</p>
                @endif

                @if ($project->status == "Ongoing")
                    <img src="{{ asset('img/Ongoing.svg') }}" alt="icon" class="school__box__icon"/>
                @elseif ($project->status == "Completed")
                    <img src="{{ asset('img/Completed.svg') }}" alt="icon" class="school__box__icon"/>
                @endif

              </div>
              <div class="school__box__overview">
                @if (empty($project->image1))
                  <img
                    src="/img/Banner2.jpg"
                    alt="Class"
                    class="school__box__pic"
                  />
                @else
                  <img
                    src="/img/projects/images/{{$project->image1}}"
                    alt="Class"
                    class="school__box__pic"
                  />
                @endif
                <div class="school__box__text school__box__text--2">
                  <div class="school__box__text__amount school__box__text__amount--2">
                    <p class="info-font info-font-title">Beneficiary School</p>
                    <p class="info-margin info-font">{{ $project->beneficiary_school }}</p>
                  </div>
                  <div class="school__box__text__amount school__box__text__amount--2">
                    <p class="info-text-margin info-font info-font-title">Location</p>
                    <p class="info-font">{{ $project->address }}, {{ $project->city }} {{ $project->state }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="school__box__description">
              <p class="description-font description-font-title">
                Project Description
              </p>
              <p class="description-font">
                {{ $project->description }}
              </p>
            </div>
            <a href="/projects/project/{{$project->id}}" id="view-report" class="btn btn__project">Fund Project</a>
          </div>
        </div>

        @endforeach

        {{ $projects->links() }}

      </div>

    </section>

@include('layouts.footer')
