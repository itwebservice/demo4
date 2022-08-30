<?php

include 'config.php';



$service = $_GET['service'];

global $app_contact_no;

//Include header

include 'layouts/header.php';

$date = date('m-d-Y');

$date1 = str_replace('-', '/', $date);

?>

<!-- Main Booking Section Start -->
<section class="main-booking-section">
    <div class="main-booking-slider owl-carousel">
        <div class="main-booking-slide item">
            <div class="main-booking-slide-img">
                <img src="images/booking.jpg" alt="booking" class="w-100 img-fluid">
            </div>
        </div>
        <div class="main-booking-slide item">
            <div class="main-booking-slide-img">
                <img src="images/booking.jpg" alt="booking" class="w-100 img-fluid">
            </div>
        </div>
        <div class="main-booking-slide item">
            <div class="main-booking-slide-img">
                <img src="images/booking.jpg" alt="booking" class="w-100 img-fluid">
            </div>
        </div>
    </div>
    <div class="main-booking-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-booking-counter">
                        <h6 class="main-booking-subtitle">WORLD'S LEADING TOUR AND TRAVELS SERVICE PROVIDER</h6>
                        <h1 class="main-booking-title">Best travel services with us!</h1>
                        <p class="main-booking-discription">Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        <div class="main-booking-place">
                            <ul class="main-booking-place-list">
                                <div class="booking-place">
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/tour.png" alt="" class="img-fluid">
                                            Tour
                                        </a>
                                    </li>
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/flight.png" alt="" class="img-fluid">
                                            Flight
                                        </a>
                                    </li>
                                </div>
                                <div class="booking-place">
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/car.png" alt="" class="img-fluid">
                                            Car
                                        </a>
                                    </li>
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/hotel.png" alt="" class="img-fluid">
                                            Hotel
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-booking-form bg-white">
                        <div class="row">
                            <div class="col col-12">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="number" class="form-control w-100 quantity" step="1" min="1" placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="email" class="form-control w-100" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="City, Destination and Hotel Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="date" class="form-control w-100" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="date" class="form-control w-100" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control w-100">
                                        <option></option>
                                        <option disabled>Select Service Name</option>
                                        <option>Group Tour</option>
                                        <option>Costomize Tour</option>
                                        <option>Visa</option>
                                        <option>Flight</option>
                                        <option>Hotel</option>
                                        <option>Activities</option>
                                        <option>Vhicle</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control w-100">
                                        <option></option>
                                        <option disabled>No Of Rooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div> -->
                            <!-- <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control booking-room-type w-100">
                                        <option></option>
                                        <option disabled>Rooms Type</option>
                                        <option>Ultra Premium</option>
                                        <option>Ultra Deluxe</option>
                                        <option>Premium</option>
                                        <option>Deluxe</option>
                                        <option>Normal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control booking-adults w-100">
                                        <option></option>
                                        <option disabled>No of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control booking-childrens w-100">
                                        <option></option>
                                        <option disabled>No of childrens</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control booking-min-price w-100">
                                        <option></option>
                                        <option disabled>Min Price</option>
                                        <option>$200</option>
                                        <option>$500</option>
                                        <option>$1000</option>
                                        <option>$5000</option>
                                        <option>$10,000</option>
                                        <option>$50,0000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control booking-max-price w-100">
                                        <option></option>
                                        <option disabled>Max Price</option>
                                        <option>$200</option>
                                        <option>$500</option>
                                        <option>$1000</option>
                                        <option>$5000</option>
                                        <option>$10,000</option>
                                        <option>$50,0000</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col col-12">
                                <div class="booking-form-input mb-0">
                                    <a href="#" class="btn booking-form-btn">ENQUIRE NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Booking Section End -->

