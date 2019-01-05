@include('layouts.header')

@include('layouts.nav')

<section class="school">
      <div class="school__dropdown">
        <select class="school__select" id="select2-single-box" name="select2-single-box" data-placeholder="Pick your choice"
          data-tabindex="1">
          <option>All</option>
          <option value="1">Ongoing </option>
          <option value="2">Completed </option>
        </select>

        <button class="btn btn__sort">Go <i class="fas fa-arrow-right"></i></button>
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
                <img
                  src="{{ asset('img/Banner2_optimized.jpg') }}"
                  alt="Class"
                  class="school__box__pic"
                />
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
            <button
              class="btn btn__project"
              onclick="window.location.href='inner(progress).html'"
            >
              View Report
            </button>
          </div>
        </div>

        @endforeach

        {{ $projects->links() }}

      </div>

    </section>

@include('layouts.footer')
