<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Our Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="halamanutama.css">
</head>

<body>

    <?php
    // Memulai session
    session_start();

    // Memeriksa apakah pengguna sudah login
    if (!isset($_SESSION['username'])) {
        // Jika belum, redirect ke halaman login
        header('Location: index.php');
        exit;
    }
    ?>
    <header>
        <div class="overlay"></div>
        <nav>
            <div class="logo">
                <a href="#">Sistem Informasi Akademik Fasilkom UPN Jatim</a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="burger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
        <div class="hero-text">
            <?php
            // Menampilkan pesan selamat datang
            $username = $_SESSION['username'];
    $login_time = date('l, j F Y') . ' pukul' . date('H:i:s') . ' WIB';
            echo "<h1>Selamat Datang, " . ucwords($username) . "!</h1>";
            echo "<p>Anda berhasil login pada $login_time</p>";
            echo '<p>Discover the best services for your needs</p>';
            echo '<a href="#" class="btn">Get Started</a>';
            ?>
        </div>
    </header>

    <section class="about">
        <div class="container">
            <div class="about-text">
                <h2>About Us</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident explicabo facere cumque ipsum placeat velit error labore. Debitis optio error maxime sit, perferendis expedita odit blanditiis natus dolorum reprehenderit ipsum.
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="about-model">
                <img src="img/about.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="box-container">
                <div class="box">
                    <img src="img/web.jpg" alt="">
                    <h3>Web Development</h3>
                    <p>
                        <lorem></lorem>
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="box">
                    <img src="img/app.jpg" alt="">
                    <h3>App Development</h3>
                    <p>
                        <lorem></lorem>
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="box">
                    <img src="img/seo.jpg" alt="">
                    <h3>SEO</h3>
                    <p>
                        <lorem></lorem>
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-row">
                <div class="contact-left">
                    <h3>Send Your Message</h3>
                    <form action="#">
                        <input type="text" placeholder="Enter Your Name">
                        <input type="email" placeholder="Enter Your Email">
                        <textarea rows="8" placeholder="Enter Your Message"></textarea>
                        <input type="submit" value="Send Message" class="btn">
                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach Us</h3>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <a href="mailto:us@gmail.com"> contactus@gmail.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>
                                <a href="tel:+6281234567890"> +6281234567890</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>
                                <a href="https://goo.gl/maps/"> Jl. Raya No. 1, Jakarta</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Created with <i class="fas fa-heart"></i> by <a href="#">Our Website</a></p>
    </footer>
</body>

</html>