<!-- Main Booking Section End -->
<!-- <section class="main-booking-section">
    <div class="main-booking-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-booking-counter">
                        <h6 class="main-booking-subtitle">World's leading tour and travels template</h6>
                        <h1 class="main-booking-title">Tour Package booking now!</h1>
                        <p class="main-booking-discription">Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        <div class="main-booking-place">
                            <ul class="main-booking-place-list">
                                <div class="booking-place">
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/tour.png" alt="" class="img-fluid">
                                            Tour
                                        </a>
                                    </li>
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/flight.png" alt="" class="img-fluid">
                                            Flight
                                        </a>
                                    </li>
                                </div>
                                <div class="booking-place">
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/car.png" alt="" class="img-fluid">
                                            Car
                                        </a>
                                    </li>
                                    <li class="booking-place-item">
                                        <a href="#" class="booking-place-link">
                                            <img src="images/hotel.png" alt="" class="img-fluid">
                                            Hotel
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-booking-form bg-white">
                        <div class="row">
                            <div class="col col-12">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="number" class="form-control w-100 quantity" step="1" min="1" placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="email" class="form-control w-100" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="City, Destination and Hotel Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="date" class="form-control w-100" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="date" class="form-control w-100" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control w-100">
                                        <option></option>
                                        <option disabled>Select Service Name</option>
                                        <option>Group Tour</option>
                                        <option>Costomize Tour</option>
                                        <option>Visa</option>
                                        <option>Flight</option>
                                        <option>Hotel</option>
                                        <option>Activities</option>
                                        <option>Vhicle</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="booking-form-input mb-0">
                                    <a href="#" class="btn booking-form-btn">ENQUIRE NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Main Booking Section End -->





<!-- Tour Packages Section Start -->
<section class="t-package-section">
    <div class="container">
        <div class="t-package-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">Top <span>Tour Packages</span></h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Explore popular domestic & international destinations with our company.</p>
            </div>
            <div class="t-package-list">
                <div class="row">

                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="t-package-card">
                            <div class="t-package-offer">
                                <img src="images/band.png" alt="" class="img-fluid w-100">
                            </div>
                            <div class="t-package-img">
                                <img src="images/rio.png" alt="" class="img-fluid">
                                <div class="t-package-card-btn">
                                    <span class="t-package-card-price btn">599 $</span>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                            <div class="t-package-card-body">
                                <h6 class="t-package-card-title">Rio de Janeiro <span>(Brazil)</span></h6>
                                <ul class="t-package-body-img">
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/clock.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/info.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/price.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/map.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="t-package-card">
                            <div class="t-package-offer">
                                <img src="images/band1.png" alt="" class="img-fluid w-100">
                            </div>
                            <div class="t-package-img">
                                <img src="images/paris.png" alt="" class="img-fluid">
                                <div class="t-package-card-btn">
                                    <span class="t-package-card-price btn">599 $</span>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                            <div class="t-package-card-body">
                                <h6 class="t-package-card-title">Paris <span>(England)</span></h6>
                                <ul class="t-package-body-img">
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/clock.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/info.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/price.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/map.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="t-package-card">
                            <div class="t-package-img">
                                <img src="images/india.png" alt="" class="img-fluid">
                                <div class="t-package-card-btn">
                                    <span class="t-package-card-price btn">599 $</span>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                            <div class="t-package-card-body">
                                <h6 class="t-package-card-title">sauth india<span>(india)</span></h6>
                                <ul class="t-package-body-img">
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/clock.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/info.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/price.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/map.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="t-package-card">
                            <div class="t-package-img">
                                <img src="images/taj.png" alt="" class="img-fluid">
                                <div class="t-package-card-btn">
                                    <span class="t-package-card-price btn">599 $</span>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                            <div class="t-package-card-body">
                                <h6 class="t-package-card-title">the great wall<span>(China)</span></h6>
                                <ul class="t-package-body-img">
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/clock.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/info.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/price.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/map.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="t-package-card">
                            <div class="t-package-img">
                                <img src="images/island.png" alt="" class="img-fluid">
                                <div class="t-package-card-btn">
                                    <span class="t-package-card-price btn">599 $</span>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                            <div class="t-package-card-body">
                                <h6 class="t-package-card-title">nail Esland<span>(Andaman)</span></h6>
                                <ul class="t-package-body-img">
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/clock.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/info.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/price.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/map.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="t-package-card">
                            <div class="t-package-img">
                                <img src="images/boolun.png" alt="" class="img-fluid">
                                <div class="t-package-card-btn">
                                    <span class="t-package-card-price btn">599 $</span>
                                    <a href="#" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                            <div class="t-package-card-body">
                                <h6 class="t-package-card-title">Mauritius<span>(indiana)</span></h6>
                                <ul class="t-package-body-img">
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/clock.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/info.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/price.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                    <li class="t-package-img-item">
                                        <span class="t-package-img-link">
                                            <img src="images/map.png" alt="" class="img-fluid">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Packages Section End -->


