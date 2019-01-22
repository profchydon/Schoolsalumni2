@include('layouts.header')

@include('layouts.nav')

  <section class="project">
    <div class="project__logo">
        <img src="{{ asset('img/Logo.svg') }}" alt="Logo" class="product__logo" />
    </div>

    <div class="project__account">
      <p class="acct-font-title">Login</p>
      <p class="acct-font">Welcome back!</p>

      @include('_messages')

      <form class="" action="/login" method="post">
        {{ csrf_field() }}
        <div class="project__password">
          <p class="password-font">Email</p>
          <input type="email" name="email" class="project__input project__input__password">
        </div>
        <div class="project__password">
          <p class="password-font">Password</p>
          <input type="password" name="password" class="project__input project__input__password">
        </div>
        <button type="submit" class="btn btn__create">Log In</button>
      </form>

    </div>

  </section>

  @include('layouts.footer')
