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
                    <li><a href="/">Home</a></li>
                    <li><a href="/hotel/">Hotel</a></li>
                    <li><a href="/tour/">Tour</a></li>
                    <li><a href="/activity/">Activity</a></li>
                </ul>
            </nav>
            <a href="#" class="login-button">Login</a>
        </div>
    </header>

@yield('content')
