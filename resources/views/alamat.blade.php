<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Alamat Pengiriman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --futuristic-bg: #0d0f1a;
            --futuristic-bg-gradient: radial-gradient(circle, #1a1c2e 0%, #0d0f1a 100%);
            --futuristic-primary: #00e5ff;
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
        .product-summary-card {
            background: var(--futuristic-card-bg);
            border: 1px solid var(--futuristic-border);
            border-radius: 12px;
            padding: 1.5rem;
            position: sticky;
            top: 100px;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-futuristic sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('produk') }}" style="font-weight: 600; color: var(--futuristic-primary);">Sistem Penjualan</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <h2 style="color: var(--futuristic-primary); font-weight: 600;">Alamat Pengiriman</h2>
                <p>Silakan isi data pengiriman Anda dengan lengkap.</p>
                <form action="{{ route('checkout.pembayaran') }}" method="POST" class="mt-4">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $detail['id'] }}">
                    
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Lengkap</label>
                        <textarea name="alamat_lengkap" class="form-control" rows="3" placeholder="Masukkan alamat lengkap (jalan, no. rumah, RT/RW, kelurahan, kecamatan, kota/kab)" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor HP (WhatsApp)</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Contoh: 08123456789" required>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-futuristic btn-lg">Lanjut ke Pembayaran</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <div class="product-summary-card">
                    <h4 style="color: var(--futuristic-primary);">Ringkasan Pesanan</h4>
                    <hr style="border-color: var(--futuristic-border);">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid rounded" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="ms-3">
                            <h5 class="mb-1">{{ $detail['nama'] }}</h5>
                            <h4 class="mb-0" style="color: var(--futuristic-primary);">{{ $detail['harga'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>