<!-- Tour Cities Section Start -->
<section class="t-cities-section">
    <div class="container">
        <div class="t-cities-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">Popular <span>Destinations</span></h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Find Best deals for Tour Packages, Hotels, Holidays, Flights world wide. Visit these top destinations.</p>
            </div>
            <div class="t-cities-list">
                <div class="row">

                    <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="t-cities-card">
                            <div class="t-cities-img">
                                <img src="images/europe.jpg" alt="" class="img-fluid">
                                <div class="t-cities-details">
                                    <h4 class="t-cities-title">Europe</h4>
                                    <div class="t-cities-subtitle">
                                        <h5 class="mb-0">12 Packages</h5>
                                        <span>Starting from $2400</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="row">
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="t-cities-card t-cities-small-card">
                                    <div class="t-cities-img">
                                        <img src="images/dubai.jpg" alt="" class="img-fluid w-100">
                                        <div class="t-cities-details">
                                            <h4 class="t-cities-title">Dubai</h4>
                                            <div class="t-cities-subtitle t-cities-london">
                                                <span>Starting from $2400</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="t-cities-card t-cities-small-card">
                                    <div class="t-cities-img">
                                        <img src="images/india_2.jpg" alt="" class="img-fluid w-100">
                                        <div class="t-cities-details">
                                            <h4 class="t-cities-title">india</h4>
                                            <div class="t-cities-subtitle t-cities-london">
                                                <span>Starting from $2400</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="t-cities-card t-cities-small-card">
                                    <div class="t-cities-img">
                                        <img src="images/usa.jpg" alt="" class="img-fluid w-100">
                                        <div class="t-cities-details">
                                            <h4 class="t-cities-title">Usa</h4>
                                            <div class="t-cities-subtitle t-cities-london">
                                                <span>Starting from $2400</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="t-cities-card t-cities-small-card">
                                    <div class="t-cities-img">
                                        <img src="images/london.jpg" alt="" class="img-fluid w-100">
                                        <div class="t-cities-details">
                                            <h4 class="t-cities-title">London</h4>
                                            <div class="t-cities-subtitle t-cities-london">
                                                <span>Starting from $2400</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Cities Section End -->



