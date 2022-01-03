<?php

$statusMsg = '';
$msgClass = '';
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Cek apakah ada data yang belum diisi
    if (!empty($email) && !empty($name) && !empty($message)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        } else {
            // Pengaturan penerima email dan subjek email
            $toEmail = 'muhammadatby@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari ' . $name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Name</h4><p>' . $name . '</p>
                <h4>Email</h4><p>' . $email . '</p>
                <h4>Message</h4><p>' . $message . '</p>';

            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Header tambahan
            $headers .= 'From: ' . $name . '<' . $email . '>' . "\r\n";

            // Send email
            if (mail($toEmail, $emailSubject, $htmlContent, $headers)) {
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            } else {
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    } else {
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Imamnurhy">
    <title>Portofolio - Imam Nurhidayat</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="mobile-navigasi">
        <div class="mobile-navigasi-animasipindah"></div>
        <div class="mobile-navigasi-item active">
            <a href="#home">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mobile-navigasi-item">
            <a href="#kontener">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mobile-navigasi-item">
            <a href="#tentang">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mobile-navigasi-item">
            <a href="#footer">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">
                    Imam Nurhidayat
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Beranda
                    </div>
                </a>
                <a href="#kontener">
                    <div class="menu-item">
                        About
                    </div>
                </a>
                <a href="#tentang">
                    <div class="menu-item">
                        Buat website?
                    </div>
                </a>
                <a href="#footer">
                    <div class="menu-item">
                        Hubungi Saya
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section id="home" class="fullheight align-items-center bekgron-gambar bekgron-gambar-fixed">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="bagiankhusus">
                        <h1 class="bagiankiri animasi-scroll">
                            Frontend Dev
                        </h1>
                        <p class="bagiankiri animasi-scroll delay-2">
                            Saya adalah orang yang berpengalaman sebagai Web Designer, Frontend Web Developer dan Junior
                            Backend Developer. Terampil dalam HTML5, CSS, Bootstrap, JavaScript dan PHP Native. Saat ini
                            saya adalah mahasiswa aktif di Universitas Nusa Mandiri.
                        </p>
                        <div class="bagiankiri animasi-scroll delay-4">
                            <button>
                                Hubungi Saya
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="align-items-center bekgron-gambar bekgron-gambar-fixed" id="kontener" style="background-image: url(assets/begeh2.jpg);">
        <div class="container">
            <div class="kontener">
                <h1>
                    Apa yang membuat <span class="primary-color">Pelayanan Saya</span> Berbeda?
                </h1>
                <p>Saya bisa membuat website Anda dalam waktu yang cukup singkat, Design Website yang Saya ajukan untuk
                    anda sudah menggunakan konsep modern design, Website yang saya buat untuk Anda berteknologi tinggi
                    dan mampu diakses dengan sangat cepat. Saya juga sangat memperhatikan kualitas Website Anda.</p>
            </div>
        </div>
    </section>

    <section class="tentang fullheight align-items-center" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets/bg2.jpg" alt="" class="full_lebar bagiankiri animasi-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="tentang-bagiankhusus bagiankanan animasi-scroll">
                        <h3>
                            <span class="primary-color">Mari</span> Buat <span class="primary-color">Website</span>
                            Untuk Bisnis <span class="primary-color"> Anda</span>
                        </h3>
                        <p>Hubungi saya untuk berkonsultasi mengenai pembuatan website. Saya siap membantu bisnis/usaha
                            anda menjadi lebih kredibelitas dan profesional. Tunggu apa lagi? Hubungi Saya Segera!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer bekgron-gambar" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        Imam Nurhidayat
                    </h1>
                    <br>
                    <p>Mari buat bisnis / usaha Anda selangkah lebih maju. Hubungi Saya Sekarang!</p>
                    <br>
                    <p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="mailto:wafarifqianafin@gmail.com">imamnurhy@gmail.com</a></p>
                    <p>Facebook&nbsp;&nbsp;: Imamnurhy</p>
                    <p>Instagram : @imamnurhy</p>
                </div>
                <div class="col-6 col-xs-12">
                    <h1>
                        Hubungi Saya
                    </h1>
                    <br>
                    <p>Saya selalu menunggu Anda, Mari mulai sedikit kemajuan bersama Saya untuk bisnis / usaha Anda!
                    </p>

                    <?php if (!empty($statusMsg)) { ?>
                        <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>"><?php echo $statusMsg; ?></p>
                    <?php } ?>

                    <form action="" method="POST">
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="input-group">
                            <input type="text" name="email" placeholder="Masukan Alamat Email Anda">
                        </div>
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Masukan Pesan Anda">
                        </div>

                        <input type="submit"> Hubungi </input>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="js/index.js"></script>
</body>

</html>