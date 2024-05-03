@extends('layouts.main')
@section('title', 'Home')
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
@endsection