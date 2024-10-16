<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
        @include('include.navbar')
        @yield('content')
        @include('include.footer')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        {{-- @include('include.script') --}}
    </body>
</html>
