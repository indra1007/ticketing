<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <style>
        /* CSS Styles */
        .container {
            width: 80%;
            margin: 0 auto;
        }
    
        .header {
            background-color: #6ab7ff; /* Ubah warna latar belakang menjadi biru muda */
            color: #fff; /* Ubah warna teks menjadi putih */
        }
    
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
        }
    
        .top-menu {
            text-align: center;
            height: 70px; /* Tinggi top menu bar diperbesar */
        }
    
        .top-menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex; /* Menggunakan fleksibilitas */
            align-items: center; /* Menengahkan elemen dalam top menu bar */
            height: 100%; /* Menyesuaikan tinggi top menu bar */
        }
    
        .top-menu ul li {
            display: inline-block;
            margin-right: 20px;
            color: #fff;
            font-size: 25px; /* Ukuran teks menu diperbesar */
        }
    
        .top-menu ul li:last-child {
            margin-right: 0;
        }
    
        .login-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    
        .banner {
            background-image: url('banner-image.jpg');
            background-size: cover;
            height: 300px;
        }
    
        .search {
            padding: 20px 0;
            text-align: center;
        }
    
        .tabs {
            margin-bottom: 20px;
        }
    
        .tabs ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
    
        .tabs ul li {
            display: inline-block;
            margin-right: 20px;
            cursor: pointer;
        }
    
        .tabs ul li:last-child {
            margin-right: 0;
        }
    
        .tabs ul li.active {
            font-weight: bold;
        }
    
        .search-form {
            display: none;
        }
    
        .search-form.active {
            display: block;
        }
    
        .search-form input[type="text"],
        .search-form input[type="date"],
        .search-form input[type="number"],
        .search-form button {
            margin-bottom: 10px;
        }
    
        .carousel-item img {
            width: 100%;
            height: 400px; /* Sesuaikan tinggi sesuai kebutuhan */
            object-fit: cover;
        }

        /* CSS untuk kotak 3x2 */
        .destinations {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
            text-align: center;
            padding: 0 450px; /* Padding kiri kanan */
        }


        .destination {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 10px; /* Rounded corners */
        }

        .destination img {
            width: 250px; /* Ukuran gambar */
            height: 250px;
            margin-bottom: 10px; /* Spasi antara gambar dan teks */
            border-radius: 80%; /* Rounded corners */
        }

        /* CSS untuk footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
        }

                /* CSS untuk badge diskon */
        /* CSS untuk badge diskon */
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff0000; /* Warna latar merah */
            color: #fff; /* Warna teks putih */
            padding: 5px 10px; /* Padding */
            border-radius: 5px; /* Sudut bulat */
            font-weight: bold; /* Teks tebal */
        }

        /* CSS untuk bagian Tour */
        .tours {
            display: flex;
            justify-content: center;
            padding: 20px 50px; /* Padding kiri dan kanan */
        }

        .tour {
            margin: 0 10px; /* Margin untuk jarak antar kotak */
            text-align: center;
        }

        .tour-info {
            position: relative; /* Atur posisi untuk discount-badge */
            background-color: #f4f4f4; /* Warna latar belakang */
            padding: 45px; /* Padding */
            border-radius: 10px; /* Sudut bulat */
            text-align: center; /* Teks ditengah */
        }   

        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5733; /* Warna latar belakang badge */
            color: #fff; /* Warna teks badge */
            padding: 5px 10px; /* Padding badge */
            border-radius: 5px; /* Sudut bulat badge */
        }

        .tour-info img {
            width: 250px; /* Ukuran gambar */
            height: 250px;
            margin-bottom: 10px; /* Spasi antara gambar dan teks */
        }


        /* CSS untuk bagian Tour yang sedang didiskon */
        .discount-tour {
            margin-top: 20px; /* Spasi dari destinasi kota */
        }

        .discount-tour-item {
            position: relative; /* Diperlukan untuk penempatan badge */
        }

        .discount-tour-info {
            background-color: #f4f4f4; /* Warna latar belakang */
            padding: 20px; /* Padding */
            border-radius: 10px; /* Sudut bulat */
            text-align: center; /* Teks ditengah */
        }

        .discount-tour-info img {
            width: 250px; /* Ukuran gambar */
            height: 250px;
            margin-bottom: 10px; /* Spasi antara gambar dan teks */
        }
    </style>
    
</head>
<body>