<!-- Hotels Section Start -->
<section class="t-hotels-section">
    <div class="container">
        <div class="t-hotels-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">Explore <span>Popular hotels</span></h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Explore world wide popular hotels across the world.</p>
            </div>
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="t-hotels-card">
                        <div class="t-hotels-img">
                            <img src="images/chola.jpg" alt="" class="img-fluid w-100">
                            <div class="t-hotels-ticket">
                                Available Tickets: 42
                            </div>
                        </div>
                        <div class="t-hotels-card-body">
                            <h5 class="t-hotels-title">GTC Grand Chola</h5>
                            <div class="t-hotels-reviw">
                                <ul class="t-hotels-reviw-list">
                                    <li class="t-hotels-reviw-item">
                                        City: illunois,united states
                                        <div class="t-hotels-reviw-rating">
                                            <span>Rating:</span>
                                            <i class="fa fa-star ms-3" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li class="t-hotels-price">
                                        <span>$420</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="t-hotels-card">
                        <div class="t-hotels-img">
                            <img src="images/resorts.jpg" alt="" class="img-fluid w-100">
                            <div class="t-hotels-ticket">
                                Available Tickets: 520
                            </div>
                        </div>
                        <div class="t-hotels-card-body">
                            <h5 class="t-hotels-title">Taaj Grand Resorts</h5>
                            <div class="t-hotels-reviw">
                                <ul class="t-hotels-reviw-list">
                                    <li class="t-hotels-reviw-item">
                                        City: illunois,united states
                                        <div class="t-hotels-reviw-rating">
                                            <span>Rating:</span>
                                            <i class="fa fa-star ms-3" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li class="t-hotels-price">
                                        <span>$540</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="t-hotels-card">
                        <div class="t-hotels-img">
                            <img src="images/hotels.jpg" alt="" class="img-fluid w-100">
                            <div class="t-hotels-ticket">
                                Available Tickets: 92
                            </div>
                        </div>
                        <div class="t-hotels-card-body">
                            <h5 class="t-hotels-title">Keep Grand Hotels</h5>
                            <div class="t-hotels-reviw">
                                <ul class="t-hotels-reviw-list">
                                    <li class="t-hotels-reviw-item">
                                        City: illunois,united states
                                        <div class="t-hotels-reviw-rating">
                                            <span>Rating:</span>
                                            <i class="fa fa-star ms-3" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li class="t-hotels-price">
                                        <span>$380</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Hotels Section End -->


<!-- Deals Section Start -->
<section class="deals-section">
    <div class="container">
        <div class="deals-content">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="deals-contact">
                        <h6 class="deals-subtitle">Get in touch with us</h6>
                        <h2 class="deals-title">Our Introduction</h2>
                        <p class="deals-discription">Our company that offers travel related services around the world. We provide travel services for Domestic and International and deal with in the most professional and efficient manner with immediate response and best service. Our Well Experienced tourism professionals serve tourists better as per their convenience.</p>
                        <!--<h5 class="deals-helpline">Help line: +001 21745 12345</h5>-->
                        <div class="deals-book-btns">
                            <a href="#" class="btn">ABOUT US</a>
                            <a href="#" class="btn">CONTACT NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="deals-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CxHZAm_B0UU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Deals Section End -->

<!-- Events Section Start -->
<section class="events-section">
    <div class="container">
        <div class="events-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">Explore all <span>Destination</span> Tours</h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Search all inbuld domestic & international packages using our filter</p>
            </div>
            <div class="events-table">
                <div class="events-table-input">
                    <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                </div>
                <table id="myTable" class="table events-table-start">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Event Name</th>
                            <th scope="col" class="table-hader-title">Date</th>
                            <th scope="col" class="table-hader-title">Time</th>
                            <th scope="col" class="table-hader-title">Location</th>
                            <th scope="col">Book</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="events-body">
                            <td class="events-place-ruting">1</td>
                            <td class="bob">
                                <img src="images/iplace-1.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">Taj Mahal,Agra, India</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Australia</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">2</td>
                            <td class="bob">
                                <img src="images/iplace-2.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">Salesforce Summer, Dubai</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Dubai</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">3</td>
                            <td class="bob">
                                <img src="images/iplace-3.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">God Towers, TOKYO, JAPAN</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Japan</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">4</td>
                            <td class="bob">
                                <img src="images/iplace-4.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">TOUR DE ROMANDIE, Switzerland</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Switzerland</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">5</td>
                            <td class="bob">
                                <img src="images/iplace-5.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">TOUR DE POLOGNE, Poland</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Poland</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">6</td>
                            <td class="bob">
                                <img src="images/iplace-6.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">Future of Marketing,Sydney, Australia</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Australia</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">7</td>
                            <td class="bob">
                                <img src="images/iplace-7.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">Eiffel Tower, Paris</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">France</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">8</td>
                            <td class="bob">
                                <img src="images/iplace-8.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">PARIS - ROUBAIX, England</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">England</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">9</td>
                            <td class="bob">
                                <img src="images/iplace-9.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">Dubai Beach Resort, Dubai</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Dubai</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                        <tr class="events-body">
                            <td class="events-place-ruting">10</td>
                            <td class="bob">
                                <img src="images/iplace-4.jpg" alt="" class="img-fluid events-place-img">
                                <a href="#" class="events-place-name">TOUR DE POLOGNE, Poland</a>
                            </td>
                            <td class="events-place-ruting table-routing">16.12.2016</td>
                            <td class="events-place-ruting table-routing">10.00 PM</td>
                            <td class="events-place-ruting table-routing">Poland</td>
                            <td>
                                <a href="#" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Events Section End -->


