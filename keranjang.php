<!-- <?php
session_start();

// Mendapatkan ID pengguna (sesuaikan ini dengan cara Anda mengidentifikasi pengguna)
$user_id = 1; // Contoh: ID pengguna statis (sesuaikan dengan cara Anda mendapatkan ID pengguna)

// Membuat kunci sesi unik untuk setiap pengguna
$user_cart_key = 'keranjang_' . $user_id;

// Cek apakah sesi keranjang untuk pengguna tersebut sudah ada atau belum
if (!isset($_SESSION[$user_cart_key]) || empty($_SESSION[$user_cart_key])) {
    echo "Keranjang belanja kosong.";
} else {
    echo "<h2>Isi Keranjang Belanja:</h2>";
    echo "<ul>";
    foreach ($_SESSION[$user_cart_key] as $produk_id) {
        echo "<li>Produk ID: $produk_id</li>";
    }
    echo "</ul>";
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>UNDER MAINTENANCE !</p>
    <a href="index2.php">KLIK DISINI UNTUK KEMBALI</a>
</body>
</html>