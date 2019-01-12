@include('layouts.header')

@include('layouts.nav')

<section class="project">
    <div class="project__logo"><h1 class="logo-font">logo</h1></div>

    <div class="project__header" id="p-1">
      <button class="blue-bg project__header__create" id="h-1" onclick="showRemainForm()"> REMAIN ANONYMOUS </button>
      <button class="grey-bg project__header__fund" id="h-2" onclick="showTagForm()"> TAG ME </button>
    </div>
    <div class="project_header_sub">
        <p class="project_header_sub_p">Thanks for deciding to fund <b>{{ $project->title }}</b> for <b>{{ $project->beneficiary_school }}</b></p>
    </div>
    <div id="d-1">
      <div class="project__contact project__contact--2">
        <div class="project__contact__box project__contact__box--2">
          <input type="text" name="project_id" id="project_id_1" class="project__contact__box__input project__contact__box__input--3" value="{{$project->id}}" style="display:none" />
          <input type="text" name="project_title" id="project_title_1" class="project__contact__box__input project__contact__box__input--3" value="{{$project->title}}" style="display:none"/>
          <input type="text" name="beneficiary_school" id="beneficiary_school_1" class="project__contact__box__input project__contact__box__input--3" value="{{$project->beneficiary_school}}" style="display:none"/>
        </div>
        <div class="project__contact__box project__contact__box--2">
          <p class="type-font">Email</p>
          <input
            type="email"
            name="email"
            id="email_1"
            class="project__contact__box__input project__contact__box__input--3"
          />
        </div>
        <div class="project__contact__box project__contact__box--2">
          <p class="type-font">Amount</p>
          <input
            type="text"
            name="amount"
            id="amount_1"
            class="project__contact__box__input project__contact__box__input--3"
          />
        </div>
      </div>
        <form >
          <script src="https://js.paystack.co/v1/inline.js"></script>
          <button type="button" onclick="payWithPaystack1()" class="btn btn__pay"> Fund Project </button>
        </form>
      </div>
      <div id="d-2">
        <div class="project__contact project__contact--2">
          <div class="project__contact__box project__contact__box--2">
            <input type="text" name="project_id" id="project_id_2" class="project__contact__box__input project__contact__box__input--3" value="{{$project->id}}" style="display:none"/>
            <input type="text" name="project_title" id="project_title_2" class="project__contact__box__input project__contact__box__input--3" value="{{$project->title}}" style="display:none"/>
            <input type="text" name="beneficiary_school" id="beneficiary_school_2" class="project__contact__box__input project__contact__box__input--3" value="{{$project->beneficiary_school}}" style="display:none"/>
          </div>
          <div class="project__contact__box project__contact__box--2">
            <p class="type-font">Name</p>
            <input
              type="text"
              name="name"
              id="name_2"
              class="project__contact__box__input project__contact__box__input--3"
            />
          </div>
          <div class="project__contact__box project__contact__box--2">
            <p class="type-font">Email</p>
            <input
              type="email"
              name="email"
              id="email_2"
              class="project__contact__box__input project__contact__box__input--3"
            />
          </div>
          <div class="project__contact__box project__contact__box--2">
            <p class="type-font">Amount</p>
            <input
              type="text"
              name="amount"
              id="amount_2"
              class="project__contact__box__input project__contact__box__input--3"
            />
          </div>
        </div>
        <form >
          <script src="https://js.paystack.co/v1/inline.js"></script>
          <button type="button" onclick="payWithPaystack2()" class="btn btn__pay"> Fund Project </button>
        </form>
      </div>
</section>

