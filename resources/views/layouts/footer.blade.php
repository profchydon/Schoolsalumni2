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
    document.querySelector('#create_account_button').disabled = true;
    document.querySelector('#create_account_button').style.backgroundColor = 'gray';

    document.querySelector('#confirm_password').addEventListener('keyup' , function () {

        if (document.querySelector('#confirm_password').value != document.querySelector('#password').value) {

            document.querySelector('#password_error').textContent = "Password does not match.";
            document.querySelector('#create_account_button').disabled = true;
            document.querySelector('#create_account_button').style.backgroundColor = 'gray';

        }else if (document.querySelector('#confirm_password').value == document.querySelector('#password').value) {

            document.querySelector('#password_error').textContent = "";
            document.querySelector('#create_account_button').disabled = false;
            document.querySelector('#create_account_button').style.backgroundColor = '#006DFF';
        }
    });
</script>


</body>

</html>
