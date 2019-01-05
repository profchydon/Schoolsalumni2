@include('layouts.dashboard_header')

    <section class="dashboard dashboard--empty">

      @include('layouts.dashboard_sidebar')

      <div class="dashboard__body">

        @include('layouts.control')


        @if(empty($projects))

        <div class="dashboard__body__empty">
          <h4 class="empty-font">
            You currently do not have an ongoing project
          </h4>
          <button class="btn btn__empty" onclick="window.location.href='create.html'">Create a project</button>
          <h4 class="or-margin empty-font">or</h4>
          <h4 class="empty-font">
            <a href="search.html" class="dashboard__body__link">Donate</a> to an existing
            project
          </h4>
        </div>

        @else


        <div class="dashboard__body__empty">
          <h4 class="empty-font">
            Here is a list of your ongoing projects
          </h4>

          <table>
              <thead>
                <tr>S/no</tr>
                <tr>Title</tr>
                <tr>Project Cost</tr>
                <tr>Amount raised</tr>
              </thead>

              <tbody>
                  <?php $i = 1; ?>
                  @foreach($projects as $project)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->project_cost }}</td>
                    <td>{{ $project->amount_raised }}</td>
                  </tr>
                  <?php $i++; ?>
                  @endforeach
              </tbody>
          </table>

        </div>


        @endif


      </div>
    </section>

@include('layouts.dashboard_footer')