<!-- Sight Section Start -->
<section class="sight-section">
    <div class="container">
        <div class="sight-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">Best <span> Sight Seeings</span> experiences</h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Find best deals of sightseeing you should explore in your life.</p>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-md-6">
                <div class="sight-card">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="sight-card-img">
                                <img src="images/honeymoon.jpg" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                            <div class="sight-card-body">
                                <h6 class="sight-body-subtitle">Honeymoon Package</h6>
                                <h5 class="sight-body-title"> 7 Days / 6 Nights</h5>
                                <p class="sight-body-discription">lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                                <a href="#" class="btn sight-card-btn">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6">
                <div class="sight-card">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="sight-card-img">
                                <img src="images/family.jpg" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                            <div class="sight-card-body">
                                <h6 class="sight-body-subtitle">Family package</h6>
                                <h5 class="sight-body-title">14 Days / 13 Nights</h5>
                                <p class="sight-body-discription">lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                                <a href="#" class="btn sight-card-btn">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6">
                <div class="sight-card">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="sight-card-img">
                                <img src="images/weekend.jpg" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                            <div class="sight-card-body">
                                <h6 class="sight-body-subtitle">Weekend Package </h6>
                                <h5 class="sight-body-title"> 3 Days / 2 Nights</h5>
                                <p class="sight-body-discription">lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                                <a href="#" class="btn sight-card-btn">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6">
                <div class="sight-card">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="sight-card-img">
                                <img src="images/group.jpg" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                            <div class="sight-card-body">
                                <h6 class="sight-body-subtitle">Group Package</h6>
                                <h5 class="sight-body-title"> 10 Days / 9 Nights</h5>
                                <p class="sight-body-discription">lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p>
                                <a href="#" class="btn sight-card-btn">MORE INFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sight Section End -->

<!-- Branding Section Start -->
<section class="branding-section">
    <div class="container">
        <div class="branding-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">Our <span>Blog</span> </h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">We explore the world and write our experiences so customer have better experience in their tours.</p>
            </div>
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="branding-list">
                        <div class="branding-header">
                            <h5 class="branding-header-title">Top Branding <span>Hotels</span></h5>
                        </div>
                        <div class="branding-body">
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_1.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Taaj Club House</h6>
                                        <span>City: illunois, United States</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">4.5</a>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_2.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Universal luxury Grand Hotel</h6>
                                        <span>City: Rio,Brazil</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">4.2</a>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_3.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Barcelona Grand Pales</h6>
                                        <span>City: Chennai,India</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">5.0</a>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_4.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Lake Palace view Hotel</h6>
                                        <span>City: Beijing,China</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">2.5</a>
                                </div>
                            </div>
                            <div class="branding-item">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_5.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">First Class Grandd Hotel</h6>
                                        <span>City: Berlin,Germany</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">4.0</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="branding-list">
                        <div class="branding-header">
                            <h5 class="branding-header-title">Top Branding <span>Packages</span></h5>
                        </div>
                        <div class="branding-body">
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_6.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Family Package Luxury</h6>
                                        <span>Duration: 7 Days and 6 Nights</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">4.1</a>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_7.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Honeymoon Package Luxury</h6>
                                        <span>Duration: 14 Days and 13 Nights</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">4.4</a>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_8.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Group Package Luxury</h6>
                                        <span>Duration: 28 Days and 29 Nights</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">3.0</a>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_9.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Regular Package Luxury</h6>
                                        <span>Duration: 12 Days and 11 Nights</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">3.5</a>
                                </div>
                            </div>
                            <div class="branding-item">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_10.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Custom Package Luxury</h6>
                                        <span>Duration: 10 Days and 10 Nights</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <a href="#">5.0</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="branding-list">
                        <div class="branding-header">
                            <h5 class="branding-header-title">Top Branding <span>Reviewers</span></h5>
                        </div>
                        <div class="branding-body">
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_11.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Christopher</h6>
                                        <span>No of Reviews: 620, City: illunois</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_12.png" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Matthew</h6>
                                        <span>No of Reviews: 48, City: Rio</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_13.jpeg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Stephanie</h6>
                                        <span>No of Reviews: 560, City: Chennai</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="branding-item border-bottom">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_14.jpeg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Robert</h6>
                                        <span>No of Reviews: 920, City: Beijing</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="branding-item">
                                <div class="branding-img">
                                    <a href="#"><img src="images/branding_15.jpeg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="branding-item-title">
                                    <a href="#">
                                        <h6 class="mb-0">Danielle</h6>
                                        <span>No of Reviews: 768, City: Berlin</span>
                                    </a>
                                </div>
                                <div class="branding-reting">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Branding Section End -->


