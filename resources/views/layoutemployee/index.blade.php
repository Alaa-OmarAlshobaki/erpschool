@include('layout.head')

@include('includeemployee.sidemenu')
<div class="page">
        @include('include.nav')
        @yield('content')
</div>
@include('include.footer')