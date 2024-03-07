<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: masuk.php"); // Arahkan ke halaman login jika sesi username tidak tersedia
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REESHOP | UTAMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom-color.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid custom-navbar">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar d-flex justify-content-between">
                    <a class="navbar-brand" href="index2.php">
                        <img src="img/logo.png" alt="Logo" class="d-inline-block align-text-top custom-logo">
                    </a>
                    <div class="d-flex">
                        <!-- <form class="d-flex" role="search">
                            <input class="form-control me-2 custom-search-input" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn custom-search-btn" type="submit">Search</button>
                        </form> -->
                        <a class="btn btn-primary ms-2 me-2 custom-button-daftar-masuk" role="button" href="keranjang.php">KERANJANG</a>
                        <a class="btn btn-secondary custom-button-daftar-masuk" role="button" href="index.php">LOGOUT</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div id="carouselExampleAutoplaying" class="carousel slide custom-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1.2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1.3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container custom-container-b">
        <a href="mousepage.php">
            <div class="col">
                <img src="img/b1.png" alt="">
            </div>
        </a>
        <a href="keyboardpage.php">
            <div class="col">
                <img src="img/b2.png" alt="">
            </div>
        </a>
        <a href="laptoppage.php">
            <div class="col">
                <img src="img/b3.png" alt="">
            </div>
        </a>
        <a href="monitorpage.php">
            <div class="col">
                <img src="img/b4.png" alt="">
            </div>
        </a>
        <a href="microphonepage.php">
            <div class="col">
                <img src="img/b5.png" alt="">
            </div>
        </a>
        <a href="soundpage.php">
            <div class="col">
                <img src="img/b6.png" alt="">
            </div>
        </a>
        <a href="gamepadpage.php">
            <div class="col">
                <img src="img/b7.png" alt="">
            </div>
        </a>
        <a href="webcampage.php">
            <div class="col">
                <img src="img/b8.png" alt="">
            </div>
        </a>
    </div>
    <p class="txt-judul-2">PRODUK TERATAS</p>
    <div class="container-fluid">
        <div class="row custom-container-c">
            <div class="col-md-2">
                <a href="product/product-11.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-11.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">LENOVO IDEAPAD SLIM 1</p>
                            <p class="card-text custom-p-txt">Rp. 5.999.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-2.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-2.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMING HEADSET REXUS 2</p>
                            <p class="card-text custom-p-txt">Rp. 399.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-3.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-3.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMING MOUSE REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 199.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-5.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-5.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMEPAD REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 499.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-7.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-7.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">KEYBOARD REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 599.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div class="row justify-content-center">
            <p class="txt-judul-2-1">SEMUA PRODUK</p>
            <div class="col-md-2">
                <a href="product/product-1.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-1.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMING HEADSET REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 299.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-2.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-2.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMING HEADSET REXUS 2</p>
                            <p class="card-text custom-p-txt">Rp. 399.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-3.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-3.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMING MOUSE REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 199.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-4.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-4.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMING MOUSE REXUS 2</p>
                            <p class="card-text custom-p-txt">Rp. 599.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-5.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-5.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMEPAD REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 199.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <p></p>
            <div class="col-md-2">
                <a href="product/product-6.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-6.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">GAMEPAD REXUS 2</p>
                            <p class="card-text custom-p-txt">Rp. 499.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-7.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-7.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">KEYBOARD REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 399.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-11.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-11.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">LENOVO IDEAPAD SLIM 1</p>
                            <p class="card-text custom-p-txt">Rp. 5.899.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-9.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-9.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">MICROPHONE REXUS</p>
                            <p class="card-text custom-p-txt">Rp. 299.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="product/product-10.php" class="custom-a-produk" onclick="tampilkanHalamanProduk(event)">
                    <div class="card custom-container-box custom-container-box-2 custom-container-box-2">
                        <div class="card-img-top custom-container-box-img">
                            <img src="img/product/product-image-10.jpeg" alt="Image 2">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text custom-p-txt">MONITOR GAMING LG 27 "</p>
                            <p class="card-text custom-p-txt">Rp. 1.599.000</p>
                            <button class="btn btn-primary custom-container-box-btn" onclick="tambahkanKeKeranjang(event)">Masukkan Keranjang</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script>
        // function tambahkanKeKeranjang() {
        //     // Kirim permintaan AJAX ke server untuk menambahkan item ke keranjang
        //     var xhr = new XMLHttpRequest();
        //     xhr.onreadystatechange = function() {
        //         if (xhr.readyState === 4 && xhr.status === 200) {
        //             alert("Produk berhasil dimasukkan ke keranjang!");
        //         }
        //     };

        //     // Ganti URL dan parameter sesuai dengan kebutuhan Anda
        //     xhr.open("GET", "tambah_ke_keranjang.php?produk_id=1", true);
        //     xhr.send();
        // }
        function tampilkanHalamanProduk(event) {
            // Cek apakah yang diklik adalah button
            if (event.target.tagName.toLowerCase() !== 'button') {
                // Pindahkan ke halaman produk jika yang diklik bukan button
                window.location.href = event.currentTarget.href;
            }
        }

        function tambahkanKeKeranjang(event) {
            // Hentikan peristiwa klik (default behavior)
            event.preventDefault();

            // Kirim permintaan AJAX ke server untuk menambahkan item ke keranjang
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("Produk berhasil dimasukkan ke keranjang!");
                }
            };

            // Ganti URL dan parameter sesuai dengan kebutuhan Anda
            xhr.open("GET", "tambah_ke_keranjang.php?produk_id=1", true);
            xhr.send();
        }
    </script>

    <footer class="bg-dark text-light text-center py-3 custom-footer-index">
        <div class="container">
            <p>&copy; 2023 RIZAL FAHRI IRAWAN. UAS DWPF. ALL RIGHT RESERVED.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>