<header class="header">
    <div class="container">
        <a href="#" class="logo">Logo</a>
        <nav class="top-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Hotel</a></li>
                <li><a href="#">Tour</a></li>
                <li><a href="#">Activity</a></li>
            </ul>
        </nav>
        <a href="#" class="login-button">Login</a>
    </div>
</header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/img_hero_6.jpg" class="d-block w-150" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="images/img2.jpg" class="d-block w-150" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="images/img3.jpg" class="d-block w-150" alt="Banner 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="search">
    <div class="container">
        <div class="tabs">
            <ul>
                <li class="tab active" data-tab="hotel">Hotel</li> <!-- Tambahkan kelas "active" ke tab "Hotel" -->
                <li class="tab" data-tab="tour">Tour</li>
                <li class="tab" data-tab="activity">Activity</li>
            </ul>
        </div>
        <div class="search-form active" id="hotel"> <!-- Tambahkan kelas "active"
ke formulir pencarian hotel -->
<input type="text" placeholder="Destination">
<input type="date" placeholder="Check-in Date">
<input type="date" placeholder="Check-out Date">
<input type="number" placeholder="Guests">
<button>Search</button>
</div>
<div class="search-form" id="tour">
<input type="text" placeholder="Destination">
<input type="date" placeholder="Date">
<input type="number" placeholder="Guests">
<button>Search</button>
</div>
<div class="search-form" id="activity">
<input type="text" placeholder="Destination">
<input type="date" placeholder="Date">
<input type="number" placeholder="Guests">
<button>Search</button>
</div>
</div>
</section>

<!-- Kotak 3x2 untuk destinasi kota terkenal -->
<section class="destinations">
    <div class="destination">
        <img src="images/newyork.jpeg" alt="New York">
        <div>New York</div>
    </div>
    <div class="destination">
        <img src="images/paris.jpeg" alt="Paris">
        <div>Paris</div>
    </div>
    <div class="destination">
        <img src="images/tokyo.jpeg" alt="Tokyo">
        <div>Tokyo</div>
    </div>
    <div class="destination">
        <img src="images/london.jpeg" alt="London">
        <div>London</div>
    </div>
    <div class="destination">
        <img src="images/jakarta.jpeg" alt="Rome">
        <div>Rome</div>
    </div>
    <div class="destination">
        <img src="images/bali.jpeg" alt="bali">
        <div>Dubai</div>
    </div>
</section>

<!-- Tour yang sedang didiskon -->
<section class="discount-tour">
    <div class="discount-tour-item">
        <div class="discount-tour-info">
            <h3>Tour ke Destinasi Eksotis</h3>
            <p>Hemat untuk perjalanan ini!</p>
        </div>
    </div>
</section>

<!-- Kotak 3x1 untuk Tour -->
<section class="tours">
    <div class="tour">
        <div class="tour-info">
            <div class="discount-badge">-10%</div> <!-- Badge diskon -->
            <img src="images/balitour.jpg" alt="Tour 1 Image">
            <h3>Tour Bali Package</h3>
            <p>Hemat 10% untuk perjalanan ini!</p>
        </div>
    </div>
    <div class="tour">
        <div class="tour-info">
            <div class="discount-badge">-15%</div> <!-- Badge diskon -->
            <img src="images/jogjakarta.jpg" alt="Tour 2 Image">
            <h3>Tour Jogjakarta 3D2N</h3>
            <p>Hemat 15% untuk perjalanan ini!</p>
        </div>
    </div>
    <div class="tour">
        <div class="tour-info">
            <div class="discount-badge">-5%</div> <!-- Badge diskon -->
            <img src="images/dieng.jpg" alt="Tour 3 Image">
            <h3>Tour Dieng 2D1N</h3>
            <p>Hemat 5% untuk perjalanan ini!</p>
        </div>
    </div>
</section>



<!-- Footer -->
<footer>
<div class="container">
<div class="row">
<div class="col-md-4">Email: example@example.com</div>
<div class="col-md-4">Instagram: @example</div>
<div class="col-md-4">Contact us: 123-456-789</div>
</div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
const tabs = document.querySelectorAll('.tab');
const forms = document.querySelectorAll('.search-form');

tabs.forEach(tab => {
tab.addEventListener('click', () => {
const target = tab.getAttribute('data-tab');

tabs.forEach(tab => tab.classList.remove('active'));
tab.classList.add('active');

forms.forEach(form => {
    if (form.getAttribute('id') === target) {
        form.classList.add('active');
    } else {
        form.classList.remove('active');
    }
});
});
});
</script>

</body>
</html>
