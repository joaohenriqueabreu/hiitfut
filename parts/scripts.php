<!-- JS Global Compulsory -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/plugins/smoothScroll.js"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script>
<script src="assets/js/plugins/gmaps-ini.js"></script>

<!-- JS Page Level-->
<script src="assets/js/one.app.js"></script>
<script src="assets/js/plugins/promo.js"></script>
<script src="assets/js/forms/contact.js"></script>
<script src="assets/js/plugins/pace-loader.js"></script>
<script src="assets/js/plugins/owl2-carousel-v6.js"></script>
<script src="assets/js/plugins/owl2-carousel-v7.js"></script>
<script src="assets/js/plugins/owl2-carousel-v8.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        ContactForm.initContactForm();
        Owl2Carouselv6.initOwl2Carouselv6();
        Owl2Carouselv7.initOwl2Carouselv7();
        Owl2Carouselv8.initOwl2Carouselv8();
        $('.cbp-lightbox-wrapper').cubeportfolio({
            lightboxGallery: false,
            lightboxCounter: '',
        });
    });
</script>

<!--[if lt IE 9]>
<script src="assets/plugins/html5shiv.js"></script>
<![endif]-->