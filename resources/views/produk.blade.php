<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk Penjualan</title>
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
        .futuristic-card {
            background: var(--futuristic-card-bg);
            border: 1px solid var(--futuristic-border);
            border-radius: 12px;
            backdrop-filter: blur(5px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .futuristic-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 229, 255, 0.2);
            border-color: var(--futuristic-primary);
        }
        .futuristic-card .card-title {
            color: var(--futuristic-primary);
            font-weight: 600;
        }
        .futuristic-card .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-futuristic sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}" style="font-weight: 600; color: var(--futuristic-primary);">Sistem Penjualan</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-futuristic-outline">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4" style="font-weight: 700;">Daftar Produk</h2>
        <div class="row">
            @foreach($produk as $item)
            <div class="col-md-4 mb-4">
                <div class="card futuristic-card h-100">
                    <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{ $item['nama'] }}">
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-text text-muted" style="color: #aaa !important;">{{ $item['harga'] }}</p>
                        <a href="{{ route('produk.detail', $item['id']) }}" class="btn btn-futuristic mt-auto">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>