<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REESHOP | PRODUCT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom-color.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@800&family=Noto+Sans&display=swap" rel="stylesheet">
    <script>
        function tambahkanKeKeranjang() {
            alert('Produk berhasil ditambahkan ke keranjang!');
        }
    </script>
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <p class="txt-judul">PRODUK WEBCAM</p>
            <!-- <div class="col-md-2">
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
            </div> -->
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>