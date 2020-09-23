{{-- Header --}}
@include('includes.head')
@include('includes.header')

{{-- Sidebar --}}
@include('includes.sidebar')

<!-- Your Page Content Here -->
@yield('main-content')

{{-- Footer --}}
@include('includes.footer')

{{-- Script --}}
@include('includes.scripts')

</body>
</html>