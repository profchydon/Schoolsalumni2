
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
      1440: {
        items: 4,
        slideBy: 4,
        loop: ($('.item').length > 4)
      },
      1020: {
        items: 3,
        slideBy: 3,
        loop: ($('.item').length > 3)
      },
      740: {
        items: 2.2,
        margin: 20,
        loop: ($('.item').length > 2)
      },
      340: {
        items: 1.1,
        margin: 10,
        loop: ($('.item').length > 1)
      }
    }
  });

</script>

</body>
</html>