<footer class="footer">
  <div class="center-text">
    <p class="footer-font">Connect with Us</p>
    <div class="footer__icons">
      <img src="{{ asset('img/facebook-logo.svg') }}" alt="Social Media" class="footer__icons__icon">
      <img src="{{ asset('img/twitter-social-logotype.svg') }}" alt="Social Media" class="footer__icons__icon">
      <img src="{{ asset('img/instagram.svg') }}" alt="Social Media" class="footer__icons__icon">
      <img src="{{ asset('img/linkedin-logo.svg') }}" alt="Social Media" class="footer__icons__icon">
    </div>
    <p class="footer-font footer-font-copyright">
      </span> <i class="fa fa-phone footer__contact"></i>+2349064519745
      </span> <i class="fa fa-envelope footer__contact"></i>brownson121@gmail.com
    </p>
    <p class="footer-font footer-font-copyright">Copyright
      <span class="copyright-margin footer-font footer-font-copyright footer-font-copyright-icon">&copy;</span> 2018
      Schoolsalumni,All
      rights resevered.
    </p>
  </div>
</footer>



<!-- Scripts -->
<script src="{{ asset('plug-ins/js/fontawesome/all.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>

<script>
  function payWithPaystack1(){

    var project_id_1 = $('#project_id_1').val();
    var beneficiary_school_1 = $('#beneficiary_school_1').val();
    var project_title_1 = $('#project_title_1').val();
    var email_1 = $('#email_1').val();
    var amount_1 = $('#amount_1').val()+'00';
    var date = new Date();
    var time = date.getTime();


    var handler = PaystackPop.setup({
      key: 'pk_test_8d18f652ec39f7839f86277eda11281d04238e78',
      email: email_1,
      amount: amount_1,
      ref: 'SCHALMNI'+Math.floor((Math.random() * 100000) + 1)+time, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Project Title / Beneficiary School",
                variable_name: "Project Title",
                value: project_title_1 + " / " + beneficiary_school_1
            }
         ]
      },
      callback: function(response){
          verifyTransaction(response.reference);
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
    $('#email_1').val('');
    $('#amount_1').val('');
  }

  function payWithPaystack2(){

    var project_id_2 = $('#project_id_2').val();
    var beneficiary_school_2 = $('#beneficiary_school_2').val();
    var project_title_2 = $('#project_title_2').val();
    var name_2 = $('#name_2').val();
    var email_2 = $('#email_2').val();
    var amount_2 = $('#amount_2').val()+'00';
    var date = new Date();
    var time = date.getTime();


    var handler = PaystackPop.setup({
      key: 'pk_test_8d18f652ec39f7839f86277eda11281d04238e78',
      email: email_2,
      amount: amount_2,
      ref: 'SCHALMNI'+Math.floor((Math.random() * 100000) + 1)+time, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
              display_name: "Project Title / Beneficiary School",
              variable_name: "Project Title / Beneficiary School",
              value: project_title_2 + " / " + beneficiary_school_2
            }
         ]
      },
      callback: function(response){
          verifyTransaction(response.reference);
          $.ajax({
            url: 'action/summit.php',
            type: 'POST',
            data: {
              name: name,
              email: email,
              phone: phone,
              summit: true
            }
          })

          .done(function(data){
            if (data == 'Summit information Stored') {
              // console.log(data);
              $('#successModal').modal('show').animatedModal();
            } else {
              // console.log(data);
              $('#errorModal').modal('show').animatedModal();
            }

          })

          .fail(function(data){
            console.log("error encountered");
          });
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
    $('#name_2').val('');
    $('#email_2').val('');
    $('#amount_2').val('');
  }

  function verifyTransaction(ref) {

    var url = 'https://api.paystack.co/transaction/verify/'+ref;

    // var data = {username: 'example'};

    fetch(url, {
        method: 'GET', // or 'PUT'
        headers:{
          'Content-Type': 'application/json',
          'Authorization' : 'Bearer sk_test_0bf8b6f4dcef7d129c4f40452ae157e72ac2c77c'
        }
    }).then(
        res => res.json()
      )
      .then(
        response => response.data.authorization.authorization_code
      )
      .catch(
        error => console.error('Error:', error)
      );

  }
</script>


</body>

</html>
