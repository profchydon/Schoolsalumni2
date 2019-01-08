<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open Sans:100,300,400,500,600,700" rel="stylesheet"/>

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>

    <title>Schoolsalumni</title>

    <style media="screen">
    .project {
        margin: 5% 10%;
    }
    </style>

</head>

<body>

  <section class="dashboard dashboard--empty">

    @include('layouts.dashboard_sidebar')

    <div class="dashboard__body">

      @include('layouts.control')

      @include('_messages')

      <section class="project">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="main-section">
                      <h4 class="text-center" style="line-height:25px;font-weight:600;">Congrats. Your Project has been created. Kindly Upload your Images for your project (if any). <br>
                          <span class="text-center note" style="color:red;">Note: Do not refresh this pages</span>
                      </h4>

                      <form class="" method="post">
                        <input type="text" name="project_title" id="project_title" value="{{session('project_title')}}">
                        <input type="text" name="project_id" id="project_id" value="{{session('project_id')}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="file-loading">

                                <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                            </div>
                        </div>

                      </form>
                    </div>

                </div>


            </div>
        </div>

      </section>


    </div>
  </section>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('plug-ins/js/fontawesome/all.js') }}"></script>
  <script src="{{ asset('plug-ins/js/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


  <script type="text/javascript">
      $("#file-1").fileinput({
          theme: 'fa',
          uploadUrl: "/image-view",
          uploadExtraData: function() {
              return {
                  _token: $("input[name='_token']").val(),
                  project_id : $("input[name='project_id']").val(),
                  project_title :  $("input[name='project_title']").val(),
              };
          },
          allowedFileExtensions: ['jpg', 'jpeg', 'png'],
          overwriteInitial: false,
          maxFileSize : 1500,
          maxFilesNum: 12,
          slugCallback: function (filename) {
              return filename.replace('(', '_').replace(']', '_');
          }
      });
  </script>

</body>

</html>
