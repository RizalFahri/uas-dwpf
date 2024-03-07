<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REESHOP | PRODUCT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../custom-color.css">
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
                    <a class="navbar-brand" href="../index2.php">
                        <img src="../img/logo.png" alt="Logo" class="d-inline-block align-text-top custom-logo">
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="custom-container-box2">
            <div id="carouselExampleAutoplaying" class="carousel slide custom-carousel-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/product/sample/product-1.png" class="d-block w-100 h-100 custom-carousel-image" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/product/sample/product-2.png" class="d-block w-100 h-100 custom-carousel-image" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/product/sample/product-3.png" class="d-block w-100 h-100 custom-carousel-image" alt="...">
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
            <div class="container">
                <p class="txt-judul2">GAMING MOUSE REXUS 2</p>
                <p class="txt-subjudul">Deskripsi Produk :</p>
                <p class="txt-subjudul2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis sapiente ducimus vel obcaecati hic et similique doloremque totam reprehenderit, molestiae recusandae animi deserunt. Amet aspernatur totam ab, quisquam architecto saepe voluptatem, officiis dolores fugit earum sint ipsum porro molestias consequuntur.
                </p>
                <ul class="txt-subjudul2">
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem, ipsum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem, ipsum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                </ul>
                <p class="txt-subjudul2">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis placeat delectus magnam corporis cum aspernatur culpa ratione maxime sit porro voluptatem suscipit asperiores, aut quos? Perferendis quibusdam sit corporis ex?
                </p>
                <p class="txt-subjudul">Rp. --</p>
            </div>
            <button class="btn btn-primary custom-container-box-btn2" onclick="tambahkanKeKeranjang()">Masukkan Keranjang</button>
        </div>
    </div>


    <footer class="bg-dark text-light text-center py-3 custom-footer-index">
        <div class="container">
            <p>&copy; 2023 RIZAL FAHRI IRAWAN. UAS DWPF. ALL RIGHT RESERVED.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>