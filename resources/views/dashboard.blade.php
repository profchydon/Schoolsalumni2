<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open Sans:100,300,400,500,600,700" rel="stylesheet"/>

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>

    <title>Schoolsalumni</title>
  </head>

  <body>
    <section class="dashboard dashboard--empty">
      <div class="dashboard__menu">
        <a class="btn btn__dash active-d">Progress</a>
        <a href="create.html" class="btn btn__dash">Create Project</a>
        <a href="search.html" class="btn btn__dash">Donate</a>
      </div>
      <div class="dashboard__body">
        <div class="wrapper-dropdown">
          <div id="dd" class="wrapper-dropdown-5" tabindex="1">
            Hello, {{ Auth::user()->first_name}}
            <ul class="dropdown">
              <li>
                <a href="dashboard(profile).html">
                  <i class="fa fa-user"></i> Profile
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}"><i class="fa fa-times"></i> Log out</a>
              </li>
            </ul>
          </div>
        </div>


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

        </div>


        @endif


      </div>
    </section>

    <!-- Scripts -->

    <script src="assets/plug-ins/js/fontawesome/all.js"></script>

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/index.js"></script>
  </body>
</html>
