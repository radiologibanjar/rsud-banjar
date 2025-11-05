<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name'))</title>

  <!-- AdminLTE & Plugins -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

  <style>
    :root {
      --dark-bg: #0f172a;        /* latar utama */
      --dark-card: #1e2535;      /* latar card & konten */
      --dark-sidebar: #161d2e;   /* sidebar */
      --dark-header: #111827;    /* navbar */
      --text-light: #e5e7eb;
      --text-muted: #9ca3af;
      --primary-color: #1e3a8a;  /* biru tua elegan */
      --primary-hover: #172554;
    }

    body {
      background-color: var(--dark-bg);
      color: var(--text-light);
      font-family: 'Nunito', sans-serif;
    }

    /* Navbar */
    .main-header {
      background-color: var(--dark-header) !important;
      border-bottom: 1px solid #1f2937;
    }

    .nav-link {
      color: var(--text-light) !important;
    }

    .nav-link:hover {
      color: #93c5fd !important;
    }

    /* Sidebar */
    .main-sidebar {
      background-color: var(--dark-sidebar) !important;
    }

    .brand-link {
      background-color: var(--primary-color) !important;
      color: #f1f5f9 !important;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .nav-sidebar>.nav-item>.nav-link {
      color: var(--text-muted);
      border-radius: 10px;
      margin: 2px 5px;
    }

    .nav-sidebar>.nav-item>.nav-link.active {
      background-color: var(--primary-color) !important;
      color: #fff !important;
      box-shadow: 0 0 10px rgba(30, 58, 138, 0.5);
    }

    .nav-sidebar>.nav-item>.nav-link:hover {
      background-color: rgba(30, 58, 138, 0.3);
      color: #fff;
    }

    /* Content Wrapper */
    .content-wrapper {
      background-color: var(--dark-bg);
      color: var(--text-light);
    }

    /* Card */
    .card {
      background-color: var(--dark-card);
      border: none;
      box-shadow: 0 6px 20px rgba(0,0,0,0.4);
      border-radius: 12px;
      color: var(--text-light);
    }

    .card-header {
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }

    .card-title {
      color: var(--text-light);
    }

    /* Buttons */
    .btn-primary {
      background-color: var(--primary-color);
      border: none;
      border-radius: 8px;
      color: #fff;
    }

    .btn-primary:hover {
      background-color: var(--primary-hover);
    }

    /* Tables */
    table {
      color: var(--text-light);
    }

    .table thead th {
      background-color: #1b2233;
      color: var(--text-light);
      border: none;
    }

    .table tbody tr {
      background-color: #1e2535;
      border-bottom: 1px solid #2b3347;
    }

    /* Footer */
    .main-footer {
      background-color: var(--dark-header);
      border-top: 1px solid #1e293b;
      color: var(--text-muted);
    }
  </style>

  @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.partials.navbar')

  <!-- Sidebar -->
  @include('layouts.partials.sidebar')

  <!-- Content Wrapper -->
  <div class="content-wrapper p-3">
    <section class="content">
      @yield('content')
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center py-2">
    <small>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</small>
  </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
@stack('scripts')
</body>
</html>
