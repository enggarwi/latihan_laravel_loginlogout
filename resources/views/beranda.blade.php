<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | Sistem Penjualan</title>
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
        }
        .navbar-futuristic {
            background: rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--futuristic-border);
        }
        .btn-futuristic-outline {
            border: 2px solid var(--futuristic-primary);
            color: var(--futuristic-primary);
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-futuristic-outline:hover {
            background: var(--futuristic-primary);
            color: var(--futuristic-bg);
            box-shadow: 0 0 20px rgba(0, 229, 255, 0.5);
        }
        .futuristic-container {
            padding-top: 10rem;
        }
        .futuristic-icon {
            width: 200px;
            filter: drop-shadow(0 0 15px var(--futuristic-primary));
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-futuristic fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}" style="font-weight: 600; color: var(--futuristic-primary);">Sistem Penjualan</a>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-futuristic-outline">Login</a>
            </div>
        </div>
    </nav>
    <div class="container text-center futuristic-container">
        <img src="https://static.vecteezy.com/system/resources/previews/019/787/050/original/shopping-cart-icon-white-glyph-png.png"
             alt="" class="futuristic-icon mb-4">
        <h1 class="display-4" style="font-weight: 700;">Selamat Datang di Sistem Penjualan</h1>
        <p class="lead" style="color: #aaa;">Silakan login untuk melihat katalog produk futuristik kami.</p>
    </div>
</body>
</html>