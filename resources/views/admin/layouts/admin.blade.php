<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/assets/admin/css/style.css">
</head>
<body>

    @include('admin.layouts.sidebar')

    <div class="admin-content">
        @yield('content')
    </div>

</body>
</html>
