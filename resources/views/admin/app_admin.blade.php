@include('admin.inc.header')
@include('admin.inc.sidebar')
@include('admin.inc.nav')
<div class="content-wrapper">
    <div class="container-fluid">
            @yield('content')
    </div>
    <!-- End container-fluid-->
</div><!--End content-wrapper-->
@include('admin.inc.footer')