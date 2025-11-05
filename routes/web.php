<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');
    if ($username === 'admin' && $password === '12345') {
        return redirect()->route('produk');
    } else {
    }
    return back()->with('error', 'Username atau Password salah!');
})->name('login.process');

// Halaman Produk Penjualan
Route::get('/produk', function () {
    $produk = [
        [
            'id' => 1, 
            'nama' => 'Laptop ASUS', 
            'harga' => 'Rp 8.500.000', 
            'foto' => 'images/produk_laptop.jpg', 
            'deskripsi' => 'Laptop ASUS seri Zenbook dengan prosesor Intel i7 generasi terbaru dan RAM 16GB untuk multitasking tanpa batas.',
            'spec' => [
                'Prosesor' => 'Intel Core i7-1360P', 'RAM' => '16 GB LPDDR5', 'Penyimpanan' => '1 TB M.2 NVMe PCIe 4.0 SSD', 'Layar' => '14.0-inch, 2.8K (2880 x 1800) OLED', 'Grafis' => 'Intel Iris Xe Graphics', 'Sistem Operasi' => 'Windows 11 Home'
            ]
        ],
        [
            'id' => 2, 
            'nama' => 'Smartphone Samsung', 
            'harga' => 'Rp 4.200.000', 
            'foto' => 'images/produk_hp.jpg', 
            'deskripsi' => 'Smartphone Samsung Galaxy A-series dengan layar AMOLED 6.5 inci yang jernih dan kamera utama 48MP.',
            'spec' => [
                'Layar' => '6.5" Super AMOLED, 120Hz', 'Prosesor' => 'Exynos 1380', 'RAM' => '8 GB', 'Penyimpanan' => '128 GB (Bisa ditambah microSD)', 'Kamera Utama' => '48 MP (OIS) + 8 MP Ultrawide', 'Baterai' => '5000 mAh, 25W Fast Charging'
            ]
        ],
        [
            'id' => 3, 
            'nama' => 'Kamera Canon', 
            'harga' => 'Rp 6.750.000', 
            'foto' => 'images/produk_kamera.jpg', 
            'deskripsi' => 'Kamera Canon EOS M50 Mark II, kamera mirrorless ringan dengan lensa kit 18-55mm, cocok untuk vlogging.',
            'spec' => [
                'Tipe' => 'Mirrorless', 'Sensor' => '24.1MP APS-C CMOS', 'Prosesor' => 'DIGIC 8', 'Video' => '4K/24p, Full HD/60p', 'Layar' => '3.0" Vari-angle Touchscreen', 'Fitur' => 'Dual Pixel CMOS AF, Wi-Fi, Bluetooth'
            ]
        ],
        [
            'id' => 4, 
            'nama' => 'VR Headset', 
            'harga' => 'Rp 5.100.000', 
            'foto' => 'images/produk_vr.jpg', 
            'deskripsi' => 'Headset Virtual Reality (Meta Quest 2) all-in-one dengan resolusi 4K dan tracking 360 derajat yang imersif.',
            'spec' => [
                'Tipe' => 'Standalone VR (All-in-one)', 'Resolusi' => '1832 x 1920 per mata (mendekati 4K)', 'Refresh Rate' => '90Hz (mendukung 120Hz)', 'Penyimpanan' => '128 GB', 'Tracking' => '6DoF (6 Degrees of Freedom)', 'Kontroler' => 'Touch Controllers (Generasi 3)'
            ]
        ],
        [
            'id' => 5, 
            'nama' => 'Gaming Keyboard', 
            'harga' => 'Rp 1.200.000', 
            'foto' => 'images/produk_keyboard.jpg', 
            'deskripsi' => 'Keyboard Mekanikal Gaming (Rexus) RGB dengan Blue Switch yang responsif dan suara "clicky" memuaskan.',
            'spec' => [
                'Tipe' => 'Mekanikal', 'Switch' => 'Outemu Blue Switch (Clicky, Tactile)', 'Layout' => 'Full Size (104 Tombol)', 'Fitur' => 'Per-key RGB Lighting', 'Konektivitas' => 'Wired USB-C', 'Material' => 'Aluminium Alloy Top Plate'
            ]
        ],
        [
            'id' => 6, 
            'nama' => 'Drone Quadcopter', 
            'harga' => 'Rp 3.800.000', 
            'foto' => 'images/produk_drone.jpg', 
            'deskripsi' => 'Drone (DJI Mini 2 SE) dengan kamera 2.7K, GPS, dan waktu terbang 31 menit. Sangat ringan, di bawah 249 gram.',
            'spec' => [
                'Berat' => '< 249 gram', 'Kamera' => '2.7K Video, 12 MP Foto', 'Waktu Terbang' => 'Maks. 31 Menit', 'Jangkauan' => '10 km OcuSync 2.0', 'Fitur' => 'GPS, Return-to-Home (RTH)', 'Gimbal' => '3-axis (Pitch, Roll, Yaw)'
            ]
        ],
    ];
    return view('produk', compact('produk'));
})->name('produk');

