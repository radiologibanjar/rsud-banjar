<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name'))</title>

  <!-- AdminLTE -->
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

    body.light-mode {
      background-color: var(--bg-body-light);
      color: var(--text-dark-light);
    }

    body.dark-mode {
      background-color: var(--bg-body-dark);
      color: var(--text-dark-dark);
    }

    /* Navbar */
    .main-header {
      transition: background-color 0.3s ease;
    }

    body.light-mode .main-header {
      background-color: #ffffff !important;
      border-bottom: 1px solid #e5e7eb;
      color: var(--text-dark-light);
    }

    body.dark-mode .main-header {
      background-color: #111827 !important;
      border-bottom: 1px solid #1e293b;
      color: var(--text-dark-dark);
    }

    /* Sidebar */
    body.light-mode .main-sidebar {
      background-color: var(--sidebar-bg-light) !important;
    }

    body.dark-mode .main-sidebar {
      background-color: var(--sidebar-bg-dark) !important;
    }

    /* Card */
    .card {
      border-radius: 12px;
      transition: background-color 0.3s ease, color 0.3s ease;
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

    /* Theme Toggle Button */
    .theme-toggle {
      cursor: pointer;
      border: none;
      background: none;
      color: inherit;
      font-size: 1.2rem;
    }

    .theme-toggle:focus {
      outline: none;
    }

    /* Footer */
    .main-footer {
      transition: background-color 0.3s ease;
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

  @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed light-mode">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <button id="themeToggle" class="theme-toggle">
          <i id="themeIcon" class="fas fa-moon"></i>
        </button>
      </li>
    </ul>
  </nav>

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

<script>
  // === DARK/LIGHT MODE TOGGLE ===
  const themeToggle = document.getElementById('themeToggle');
  const themeIcon = document.getElementById('themeIcon');
  const body = document.body;

  // Cek preferensi user di localStorage
  if (localStorage.getItem('theme') === 'dark') {
    body.classList.remove('light-mode');
    body.classList.add('dark-mode');
    themeIcon.classList.replace('fa-moon', 'fa-sun');
  }

  themeToggle.addEventListener('click', () => {
    if (body.classList.contains('light-mode')) {
      body.classList.replace('light-mode', 'dark-mode');
      themeIcon.classList.replace('fa-moon', 'fa-sun');
      localStorage.setItem('theme', 'dark');
    } else {
      body.classList.replace('dark-mode', 'light-mode');
      themeIcon.classList.replace('fa-sun', 'fa-moon');
      localStorage.setItem('theme', 'light');
    }
  });
</script>

@stack('scripts')
</body>
</html>
