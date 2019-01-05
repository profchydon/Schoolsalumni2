@include('layouts.header')

@include('layouts.nav')

<section class="project">
    <div class="center-text">
      <h1 class="contact-us-margin contact-us-header">Drop us a Line</h1>
    </div>
      <div class="project__name">
        <p class="project-margin project-font">Your Name</p>
        <input type="text" name="Name" class="project__input">
      </div>
      <div class="project__name">
          <p class="project-margin project-font">Your Email Address</p>
          <input type="email" name="email" class="project__input">
        </div>
      <div class="project__name">
        <p class="project-margin project-font">Your Message</p>
        <textarea rows="20" cols="50" class="project__input"></textarea>
      </div>
      <button class="btn btn__contact">Send</button>
  </section>

@include('layouts.footer')
