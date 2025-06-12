<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - CRUD By AMERICO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding-top: 30px;">
        @yield('content')
    </div>

    <div class="footer-copyright text-center py-3">© {{ now()->year }}
        Copyright:
        <a href=""> By Developer AMERICO</a>
    </div>
</body>
</html>