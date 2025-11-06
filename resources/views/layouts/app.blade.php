<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Font Awesome & AdminLTE -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

  <style>
    :root {
      /* Light theme */
      --bg-body-light: #f4f6f9;
      --bg-card-light: #ffffff;
      --text-dark-light: #111827;
      --text-muted-light: #6b7280;
      --primary-light: #2563eb;
      --primary-hover-light: #1d4ed8;
      --sidebar-bg-light: #1e40af;

      /* Dark theme */
      --bg-body-dark: #0f172a;
      --bg-card-dark: #1e2535;
      --text-dark-dark: #e5e7eb;
      --text-muted-dark: #9ca3af;
      --primary-dark: #1e3a8a;
      --primary-hover-dark: #172554;
      --sidebar-bg-dark: #161d2e;
    }

    body {
      transition: background-color 0.3s ease, color 0.3s ease;
      font-family: 'Nunito', sans-serif;
    }

    /* Light mode */
    body.light-mode {
      background-color: var(--bg-body-light);
      color: var(--text-dark-light);
    }

    /* Dark mode */
    body.dark-mode {
      background-color: var(--bg-body-dark);
      color: var(--text-dark-dark);
    }

    /* Navbar */
    .main-header {
      transition: background-color 0.3s ease, border-color 0.3s ease;
      position: fixed;
      top: 0;
      left: 250px;
      right: 0;
      height: 56px;
      z-index: 1030;
      width: calc(100% - 250px);
    }

    body.sidebar-collapse .main-header {
      left: 0;
      width: 100%;
    }

    body.light-mode .main-header {
      background-color: #ffffff !important;
      border-bottom: 1px solid #e5e7eb;
    }

    body.dark-mode .main-header {
      background-color: #111827 !important;
      border-bottom: 1px solid #1e293b;
    }

    /* Sidebar */
    .main-sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      transition: background-color 0.3s ease;
    }

    body.light-mode .main-sidebar {
      background-color: var(--sidebar-bg-light) !important;
    }

    body.dark-mode .main-sidebar {
      background-color: var(--sidebar-bg-dark) !important;
    }

    /* Content wrapper */
    .content-wrapper {
      margin-left: 250px;
      padding: 1.5rem;
      padding-top: 1rem;
      padding-top: 1rem;
      min-height: calc(100vh - 56px);
      transition: margin-left 0.3s ease;
    }

    body.sidebar-collapse .content-wrapper {
      margin-left: 0 !important;
      padding-top: 1rem;
    }

    /* Card */
    .card {
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    body.light-mode .card {
      background-color: var(--bg-card-light);
      color: var(--text-dark-light);
      border: 1px solid #e5e7eb;
    }

    body.dark-mode .card {
      background-color: var(--bg-card-dark);
      color: var(--text-dark-dark);
      border: none;
    }

    /* Buttons */
    .btn-primary {
      border: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    body.light-mode .btn-primary {
      background-color: var(--primary-light);
    }

    body.light-mode .btn-primary:hover {
      background-color: var(--primary-hover-light);
    }

    body.dark-mode .btn-primary {
      background-color: var(--primary-dark);
    }

    body.dark-mode .btn-primary:hover {
      background-color: var(--primary-hover-dark);
    }

    /* Footer */
    .main-footer {
      margin-left: 250px;
      transition: background-color 0.3s ease, color 0.3s ease, margin-left 0.3s ease;
    }

    body.sidebar-collapse .main-footer {
      margin-left: 0;
    }

    body.light-mode .main-footer {
      background-color: #f9fafb;
      border-top: 1px solid #e5e7eb;
      color: var(--text-muted-light);
    }

    body.dark-mode .main-footer {
      background-color: #111827;
      border-top: 1px solid #1e293b;
      color: var(--text-muted-dark);
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed light-mode">

<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.partials.navbar')

  <!-- Sidebar -->
  @include('layouts.partials.sidebar')

  <!-- Content -->
  <div class="content-wrapper">
    <section class="content pt-3">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center py-2">
    <strong>&copy; {{ date('Y') }} {{ config('app.name') }}</strong> - All rights reserved.
  </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
    const toggle = document.getElementById('themeToggle');
    const icon = document.getElementById('themeIcon');
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);

    toggle.addEventListener('click', () => {
      const newTheme = body.classList.contains('dark-mode') ? 'light' : 'dark';
      setTheme(newTheme);
      localStorage.setItem('theme', newTheme);
    });

    function setTheme(theme) {
      if (theme === 'dark') {
        body.classList.add('dark-mode');
        body.classList.remove('light-mode');
        icon.classList.replace('fa-moon', 'fa-sun');
      } else {
        body.classList.add('light-mode');
        body.classList.remove('dark-mode');
        icon.classList.replace('fa-sun', 'fa-moon');
      }
    }
  });
</script>

</body>
</html>
