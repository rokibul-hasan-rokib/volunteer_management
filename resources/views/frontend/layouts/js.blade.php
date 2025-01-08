<!-- jQuery -->
<script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
<!-- venobox -->
<script src="{{ asset('frontend/plugins/venobox/venobox.min.js') }}"></script>
<!-- shuffle -->
<script src="{{ asset('frontend/plugins/shuffle/shuffle.min.js') }}"></script>
<!-- apear js -->
<script src="{{ asset('frontend/plugins/counto/apear.js') }}"></script>
<!-- counter -->
<script src="{{ asset('frontend/plugins/counto/counTo.js') }}"></script>
<!-- card slider -->
<script src="{{ asset('frontend/plugins/card-slider/js/card-slider-min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.0/dist/sweetalert2.all.min.js"></script>

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Main Script -->
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script>
    $('.select2').select2()

    if ('{{ session()->has('message') }}') {
        Swal.fire({
            position: "top-end",
            icon: "{{ session()->get('class') == 'success' ? 'success' : 'error' }}",
            title: "{{ session()->get('message') }}",
            showConfirmButton: false,
            timer: 3000,
            toast: true,
            timerProgressBar: true
        });
    }
</script>
