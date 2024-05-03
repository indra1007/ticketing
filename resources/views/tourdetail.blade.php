@extends('layouts.main')
@section('title', 'Tour Detail Package')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/img_hero_6.jpg" class="d-block w-150" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="/images/img2.jpg" class="d-block w-150" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="/images/img3.jpg" class="d-block w-150" alt="Banner 3">
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

<div class="tour-info">
    <div class="discount-badge">-15%</div> <!-- Badge diskon -->
        <img src="/images/jogjakarta.jpg" alt="Tour 2 Image">
    <h3>Tour Jogjakarta 3D2N</h3> <!-- Tautan ke halaman tourdetail -->
    <p>Hemat 15% untuk perjalanan ini!</p>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
</div>

@endsection