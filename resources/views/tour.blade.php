@extends('layouts.main')
@section('title', 'Tour Package')
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

<section class="tours">
    <div class="tour">
        <div class="tour-info">
            <div class="discount-badge">-10%</div> <!-- Badge diskon -->
            <img src="/images/balitour.jpg" alt="Tour 1 Image">
            <h3>Tour Bali Package</h3>
            <p>Hemat 10% untuk perjalanan ini!</p>
        </div>
    </div>
    <div class="tour">
        <div class="tour-info">
            <div class="discount-badge">-15%</div> <!-- Badge diskon -->
            <a href="/tourdetail"> <!-- Tautan ke halaman tourdetail -->
                <img src="/images/jogjakarta.jpg" alt="Tour 2 Image">
            </a>
            <h3><a href="halaman-tourdetail.html">Tour Jogjakarta 3D2N</a></h3> <!-- Tautan ke halaman tourdetail -->
            <p>Hemat 15% untuk perjalanan ini!</p>
        </div>
    </div>
    <div class="tour">
        <div class="tour-info">
            <div class="discount-badge">-5%</div> <!-- Badge diskon -->
            <img src="/images/dieng.jpg" alt="Tour 3 Image">
            <h3>Tour Dieng 2D1N</h3>
            <p>Hemat 5% untuk perjalanan ini!</p>
        </div>
    </div>

</section>
@endsection