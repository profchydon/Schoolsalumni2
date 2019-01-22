@include('layouts.header')

@include('layouts.nav')

<section class="project">

  <div class="project__logo">
      <img src="{{ asset('img/Logo.svg') }}" alt="Logo" class="product__logo" />
  </div>

  <div class="project__header" id="project_header">
    @if(Auth::user())
      <button type="button" class="blue-bg project__header__create" onclick="window.location.href='{{ route('create_loggedin') }}'">CREATE A PROJECT</button>
    @else
      <button type="button" class="blue-bg project__header__create" onclick="window.location.href='{{ route('create') }}'">CREATE A PROJECT</button>
    @endif

    <button type="button" class="grey-bg project__header__fund" onclick="window.location.href='{{ route('search') }}'">FUND EXISTING PROJECT</button>
  </div>

  <form action="/create-user-project" method="post">

    {{ csrf_field() }}

    <div id="div-1">

      <div class="project__name">
        <p class="project-margin project-font">Project Title</p>
        <input type="text" name="title" id="title" class="project__input">
      </div>
      <div class="project__name">
        <p class="project-margin project-font">Project Description</p>
        <p class="project-font-cap">Each project should be a stand alone project. Example - <span class="project-font-cap--red">Do:
          </span>Fans. <span class="project-margin-left   project-font-cap--green">Don’t: </span>Fans, Television, Chairs.</p>
        <textarea rows="3" cols="80" name="description" class="project__input" id="description" maxlength="440"></textarea>
        <p class="project-font-cap"><span id="rchars">440</span> Character(s) Remaining</p>
      </div>
      <div class="project__name">
        <p class="project-margin project-font">Beneficiary School</p>
        <input type="text" name="beneficiary_school" id="beneficiary_school" class="project__input">
      </div>
      <div class="project__name">
        <p class="project-margin project-font">Address</p>
        <input type="text" name="address" id="address" class="project__input">
      </div>

      <div class="project__dropdowns">
        <div class="project__dropdowns--drop">
          <label class="project-margin-drop project-font">State</label>
          <select class="project__dropdowns--select" name="state" id="state" data-placeholder="Pick your choice"
            data-tabindex="1">
            <option selected>Select a State</option>
          </select>
        </div>
        <div class="project__dropdowns--drop">
          <label class="project-margin-drop project-font">LGA</label>
          <select class="project__dropdowns--select" name="lga" id="lga" data-placeholder="Pick your choice"
            data-tabindex="1">
            <option selected>Select a LGA</option>
          </select>
        </div>
      </div>

      <div class="project__category">
        <p class="project-margin project-font">Category of Project</p>
        <div class="project__category__buttons">
          <button type="button" class="btn btn__category" onclick="showPersonalForm()">Personal</button>
          <button type="button" class="btn btn__category" onclick="showGroupForm()">Group</button>
          <button type="button" class="btn btn__category" onclick="showPubicForm()">Public</button>
        </div>
      </div>
    </div>

    <div id="div-2">
      <p class="project-margin-top type-font">If you are here, you agree to solely fund this project. If not, <button class="btn btn__back"
          type="button" onclick="showProjectForm()"><i class="fas fa-arrow-left"></i> Go Back</button></p>
      <div class="project__cost">
        <input type="checkbox" name="personal_cost_me" id="personal_cost_me" value="personal_cost_me"> <p class="type-font"> Do you want us to cost you?</p>
      </div>
      <div class="project__amount">
        <p class="type-font">If No, tell us how much you want to give</p>
        <input type="text" name="personal_amount_to_donate" id="personal_amount_to_donate" class="project__input project__input--2">
      </div>
      <button type="button" class="btn btn__amount" onclick="showContactInfoForm()">Next <i class="fas fa-arrow-right"></i></button>
    </div>

    <div id="div-3">
      <p class="project-margin-top type-font">If you are here, the group agrees to collectively fund this project. If not,
        <button type="button" class="btn btn__back" onclick="showProjectForm()"><i class="fas fa-arrow-left"></i> Go Back</button></p>
      <div class="project__cost">
        <input type="checkbox" name="group_cost_me" id="group_cost_me" value="group_cost_me"><p class="type-font"> Do you want us to cost you?</p>
      </div>
      <div class="project__amount">
        <p class="type-font">If No, tell us how much you want to give</p>
        <input type="text" name="group_amount_to_donate" id="group_amount_to_donate" class="project__input project__input--2">
      </div>
      <button type="button" class="btn btn__amount" onclick="showContactInfoForm()">Next <i class="fas fa-arrow-right"></i></button>
    </div>

    <div id="div-4">
      <p class="project-margin-top type-font">If you are here, you agree that Schoolalumni should allow funding of this project
        by the public. If not, <button type="button" class="btn btn__back" onclick="showProjectForm()"><i class="fas fa-arrow-left"></i>
          Go Back</button></p>
      <div class="project__cost">
        <input type="checkbox" name="public_cost_me" id="public_cost_me" value="public_cost_me"> <p class="type-font"> Do you want us to cost you?</p>
      </div>
      <div class="project__amount">
        <p class="type-font">If No, tell us how much you want to give</p>
        <input type="text" name="public_amount_to_donate" id="public_amount_to_donate" class="project__input project__input--2">
      </div>
      <button type="button" class="btn btn__amount" onclick="showContactInfoForm()">Next <i class="fas fa-arrow-right"></i></button>
    </div>

    <div id="div-5">
      <p class="project-margin-top contact-header">Contact Information</p>
      <div class="project__contact">
        <div class="project__contact__box">
          <p class="contact-margin-top type-font">First Name</p>
          <input type="text" name="first_name" id="first_name" class="project__contact__box__input">
        </div>
        <div class="project__contact__box">
          <p class="contact-margin-top type-font">Last Name</p>
          <input type="text" name="last_name" id="last_name" class="project__contact__box__input">
        </div>
        <div class="project__contact__box">
          <p class="contact2-margin-top type-font">Phone No.</p>
          <input type="tel" name="phone" id="phone" class="project__contact__box__input">
        </div>
        <div class="project__contact__box">
          <p class="contact2-margin-top type-font">Email</p>
          <input type="email" name="email" id="email" class="project__contact__box__input">
        </div>
      </div>
      <button type="button" class="btn btn__amount" onclick="showSubmitForm()">Next <i class="fas fa-arrow-right"></i></button>
    </div>

    <div id="div-6">
      <div class="project__account">
        <p class="acct-font-title">Account Creation</p>
        <p class="acct-font">Hi, thanks for creating a project with schoolsalumni. Please put in a password to
          complete the process and create an account.
        </p>
        <div class="project__password">
          <p class="password-font">Password</p>
          <input type="password" name="password" id="password" class="project__input project__input__password">
        </div>
        <div class="project__password">
          <p class="password-font">Confirm Password</p>
          <input type="password" name="confirm_password" id="confirm_password" class="project__input project__input__password">
        </div>
        <button type="submit" class="btn btn__create">Create Account</button>
      </div>

    </div>

  </form>

</section>

@include('layouts.footer')
