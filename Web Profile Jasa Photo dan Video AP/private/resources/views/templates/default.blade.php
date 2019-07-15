
<!-- - var navbarShadow = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@include('templates.partials._head')
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  @include('templates.partials._navbar')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('templates.partials._sidebar')
  <div class="app-content content">
    @yield('content')
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-dark navbar-border">
    <p class="clearfix blue-greycontent-body lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 , All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-block d-none d-lg-block"> <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  @include('templates.partials._script')
</body>
</html>