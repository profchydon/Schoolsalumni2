
<!-- Scripts -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('plug-ins/js/fontawesome/all.js') }}"></script>
<script src="{{ asset('plug-ins/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>

<script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          728: {
            items: 2
          },
          1024: {
            items: 2
          },
          1280: {
            items: 3
          }
        }
      });
    </script>

</body>
</html>