<!-- MObile Section Start -->
<section class="mobile-section">
    <div class="container">
        <div class="mobile-content">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mobile-img d-none d-md-block">
                        <img src="images/mobile.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mobile-app-details">
                        <h2 class="mobile-app-title">Why Choose Us</h2>
                        <p class="mobile-app-discription">World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with <br class="d-none d-lg-block"> distinctive experience</p>
                        <ul class="mobile-details-list">
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                + 1000 Happy Customers
                            </li>
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                +500 Premium Tours
                            </li>
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                Affordable Price
                            </li>
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                Easy booking with us
                            </li>
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                Flexible payment terms
                            </li>
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                VIP transport option
                            </li>
                            <li class="mobile-details-item">
                                <i class="fa fa-check"></i>
                                List of amazing destinations tour to explore
                            </li>
                        </ul>
                        <!-- <div class="mobile-app-imgs">
                            <a href="#">
                                <img src="images/android.png" alt="" class="img-fluid">
                            </a>
                            <a href="#">
                                <img src="images/apple.png" alt="" class="img-fluid">
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MObile Section End -->

<!-- Tips Section Start -->
<section class="tips-section">
    <div class="container">
        <div class="tips content">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="tips-points">
                        <h5 class="tips-points-title">Tips Before Travel</h5>
                        <div class="tips-points-list">

                            <div class="tips-points-item">
                                <div class="tips-points-img">
                                    <img src="images/tips1.png" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tips-points-details">
                                    <h5 class="tips-details-title">Carry your documents</h5>
                                    <p class="tips-detalis-discription mb-0">Carry your required document like Passport, ID proof etc.</p>
                                </div>
                            </div>
                            <div class="tips-points-item">
                                <div class="tips-points-img">
                                    <img src="images/tips2.png" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tips-points-details">
                                    <h5 class="tips-details-title">knowledge of destination</h5>
                                    <p class="tips-detalis-discription mb-0">Be prepare about the dstination, distance, route</p>
                                </div>
                            </div>
                            <div class="tips-points-item">
                                <div class="tips-points-img">
                                    <img src="images/tips3.png" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tips-points-details">
                                    <h5 class="tips-details-title">Always have local cash</h5>
                                    <p class="tips-detalis-discription mb-0">Carry the destination currency</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-8 col-xl-8">
                    <div class="tips-customer">
                        <h5 class="tips-points-title">Customer Testimonials</h5>
                        <div class="it-coustomer-slider owl-carousel">
                            <div class="item">
                                <div class="tips-points-item">
                                    <div class="tips-points-img tips-customer-img">
                                        <img src="images/testi_img.png" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="tips-points-details">
                                        <h5 class="tips-details-title">John William</h5>
                                        <p class="tips-detalis-discription tips-customer-discription">Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p>
                                        <address class="tips-detalis-discription mb-0">Illinois, United States of America</address>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tips-points-item">
                                    <div class="tips-points-img tips-customer-img">
                                        <img src="images/testi_img.png" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="tips-points-details">
                                        <h5 class="tips-details-title">John William</h5>
                                        <p class="tips-detalis-discription tips-customer-discription">Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p>
                                        <address class="tips-detalis-discription mb-0">Illinois, United States of America</address>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tips-points-item">
                                    <div class="tips-points-img tips-customer-img">
                                        <img src="images/testi_img.png" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="tips-points-details">
                                        <h5 class="tips-details-title">John William</h5>
                                        <p class="tips-detalis-discription tips-customer-discription">Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p>
                                        <address class="tips-detalis-discription mb-0">Illinois, United States of America</address>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tips-points-item">
                                    <div class="tips-points-img tips-customer-img">
                                        <img src="images/testi_img.png" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="tips-points-details">
                                        <h5 class="tips-details-title">John William</h5>
                                        <p class="tips-detalis-discription tips-customer-discription">Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p>
                                        <address class="tips-detalis-discription mb-0">Illinois, United States of America</address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tips-helps-imgs">
                            <h5 class="tips-points-title tips-helps-title">Secure Payment Gateway</h5>
                            <div class="tips-helps">
                                <div class="tips-first-help">
                                    <img src="images/payment-gateway.png" alt="" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tips Section End -->






