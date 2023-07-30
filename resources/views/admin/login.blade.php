<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Login</title>

</head>

<body>
    <div class="login-container">
        <h4 class="text-center mb-3">Silahkan Login</h4>
        @if (session()->has('success'))
        <div class="alert alert-succes" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <form method="POST" action="/admin/login">
        @csrf
      <div class="form-group">
        <label for="username">Email</label>
        <input type="text" class="form-control mt-3" id="username" name="email" placeholder="Masukan Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control mt-3" id="password" name="password" placeholder="Masukan Password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100 py-2 mt-3">Login</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>