<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Dashboard') - Admin</title>
  <style>
    :root { color-scheme: light; }
    body { margin: 0; font-family: ui-sans-serif, system-ui, sans-serif; background: #f5f6f8; color: #1f2937; }
    .admin-shell { min-height: 100vh; display: grid; grid-template-columns: 240px 1fr; }
    .admin-sidebar { background: #111827; color: #fff; padding: 24px; }
    .admin-sidebar a { color: #d1d5db; text-decoration: none; display: block; padding: 8px 0; }
    .admin-sidebar a:hover, .admin-sidebar a.active { color: #fff; }
    .admin-main { padding: 32px; }
    .admin-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; }
  </style>
  @stack('styles')
</head>
<body>
  <div class="admin-shell">
    <aside class="admin-sidebar">
      <div style="font-weight:700;margin-bottom:24px;">Admin Panel</div>
      <a href="{{ route('admin.dashboard') }}" class="active">Dashboard</a>
      <a href="{{ route('user.home') }}">Xem trang người dùng</a>
    </aside>
    <main class="admin-main">
      @yield('content')
    </main>
  </div>
  @stack('scripts')
</body>
</html>
