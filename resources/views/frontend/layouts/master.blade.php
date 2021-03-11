<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') | PureONaturalProducts</title>
    @include('frontend.includes.partials.head')
    @include('frontend.includes.partials.styles')
</head>
<body>
    @include('frontend.includes.partials.header')
    @yield('content')
    @include('frontend.includes.partials.footer')
</body>
@include('frontend.includes.partials.scripts')
</html>
