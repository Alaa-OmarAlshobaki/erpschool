@include('layout.head')

@include('include.sidemenu')
<div class="page">
        @include('include.nav')
        @yield('content')
</div>
@include('include.footer')