// Fungsi helper untuk mengambil semua data produk
function getProdukData() {
    return [
        1 => [
            'id' => 1, 'nama' => 'Laptop ASUS', 'harga' => 'Rp 8.500.000', 'foto' => 'images/produk_laptop.jpg', 'deskripsi' => 'Laptop ASUS seri Zenbook...',
            'spec' => ['Prosesor' => 'Intel Core i7-1360P', 'RAM' => '16 GB LPDDR5', 'Penyimpanan' => '1 TB M.2 NVMe PCIe 4.0 SSD', 'Layar' => '14.0-inch, 2.8K (2880 x 1800) OLED', 'Grafis' => 'Intel Iris Xe Graphics', 'Sistem Operasi' => 'Windows 11 Home']
        ],
        2 => [
            'id' => 2, 'nama' => 'Smartphone Samsung', 'harga' => 'Rp 4.200.000', 'foto' => 'images/produk_hp.jpg', 'deskripsi' => 'Smartphone Samsung Galaxy A-series...',
            'spec' => ['Layar' => '6.5" Super AMOLED, 120Hz', 'Prosesor' => 'Exynos 1380', 'RAM' => '8 GB', 'Penyimpanan' => '128 GB', 'Kamera Utama' => '48 MP (OIS)', 'Baterai' => '5000 mAh']
        ],
        3 => [
            'id' => 3, 'nama' => 'Kamera Canon', 'harga' => 'Rp 6.750.000', 'foto' => 'images/produk_kamera.jpg', 'deskripsi' => 'Kamera Canon EOS M50 Mark II...',
            'spec' => ['Tipe' => 'Mirrorless', 'Sensor' => '24.1MP APS-C CMOS', 'Prosesor' => 'DIGIC 8', 'Video' => '4K/24p', 'Layar' => '3.0" Vari-angle Touchscreen', 'Fitur' => 'Dual Pixel CMOS AF']
        ],
        4 => [
            'id' => 4, 'nama' => 'VR Headset', 'harga' => 'Rp 5.100.000', 'foto' => 'images/produk_vr.jpg', 'deskripsi' => 'Headset Virtual Reality (Meta Quest 2)...',
            'spec' => ['Tipe' => 'Standalone VR', 'Resolusi' => '1832 x 1920 per mata', 'Refresh Rate' => '90Hz (up to 120Hz)', 'Penyimpanan' => '128 GB', 'Tracking' => '6DoF', 'Kontroler' => 'Touch Controllers']
        ],
        5 => [
            'id' => 5, 'nama' => 'Gaming Keyboard', 'harga' => 'Rp 1.200.000', 'foto' => 'images/produk_keyboard.jpg', 'deskripsi' => 'Keyboard Mekanikal Gaming (Rexus)...',
            'spec' => ['Tipe' => 'Mekanikal', 'Switch' => 'Outemu Blue Switch', 'Layout' => 'Full Size', 'Fitur' => 'Per-key RGB', 'Konektivitas' => 'Wired USB-C', 'Material' => 'Aluminium Alloy']
        ],
        6 => [
            'id' => 6, 'nama' => 'Drone Quadcopter', 'harga' => 'Rp 3.800.000', 'foto' => 'images/produk_drone.jpg', 'deskripsi' => 'Drone (DJI Mini 2 SE)...',
            'spec' => ['Berat' => '< 249 gram', 'Kamera' => '2.7K Video, 12 MP Foto', 'Waktu Terbang' => 'Maks. 31 Menit', 'Jangkauan' => '10 km OcuSync 2.0', 'Fitur' => 'GPS, RTH', 'Gimbal' => '3-axis']
        ],
    ];
}

// Halaman Detail Pembelian
Route::get('/produk/{id}', function ($id) {
    $produk = getProdukData();
    if (!array_key_exists($id, $produk)) {
         abort(404, 'Produk tidak ditemukan');
    }
    $detail = $produk[$id];
    $detail['id'] = $id; 
    return view('detail', compact('detail'));
})->name('produk.detail');


// ----- RUTE ALUR CHECKOUT -----

// RUTE 1: Halaman Alamat (GET)
Route::get('/checkout/{id}', function ($id) {
    $produk = getProdukData();
    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }
    $detail = $produk[$id];
    $detail['id'] = $id; 
    return view('alamat', compact('detail'));
})->name('checkout.alamat');

// RUTE 2: Halaman Pembayaran (POST dari form alamat)
Route::post('/checkout/payment', function (Request $request) {
    $produk = getProdukData();
    $id = $request->input('product_id');

    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }
    $detail = $produk[$id];
    
    $alamat = [
        'nama_lengkap' => $request->input('nama_lengkap'),
        'alamat_lengkap' => $request->input('alamat_lengkap'),
        'no_hp' => $request->input('no_hp'),
    ];

    return view('pembayaran', compact('detail', 'alamat'));
})->name('checkout.pembayaran');

// RUTE 3 (SUKSES) -> SUDAH DIHAPUS

// ----- AKHIR RUTE CHECKOUT -----


// Logout
Route::get('/logout', function () {
    return redirect()->route('beranda');
})->name('logout');