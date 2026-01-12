<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }

        .login-card {
            width: 420px;
            background: rgba(255,255,255,0.18);
            backdrop-filter: blur(18px);
            border-radius: 20px;
        }

        .form-control {
            border-radius: 50px;
            padding: 12px 18px;
        }

        .btn-login {
            border-radius: 50px;
            padding: 12px;
            background: linear-gradient(145deg, #2563eb, #7c3aed);
            border: none;
            color: #fff;
        }

        .btn-login:hover {
            opacity: .9;
        }
    </style>
</head>
<body>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
