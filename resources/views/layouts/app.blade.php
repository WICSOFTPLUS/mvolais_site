<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include.head')
    <body>
        <div class="loader bg-blueGray-950" id="load">
            <div class="item"></div>
        </div>
        @include('include.navbar')
        @yield('content')
        @include('include.footer')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        {{-- @include('include.script') --}}
    </body>
</html>
