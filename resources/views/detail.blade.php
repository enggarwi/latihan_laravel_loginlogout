<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Pembelian</title>
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
        .product-image {
            border-radius: 12px;
            border: 1px solid var(--futuristic-border);
            box-shadow: 0 0 30px rgba(0, 229, 255, 0.2);
        }
        .product-title {
            font-weight: 700;
            color: var(--futuristic-primary);
        }
        .product-price {
            font-weight: 600;
            color: var(--futuristic-secondary);
            font-size: 1.75rem;
        }
        .product-description {
            color: #ccc;
        }
        
        /* CSS Baru untuk Spesifikasi */
        .spec-list {
            list-style: none;
            padding-left: 0;
            background: var(--futuristic-card-bg);
            border-radius: 8px;
            border: 1px solid var(--futuristic-border);
            overflow: hidden;
        }
        .spec-list li {
            padding: 12px 15px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid rgba(0, 229, 255, 0.1);
        }
        .spec-list li:last-child {
            border-bottom: none;
        }
        .spec-list li strong {
            color: var(--futuristic-primary);
            flex-basis: 40%;
        }
        .spec-list li span {
            color: #eee;
            flex-basis: 60%;
            text-align: right;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-futuristic sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('produk') }}" style="font-weight: 600; color: var(--futuristic-primary);">Sistem Penjualan</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-futuristic-outline">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row align-items-start">
            <div class="col-md-5">
                <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid rounded shadow product-image sticky-top" style="top: 100px;">
            </div>
            <div class="col-md-7">
                <h2 class="product-title">{{ $detail['nama'] }}</h2>
                <h4 class="product-price">{{ $detail['harga'] }}</h4>
                <p class="mt-3 product-description">{{ $detail['deskripsi'] }}</p>

                <div class="mt-4">
                    <h5 style="color: var(--futuristic-primary); font-weight: 600;">Spesifikasi Produk</h5>
                    <ul class="spec-list mt-3">
                        @foreach($detail['spec'] as $key => $value)
                            <li>
                                <strong>{{ $key }}</strong>
                                <span>{{ $value }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="{{ route('checkout.alamat', $detail['id']) }}" class="btn btn-futuristic btn-lg me-2">Konfirmasi Pembelian</a>
                    <a href="{{ route('produk') }}" class="btn btn-futuristic-outline btn-lg">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>