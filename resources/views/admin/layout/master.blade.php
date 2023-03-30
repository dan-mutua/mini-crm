<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head_content')

<body >
 <aside id="left-panel" class="left-panel">
    @include('admin.layout.side_navbar')

 </aside>
    <div id="right-panel" class="right-panel">
  <header id="header" class="header">
    @include('admin.layout.top_navbar')
  </header>

    <!-- page content -->
    @yield('content')
    <!-- /page content -->

    <div class="clearfix"></div>
    @include('admin.layout.footer')

    </div>
</div>

@include('admin.layout.pagejs')
 <!-- page js -->
@yield('js')
<!-- /page js -->
</body>
</html>