<!-- <a href="#" class="scrollup">Scroll</a> -->

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields

    (function() {

        'use strict';

        window.addEventListener('load', function() {

            // Fetch all the forms we want to apply custom Bootstrap validation styles to

            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission

            var validation = Array.prototype.filter.call(forms, function(form) {

                form.addEventListener('submit', function(event) {

                    if (form.checkValidity() === false) {

                        event.preventDefault();

                        event.stopPropagation();

                    }

                    form.classList.add('was-validated');

                }, false);

            });

        }, false);

    })();
</script>

<?php

include 'layouts/footer.php';

?>

<script type="text/javascript" src="view/hotel/js/index.js"></script>

<script type="text/javascript" src="view/transfer/js/index.js"></script>

<script type="text/javascript" src="view/activities/js/index.js"></script>

<script type="text/javascript" src="view/tours/js/index.js"></script>

<script type="text/javascript" src="view/group_tours/js/index.js"></script>

<!-- <script type="text/javascript" src="js/scripts.js"></script> -->
<script type="text/javascript" src="js/select2.min.js"></script>

<script>
    $(document).ready(function() {

        /////// Next 10th day onwards date display

        var tomorrow = new Date();

        tomorrow.setDate(tomorrow.getDate() + 10);

        var day = tomorrow.getDate();

        var month = tomorrow.getMonth() + 1

        var year = tomorrow.getFullYear();

        $('#travelDate').datetimepicker({
            timepicker: false,
            format: 'm/d/Y',
            minDate: tomorrow
        });



        $('#checkInDate, #checkOutDate, #checkDate').datetimepicker({
            timepicker: false,
            format: 'm/d/Y',
            minDate: new Date()
        });

        $('#pickup_date').datetimepicker({
            format: 'm/d/Y H:i',
            minDate: new Date()
        });

        document.getElementById('return_date').readOnly = true;



        var service = '<?php echo $service; ?>';

        if (service && (service !== '' || service !== undefined)) {

            var checkLink = $('.c-searchContainer .c-search-tabs li');

            var checkTab = $('.c-searchContainer .search-tab-content .tab-pane');

            checkLink.each(function() {

                var child = $(this).children('.nav-link');

                if (child.data('service') === service) {

                    $(this).siblings().children('.nav-link').removeClass('active');

                    child.addClass('active');

                }

            });

            checkTab.each(function() {

                if ($(this).data('service') === service) {

                    $(this).addClass('active show').siblings().removeClass('active show');

                }

            })

        }

    });
</script>