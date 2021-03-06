<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Firebase Setup-->
<script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-messaging.js"></script>
<script>

   let firebaseConfig = {
       apiKey: "AIzaSyDCYveW3RLbw_DyXLcWvhKhTI-l3XFSF8Y",
        authDomain: "ezcare2go-c8d45.firebaseapp.com",
        databaseURL: "https://ezcare2go-c8d45.firebaseio.com",
        projectId: "ezcare2go-c8d45",
        storageBucket: "ezcare2go-c8d45.appspot.com",
        messagingSenderId: "634148380395",
        appId: "1:634148380395:web:74c10a4c479059891ca8ae",
        measurementId: "G-HSCHXK69K8"
    };
    
    firebase.initializeApp(firebaseConfig); 
</script>

<!-- Plugins JS start-->
@yield('scripts')
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/chat-menu.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
{{--<script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>--}}
<!-- Plugin used-->
<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script>
    @php($notifications = array('error', 'success', 'warning', 'info'))
    @foreach($notifications as $notification)
        @if(Session::has($notification))
            {{ "toastr." . $notification }}{!! "('" !!}{{Session::get($notification)}}{!! "')" !!}
        @endif
    @endforeach
</script>