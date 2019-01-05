@include('layouts.dashboard_header')

    <section class="dashboard dashboard--empty">

      @include('layouts.dashboard_sidebar')

      <div class="dashboard__body">

        @include('layouts.control')

        @include('_messages')

          <div class="dashboard__body__profile">
          <h1 class="dashboard-header">Profile</h1>
          <p class="contact3-margin-top contact-header">Contact Information</p>
          <div class="project__contact">
            <div class="project__contact__box">
              <p class="contact3-margin-top type-font">First Name</p>
              <input
                type="text"
                name="first_name"
                class="project__contact__box__input"
                value="{{ Auth::user()->first_name }}"
              />
            </div>
            <div class="project__contact__box">
              <p class="contact4-margin-top type-font">Last Name</p>
              <input
                type="text"
                name="last_name"
                class="project__contact__box__input"
                value="{{ Auth::user()->last_name }}"
              />
            </div>
            <div class="project__contact__box">
              <p class="contact2-margin-top type-font">Phone No.</p>
              <input
                type="tel"
                name="phone"
                class="project__contact__box__input"
                value="{{ Auth::user()->phone }}"
              />
            </div>
            <div class="project__contact__box">
              <p class="contact2-margin-top type-font">Email</p>
              <input
                type="email"
                name="email"
                class="project__contact__box__input"
                value="{{ Auth::user()->email }}"
              />
            </div>
          </div>
          <p class=" contact5-margin-top contact-header">Account</p>
          <div class="project__contact">
            <div class="project__contact__box">
              <p class="contact3-margin-top type-font">Password</p>
              <input
                type="password"
                name="Password"
                class="project__contact__box__input"
              />
            </div>
            <div class="project__contact__box">
              <p class="contact4-margin-top type-font">Confirm Password</p>
              <input
                type="password"
                name="Confirm Password"
                class="project__contact__box__input"
              />
            </div>
            <button class="btn btn__profile">Save Changes</button>
          </div>
        </div>

      </div>
    </section>

@include('layouts.dashboard_footer')
