<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | {{ config('app.name') }}</title>

  <!-- Local AdminLTE & FontAwesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

  <style>
    body {
      background:
        linear-gradient(rgba(15, 23, 42, 0.85), rgba(17, 24, 39, 0.9)),
        url('{{ asset('images/bg-medis.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Nunito', sans-serif;
      overflow: hidden;
    }

    .login-box {
      width: 400px;
      animation: fadeInUp 0.8s ease-out;
    }

    .login-logo img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(255,255,255,0.2);
      margin-bottom: 10px;
      animation: pulse 3s infinite;
    }

    .card {
      border-radius: 18px;
      background-color: rgba(31, 41, 55, 0.9);
      box-shadow: 0 10px 35px rgba(0,0,0,0.4);
      transition: all 0.3s ease;
      backdrop-filter: blur(6px);
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 40px rgba(0,0,0,0.45);
    }

    .login-card-body {
      border-radius: 18px;
      padding: 2rem;
    }

    .btn-primary {
      background: linear-gradient(90deg, #00277dff, #002793ff);
      border: none;
      border-radius: 10px;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #1e40af, #1e3a8a);
    }

    a {
      color: #60a5fa;
      text-decoration: none;
    }

    a:hover {
      color: #93c5fd;
      text-decoration: underline;
    }

    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes pulse {
      0% {box-shadow: 0 0 0 0 rgba(37,99,235,0.5);}
      70% {box-shadow: 0 0 0 10px rgba(37,99,235,0);}
      100% {box-shadow: 0 0 0 0 rgba(37,99,235,0);}
    }
  </style>
</head>

<body class="hold-transition login-page">

<div class="login-box text-center">
  <div class="login-logo">
    <!-- <img src="{{ asset('images/logo.png') }}" alt="Logo"> -->
    <h3 class="text-white mt-2"><b>{{ config('app.name') }}</b></h3>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-gray-400 mb-4">Masuk untuk melanjutkan</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Username -->
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                 placeholder="Username" value="{{ old('username') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          @error('username')
            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                 placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text"><i class="fas fa-lock"></i></div>
          </div>
          @error('password')
            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

        <!-- Remember Me -->
        <div class="row mb-3">
          <div class="col-6 text-left">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">Ingat Saya</label>
            </div>
          </div>
          <div class="col-6 text-right">
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Lupa Password?</a>
            @endif
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
      </form>

      <div class="mt-4 text-muted">
        <a href="{{ route('register') }}">Belum punya akun? Daftar di sini</a>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

</body>
</html>
