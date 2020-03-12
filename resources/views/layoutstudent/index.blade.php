@include('layout.head')

@include('includestudent.sidemenu')
<div class="page">
        @include('include.nav')
        @yield('content')
</div>
@include('include.footer')