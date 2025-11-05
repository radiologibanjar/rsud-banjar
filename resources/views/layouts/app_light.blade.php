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
      --bg-body: #f4f6f9;
      --bg-card: #ffffff;
      --sidebar-bg: #1e40af;
      --sidebar-hover: #1d4ed8;
      --text-dark: #111827;
      --text-muted: #6b7280;
      --primary-color: #2563eb;
      --primary-hover: #1d4ed8;
    }

    body {
      background-color: var(--bg-body);
      color: var(--text-dark);
      font-family: 'Nunito', sans-serif;
    }

    /* Navbar */
    .main-header {
      background-color: #ffffff !important;
      border-bottom: 1px solid #e5e7eb;
      color: var(--text-dark);
    }

    .nav-link {
      color: var(--text-dark) !important;
    }

    .nav-link:hover {
      color: var(--primary-color) !important;
    }

    /* Sidebar */
    .main-sidebar {
      background-color: var(--sidebar-bg) !important;
      color: #fff;
    }

    .brand-link {
      background-color: var(--sidebar-hover) !important;
      color: #fff !important;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .nav-sidebar>.nav-item>.nav-link {
      color: #cbd5e1;
      border-radius: 8px;
      margin: 2px 5px;
    }

    .nav-sidebar>.nav-item>.nav-link.active {
      background-color: #1e3a8a !important;
      color: #fff !important;
      box-shadow: 0 0 8px rgba(30, 58, 138, 0.3);
    }

    .nav-sidebar>.nav-item>.nav-link:hover {
      background-color: rgba(255,255,255,0.15);
      color: #fff;
    }

    /* Content */
    .content-wrapper {
      background-color: var(--bg-body);
      color: var(--text-dark);
    }

    /* Card */
    .card {
      background-color: var(--bg-card);
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .card-header {
      border-bottom: 1px solid #f3f4f6;
      background-color: #f9fafb;
    }

    .card-title {
      color: var(--text-dark);
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

    /* Footer */
    .main-footer {
      background-color: #f9fafb;
      border-top: 1px solid #e5e7eb;
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
