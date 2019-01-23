<!DOCTYPE html>
<html lang="zxx" class="no-js">

@include('public.includes.head')

<body>

<!-- Start Header Area -->
@include('public.includes.header')
<!-- End Header Area -->

@yield('content')
<!-- start footer Area -->
@include('public.includes.footer')
<!-- End footer Area -->

@include('public.includes.foot')
</body>

</html>