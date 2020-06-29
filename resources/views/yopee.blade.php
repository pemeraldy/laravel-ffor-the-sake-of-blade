<!doctype html>
<html lang="en">

@include('head')

<!-- START body -->

<body style="background-color: #edeff0 !important">
    <!-- START nav.blade.php -->
    @include('nav')
    <!-- END nav.blade.php -->

    <!-- START library.blade.php -->
    <main role="main" class="container">
        @yield('body')
    </main>
    <!-- END library.blade.php -->

    @include('footer')

</html>