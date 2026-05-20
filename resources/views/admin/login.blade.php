<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Puerta de Paz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 Rene-AR240329
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
>>>>>>> main
        }
        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
 Rene-AR240329
            max-width: 450px;
            margin: 0 auto;
            border: 1px solid #eee;
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo-img {
            max-width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
        .logo p {
            color: #666;
            font-size: 0.85rem;
            margin-top: 5px;
=======
>>>>>>> main
        }
        .btn-login {
            background-color: #B16729;
            color: white;
            padding: 12px;
            border-radius: 50px;
            font-weight: 600;
            width: 100%;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: #8f4f1f;
            transform: translateY(-2px);
        }
        .input-group-text {
            background: white;
            border-right: 0;
        }
        .form-control {
            border-left: 0;
        }
        .form-control:focus {
            border-color: #B16729;
            box-shadow: none;
        }
        .input-group:focus-within .input-group-text {
            border-color: #B16729;
        }
        .rol-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            margin: 0 5px;
        }
        .rol-admin { background: #dc3545; color: white; }
        .rol-editor { background: #28a745; color: white; }
        .rol-supervisor { background: #ffc107; color: black; }
        .alert {
            border-radius: 50px;
            font-size: 14px;
        }
        footer {
            text-align: center;
            margin-top: 25px;
            color: #aaa;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login-card">
                    <div class="logo">
                        <img src="{{ asset('images/logoblack.png') }}" alt="Puerta de Paz" class="logo-img">
                        <p>Panel Administrativo</p>
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope text-muted"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="Usuario/Correo" required autofocus>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock text-muted"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                        </div>

                        <button type="submit" class="btn-login">Aceptar</button>
                    </form>

                    <div class="text-center mt-4">
                        <span class="rol-badge rol-admin">Admin</span>
                        <span class="rol-badge rol-editor">Editor</span>
                        <span class="rol-badge rol-supervisor">Supervisor</span>
                    </div>

                    <footer>
                        © 2026 Puerta de Paz
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>