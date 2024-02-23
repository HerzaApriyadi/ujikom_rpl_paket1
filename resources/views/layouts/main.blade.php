
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>PERPUSTAKAAN</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset ('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('komponen.navbar')
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('/home')}}">READER</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
            <a href="{{url('/dashboard')}}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <a href="{{ url('/buku') }}"><i class="fas fa-box"></i><span>Data Buku</span></a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <main class="py-4">
              @yield('dashboard')
          </main>
            
        </section>
      </div>
      @include('komponen.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset ('assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset ('assets/modules/popper.js')}}"></script>
  <script src="{{ asset ('assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset ('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset ('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset ('assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset ('assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  
</body>
</html>