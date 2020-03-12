@include('layout.head')

@include('includeguardian.sidemenu')
<div class="page">
        @include('include.nav')
        @yield('content')
</div>
@include('include.footer')