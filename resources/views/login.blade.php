<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --futuristic-bg: #0d0f1a;
            --futuristic-bg-gradient: radial-gradient(circle, #1a1c2e 0%, #0d0f1a 100%);
            --futuristic-primary: #00e5ff; /* Neon blue */
            --futuristic-secondary: #ffffff;
            --futuristic-card-bg: rgba(255, 255, 255, 0.05);
            --futuristic-border: rgba(0, 229, 255, 0.3);
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--futuristic-bg-gradient);
            color: var(--futuristic-secondary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .futuristic-card {
            background: var(--futuristic-card-bg);
            border: 1px solid var(--futuristic-border);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .login-card-header {
            background-color: rgba(0, 229, 255, 0.1);
            border-bottom: 1px solid var(--futuristic-border);
            text-align: center;
            font-weight: 600;
            color: var(--futuristic-primary);
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--futuristic-border);
            color: #fff;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--futuristic-primary);
            box-shadow: 0 0 10px rgba(0, 229, 255, 0.3);
            color: #fff;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .btn-futuristic {
            background: var(--futuristic-primary);
            color: var(--futuristic-bg);
            font-weight: 600;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 229, 255, 0.4);
        }
        .btn-futuristic:hover {
            background: #fff;
            color: var(--futuristic-bg);
            box-shadow: 0 0 25px rgba(0, 229, 255, 0.7);
        }
        .card-footer {
            border-top: 1px solid var(--futuristic-border);
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card futuristic-card shadow-lg">
                    <div class="card-header login-card-header">
                        <h4>Login Access</h4>
                    </div>
                    <div class="card-body p-4">
                        @if(session('error'))
                        <div class="alert alert-danger" style="background-color: rgba(255, 0, 0, 0.2); border-color: red; color: white;">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-futuristic">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Gunakan username: <b>admin</b> & password: <b>12345</b></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>