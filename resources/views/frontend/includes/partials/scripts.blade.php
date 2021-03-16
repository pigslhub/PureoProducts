<!-- JS here -->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui-slider-range.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script>
@php($notifications = array('error', 'success', 'warning', 'info'))
@foreach($notifications as $notification)
    @if(Session::has($notification))
        {{ "toastr." . $notification }}{!! "('" !!}{{Session::get($notification)}}{!! "')" !!}
    @endif
@endforeach
</script>
