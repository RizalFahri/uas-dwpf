<?php
session_start();

// Mendapatkan ID produk yang ditambahkan ke keranjang
$produk_id = $_POST['produk_id'];

// Mendapatkan ID pengguna (sesuaikan ini dengan cara Anda mengidentifikasi pengguna)
$user_id = 1; // Contoh: ID pengguna statis (sesuaikan dengan cara Anda mendapatkan ID pengguna)

// Membuat kunci sesi unik untuk setiap pengguna
$user_cart_key = 'keranjang_' . $user_id;

// Cek apakah sesi keranjang untuk pengguna tersebut sudah ada atau belum
if (!isset($_SESSION[$user_cart_key])) {
    $_SESSION[$user_cart_key] = array(); // Inisialisasi sesi keranjang jika belum ada
}

// Tambahkan produk ke sesi keranjang pengguna
$_SESSION[$user_cart_key][] = $produk_id;

// Respon berhasil
echo json_encode(array('status' => 'success', 'message' => 'Produk berhasil ditambahkan ke keranjang.'));
?>