<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') | PureONaturalProducts</title>
    @include('frontend.includes.partials.head')
    @include('frontend.includes.partials.styles')
    <script type="text/javascript" src="{{ asset('frontend/engine1/jquery.js') }}"></script>
    <script type='text/javascript'
            src='https://demo.grixbase.com/helendo/wp-content/themes/helendo/js/plugins/html5shiv.min.js'
            id='html5shiv-js'></script> <![endif]--> <!--[if lt IE 9]>
    <script type='text/javascript'
            src='https://demo.grixbase.com/helendo/wp-content/themes/helendo/js/plugins/respond.min.js'
            id='respond-js'></script> <![endif]-->
</head>

<body class="page-template page-template-homepage-fullwidth page-template-homepage-fullwidth-php page page-id-16 wp-embed-responsive theme-helendo woocommerce-no-js helendo-search-icon full-content header-default header-v3 helendo-page-template header-transparent header-sticky canvas-panel-standard footer-fixed wpb-js-composer js-comp-ver-6.0.5 vc_responsive woocommerce-active currency-gbp">
<div id="page" class="site">
    <div id="helendo-header-minimized" class="helendo-header-minimized helendo-header-v3"></div>
    @include('frontend.includes.partials.header')
    <br><br><br>
    @yield('content')
    @include('frontend.includes.partials.footer')
</div>
@include('frontend.includes.partials.scripts')
</body>
</html>
