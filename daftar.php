<?php
session_start();
include "config.php";

$registrationStatus = "";
$formSubmitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulir telah disubmit
    $formSubmitted = true;

    // Proses pendaftaran
    $namaLengkap = $_POST["namaLengkap"];
    $namaUser = $_POST["namaUser"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validasi bahwa semua input diisi
    if (empty($namaLengkap) || empty($namaUser) || empty($email) || empty($password)) {
        $registrationStatus = "Semua formulir harus diisi.";
    } elseif (empty(trim($email)) || empty(trim($password))) {
        $registrationStatus = "Email dan password tidak boleh kosong.";
    } else {
        // Lakukan validasi dan masukkan data ke dalam database (gantilah sesuai kebutuhan)
        $sql = "INSERT INTO users (nama_lengkap, username, email, password) VALUES ('$namaLengkap', '$namaUser', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $registrationStatus = "Pendaftaran berhasil!";
        } else {
            $registrationStatus = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REESHOP | DAFTAR</title>
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
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="Logo" class="d-inline-block align-text-top custom-logo">
                    </a>
                    <div class="d-flex">
                        <a class="btn btn-primary ms-2 me-2 custom-button-daftar-masuk" role="button" href="masuk.php">MASUK</a>
                        <a class="btn btn-secondary custom-button-daftar-masuk" role="button" href="daftar.php">DAFTAR</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Formulir -->
        <form class="container custom-container-masuk-daftar" method="post" action="">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>DATA TIDAK HARUS EMAIL GOOGLE !</strong> Gunakan data palsu untuk mendaftar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <p class="txt-judul">DAFTAR</p>
            <div class="mb-3">
                <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputName" name="namaLengkap">
            </div>
            <div class="mb-3">
                <label for="exampleInputNamaUser" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="exampleInputUsername" name="namaUser">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="">Sudah Punya Akun? <a href="masuk.php">Klik Disini</a></label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">DAFTAR</button>

            <!-- Alert -->
            <?php
            if ($formSubmitted && isset($registrationStatus)) {
                if (strpos($registrationStatus, "berhasil") !== false) {
                    echo '<div class="alert alert-success mt-3" role="alert">' . $registrationStatus . '</div>';
                } else {
                    echo '<div class="alert alert-danger mt-3" role="alert">' . $registrationStatus . '</div>';
                }
            }
            ?>
        </form>
    </div>

    <footer class="bg-dark text-light text-center py-3 custom-footer">
        <div class="container">
            <p>&copy; 2023 RIZAL FAHRI IRAWAN. UAS DWPF. ALL RIGHT RESERVED.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>