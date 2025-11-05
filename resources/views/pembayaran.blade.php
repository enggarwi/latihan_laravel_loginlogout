<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
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
        .futuristic-card {
            background: var(--futuristic-card-bg);
            border: 1px solid var(--futuristic-border);
            border-radius: 12px;
            padding: 1.5rem;
        }
        .summary-list { list-style: none; padding-left: 0; }
        .summary-list li { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgba(0, 229, 255, 0.1); }
        .summary-list li:last-child { border-bottom: none; }
        .summary-list li strong { color: #ccc; }
        .summary-list li span { color: var(--futuristic-secondary); font-weight: 600; text-align: right; }
        
        /* CSS untuk Halaman Sukses (diambil dari sukses.blade.php) */
        .success-container {
            text-align: center;
        }
        .checkmark-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--futuristic-primary);
            display: inline-block;
            margin-bottom: 20px;
            box-shadow: 0 0 25px rgba(0, 229, 255, 0.7);
        }
        .checkmark-icon {
            color: var(--futuristic-bg);
            font-size: 50px;
            line-height: 80px;
            font-weight: 900;
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
    
        <div id="payment-section">
            <h2 class="text-center" style="color: var(--futuristic-primary); font-weight: 600;">Konfirmasi Pembayaran</h2>
            <p class="text-center text-muted">Selesaikan pembayaran untuk memproses pesanan Anda.</p>
            
            <div class="row mt-5 justify-content-center">
                <div class="col-md-5">
                    <div class="futuristic-card text-center">
                        <h4 style="font-weight: 600;">Pindai QRIS</h4>
                        <p class="text-muted">Gunakan aplikasi e-wallet Anda (GoPay, OVO, Dana, dll) untuk membayar.</p>
                        <img src="{{ asset('images/qris_dummy.png') }}" alt="QRIS" class="img-fluid rounded" style="max-width: 250px; border: 5px solid white;">
                        <h3 class="mt-3" style="color: var(--futuristic-primary);">{{ $detail['harga'] }}</h3>
                        <div class="d-grid mt-4">
                            <button type="button" onclick="showSuccess()" class="btn btn-futuristic btn-lg">Konfirmasi Pembayaran Selesai</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="futuristic-card">
                        <h4 style="font-weight: 600;">Ringkasan Pesanan</h4>
                        <ul class="summary-list mt-3">
                            <li>
                                <strong>Produk</strong>
                                <span>{{ $detail['nama'] }}</span>
                            </li>
                            <li>
                                <strong>Penerima</strong>
                                <span>{{ $alamat['nama_lengkap'] }}</span>
                            </li>
                            <li>
                                <strong>Alamat</strong>
                                <span>{{ $alamat['alamat_lengkap'] }}</span>
                            </li>
                            <li>
                                <strong>Nomor HP</strong>
                                <span>{{ $alamat['no_hp'] }}</span>
                            </li>
                            <li style="border-top: 2px solid var(--futuristic-primary); padding-top: 15px; margin-top: 10px;">
                                <strong style="font-size: 1.2rem; color: var(--futuristic-primary);">Total Bayar</strong>
                                <span style="font-size: 1.2rem; color: var(--futuristic-primary);">{{ $detail['harga'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <div id="success-section" style="display: none;">
            <div class="success-container">
                <div class="checkmark-circle">
                    <span class="checkmark-icon">&check;</span>
                </div>
                <h1 style="color: var(--futuristic-primary); font-weight: 700; font-size: 3rem;">Pembayaran Berhasil!</h1>
                <p class="lead" style="color: #ccc;">Terima kasih telah berbelanja. Pesanan Anda sedang kami proses.</p>
                <div class="mt-5">
                    <a href="{{ route('produk') }}" class="btn btn-futuristic" style="padding: 12px 30px; font-size: 1.1rem;">Kembali ke Halaman Produk</a>
                </div>
            </div>
        </div> </div>

    <script>
        function showSuccess() {
            // Sembunyikan bagian pembayaran
            document.getElementById('payment-section').style.display = 'none';
            // Tampilkan bagian sukses
            document.getElementById('success-section').style.display = 'block';
            // Scroll ke atas halaman
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>