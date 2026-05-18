<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Puerta de Paz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
        }
        .btn-login {
            background-color: #B16729;
            color: white;
            padding: 12px;
            border-radius: 50px;
            font-weight: 600;
            width: 100%;
            border: none;
        }
        .btn-login:hover {
            background-color: #8f4f1f;
        }
        .logo-login {
            text-align: center;
            margin-bottom: 30px;
        }
        .rol-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .rol-admin { background: #dc3545; color: white; }
        .rol-editor { background: #28a745; color: white; }
        .rol-supervisor { background: #ffc107; color: black; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login-card">
                    <div class="logo-login">
                        <h2>IGLESIA<br>Puerta de Paz</h2>
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label>Usuario/Correo</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn-login">Aceptar</button>
                    </form>

                    <div class="text-center mt-4">
                        <span class="rol-badge rol-admin">Admin</span>
                        <span class="rol-badge rol-editor">Editor</span>
                        <span class="rol-badge rol-supervisor">Supervisor</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>