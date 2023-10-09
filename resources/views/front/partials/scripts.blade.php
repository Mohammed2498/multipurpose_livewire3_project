<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/wow/wow.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/easing/easing.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/counterup/counterup.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{ asset('front-assets') }}/lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Javascript -->

<script src="{{ asset('front-assets') }}/js/main.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('morph.updated', ({
            el,
            component
        }) => {
            const mySuccessAlert = document.querySelector('.my-success-alert');
            if (mySuccessAlert) {
                setTimeout(() => {
                    mySuccessAlert.style.display = 'none';
                }, 2000);
            }
        });
    });
</script>
