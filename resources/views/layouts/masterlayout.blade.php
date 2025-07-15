<!DOCTYPE html>
<html lang="en">
@include('layouts.include.head')
<body>

@include('layouts.include.header')

<!-- ✅ CONTENT -->
<main>
    @yield('content')
</main>




@include('layouts.include.footer')
@include('layouts.include.script')
@stack('scripts')

</body>
</html>
