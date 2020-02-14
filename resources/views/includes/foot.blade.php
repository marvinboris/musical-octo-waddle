</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script>
    $(function () {
        $(".owl-carousel.projects").owlCarousel({ responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 3 } }, loop: true, autoplay: true, autoplayTimeout: 1000 });
        $(".owl-carousel.partners").owlCarousel({ responsive: { 0: { items: 2 }, 600: { items: 3 }, 1000: { items: 5 } }, loop: true, autoplay: true, autoplayTimeout: 1000 });
        $(".alert").delay(5000).hide();
    });
</script>
@yield('scripts')
</body>
</html>