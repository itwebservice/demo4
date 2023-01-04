<?php

include "config.php";

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
        <?php foreach ($Apibanner as $banner) { ?>
            <div class="main-booking-slide item">
                <div class="main-booking-slide-img">
                    <img src="crm/<?= substr($banner->image_url, 9) ?>" alt="booking" class="w-100 img-fluid">
                </div>
            </div>
        <?php } ?>

    </div>
    <div class="main-booking-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="main-booking-counter">
                        <h6 class="main-booking-subtitle">WORLD'S LEADING TOUR AND TRAVELS SERVICE PROVIDER</h6>
                        <h1 class="main-booking-title">Best travel services with us!</h1>
                        <p class="main-booking-discription">Experience the various exciting tour and travel packages and
                            Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        <div class="main-booking-place">
                            <ul class="main-booking-place-list">
                                <div class="booking-place">
                                    <li class="booking-place-item">
                                        <a target="_blank" href="<?= BASE_URL_B2C ?>view/tours/tours-listing.php" class="booking-place-link">
                                            <img src="images/tour.png" alt="" class="img-fluid">
                                            Tour
                                        </a>
                                    </li>
                                    <li class="booking-place-item">
                                        <a target="_blank" href="#" class="booking-place-link">
                                            <img src="images/flight.png" alt="" class="img-fluid">
                                            Flight
                                        </a>
                                    </li>
                                </div>
                                <div class="booking-place">
                                    <li class="booking-place-item">
                                        <a target="_blank" href="<?= BASE_URL_B2C ?>view/transfer/transfer-listing.php" class="booking-place-link">
                                            <img src="images/car.png" alt="" class="img-fluid">
                                            Car
                                        </a>
                                    </li>
                                    <li class="booking-place-item">
                                        <a target="_blank" href="<?= BASE_URL_B2C ?>view/hotel/hotel-listing.php" class="booking-place-link">
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
                    <form id="enq_form" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col col-12">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="*Enter your name" id="name" required>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="number" class="form-control w-100 quantity" step="1" min="1" placeholder="*Enter your phone" id="phone_no" required>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="email" class="form-control w-100" placeholder="*Enter your email" id="email" required>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="*City, Destination and Hotel Name" id="city" required>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="*Enter From Date" id="from_date" onchange="get_to_date1(this.id,'to_date');" required>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="booking-form-input">
                                    <input type="text" class="form-control w-100" placeholder="*Enter To Date" id="to_date" onchange="validate_validDate1('from_date','to_date');" required>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12">
                                <div class="booking-form-input">
                                    <select class="booking-form-select form-control w-100" id="service_name" title="*Select Service Name" style="width:100%" required>
                                        <option></option>
                                        <option value="">*Select Service Name</option>
                                        <option value="Group Tour">Group Tour</option>
                                        <option value="Customize Tour">Customize Tour</option>
                                        <option value="Visa">Visa</option>
                                        <option value="Flight">Flight</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Activities">Activities</option>
                                        <option value="Vehicle">Vehicle</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div class="booking-form-input mb-0">
                                    <button type="submit" id="enq_submit" class="btn booking-form-btn">ENQUIRE NOW</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Booking Section End -->
<!--Social Media icon sticky-->

<div class="s-icons">
    <ul>
        <?php

        if ($social_media[0]->fb != '') { ?>
            <a target="_blank" href="<?= $social_media[0]->fb ?>">
                <li class="fb">
                    <i class="fa fa-facebook"></i>
                </li>
            </a>
        <?php }
        if ($social_media[0]->tw != '') { ?>
            <a target="_blank" href="<?= $social_media[0]->tw ?>">
                <li class="twit">
                    <i class="fa fa-twitter"></i>
                </li>
            </a>
        <?php }
        if ($social_media[0]->wa != '') { ?>
            <a target="_blank" href="<?= $social_media[0]->wa ?>">
                <li class="wapp">
                    <i class="fa fa-whatsapp"></i>
                </li>
            </a>
        <?php }
        if ($social_media[0]->inst != '') { ?>
            <a target="_blank" href="<?= $social_media[0]->inst ?>">
                <li class="insta">
                    <i class="fa fa-instagram"></i>
                </li>
            </a>
        <?php }
        if ($social_media[0]->li != '') { ?>
            <a target="_blank" href="<?= $social_media[0]->li ?>">
                <li class="link">
                    <i class="fa fa-linkedin"></i>
                </li>
            </a>
        <?php }
        if ($social_media[0]->yu != '') { ?>
            <a target="_blank" href="<?= $social_media[0]->yu ?>">
                <li class="yt">
                    <i class="fa fa-youtube"></i>
                </li>
            </a>
        <?php } ?>
    </ul>
</div>

<!--End social Media icon sticky-->

<!-- Tour Packages Section Start -->
<section class="t-package-section">
    <div class="container">
        <div class="t-package-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">TOP <span>TOUR PACKAGES</span></h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Explore popular domestic & international
                    destinations with our company.</p>
            </div>
            <div class="t-package-list">
                <div class="row">
                    <?php
                    foreach ($Apipackage as $package) {

                        $package_name = $package->package_name;
                        $currency_id = $package->currency_id;

                        $currency_logo_d = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `default_currency`,`currency_code` FROM `currency_name_master` WHERE id=" . $currency_id));
                        $currency_code = $currency_logo_d['currency_code'];

                        $package_fname = str_replace(' ', '_', $package_name);

                        $file_name = 'package_tours/' . $package_fname . '-' . $package->package_id . '.php';
                        ?>
                        <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="t-package-card">
                                <a target="_blank" href="<?= $file_name ?>">
                                    <div class="t-package-offer">
                                        <img src="images/band.png" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="t-package-img">
                                        <img src="<?= $package->main_img_url ?>" alt="" class="img-fluid">
                                        <div class="t-package-card-btn">
                                            <span class="t-package-card-price btn"><?= !empty($package->tariff) ? $currency_code.' '.$package->tariff->cadult : $currency_code.' '.'0.00' ?>
                                            </span>
                                            <a target="_blank" href="<?= $file_name ?>" class="btn btn-primary">View More</a>
                                        </div>
                                    </div>
                                </a>
                                <div class="t-package-card-body">
                                    <h6 class="t-package-card-title">
                                        <?= $package->package_name ?><span>(<?= $package->destination->dest_name ?>)</span>
                                    </h6>
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
                    <?php } ?>




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
                <h2 class="t-package-title section-title">POPULAR <span>DESTINATIONS</span></h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Find Best deals for Tour Packages, Hotels,
                    Holidays, Flights world wide. Visit these top destinations.</p>
            </div>
            <div class="t-cities-list">
                <div class="row">
                    <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                        <a target="_blank" onclick="get_tours_data('<?= $Apidestination[0]->dest_id ?>','1')" style="cursor: pointer!important;">
                            <div class="t-cities-card">
                                <div class="t-cities-img">
                                    <img src="<?= $Apidestination[0]->gallery_images[5]->image_url; ?>" alt="" class="img-fluid">
                                    <div class="t-cities-details">
                                        <h4 class="t-cities-title"><?= $Apidestination[0]->dest_name ?></h4>
                                        <div class="t-cities-subtitle">
                                            <!-- <h5 class="mb-0"><?= $Apidestination[0]->total_packages ?> Packages</h5> -->
                                            <!-- <span>Starting from $2400</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="row">
                            <?php if (!empty($Apidestination[1])) { ?>
                                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                    <a target="_blank" onclick="get_tours_data('<?= $Apidestination[1]->dest_id ?>','1')" style="cursor: pointer!important;">
                                        <div class="t-cities-card t-cities-small-card">
                                            <div class="t-cities-img">
                                                <img src="<?= $Apidestination[1]->gallery_images[5]->image_url; ?>" alt="" class="img-fluid w-100">
                                                <div class="t-cities-details">
                                                    <h4 class="t-cities-title"><?= $Apidestination[1]->dest_name ?></h4>
                                                    <div class="t-cities-subtitle t-cities-london">
                                                        <!-- <span><?= $Apidestination[1]->total_packages ?> Packages</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if (!empty($Apidestination[2])) { ?>

                                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                    <a target="_blank" onclick="get_tours_data('<?= $Apidestination[2]->dest_id ?>','1')" style="cursor: pointer!important;">
                                        <div class="t-cities-card t-cities-small-card">
                                            <div class="t-cities-img">
                                                <img src="<?= $Apidestination[2]->gallery_images[5]->image_url; ?>" alt="" class="img-fluid w-100">
                                                <div class="t-cities-details">
                                                    <h4 class="t-cities-title"><?= $Apidestination[2]->dest_name ?></h4>
                                                    <div class="t-cities-subtitle t-cities-london">
                                                        <!-- <span><?= $Apidestination[2]->total_packages ?> Packages</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if (!empty($Apidestination[3])) { ?>

                                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                    <a target="_blank" onclick="get_tours_data('<?= $Apidestination[3]->dest_id ?>','1')" style="cursor: pointer!important;">
                                        <div class="t-cities-card t-cities-small-card">
                                            <div class="t-cities-img">
                                                <img src="<?= $Apidestination[3]->gallery_images[5]->image_url; ?>" alt="" class="img-fluid w-100">
                                                <div class="t-cities-details">
                                                    <h4 class="t-cities-title"><?= $Apidestination[3]->dest_name ?></h4>
                                                    <div class="t-cities-subtitle t-cities-london">
                                                        <!-- <span><?= $Apidestination[3]->total_packages ?> Packages</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if (!empty($Apidestination[4])) { ?>

                                <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                    <a target="_blank" onclick="get_tours_data('<?= $Apidestination[4]->dest_id ?>','1')" style="cursor: pointer!important;">
                                        <div class="t-cities-card t-cities-small-card">
                                            <div class="t-cities-img">
                                                <img src="<?= $Apidestination[4]->gallery_images[5]->image_url; ?>" alt="" class="img-fluid w-100">
                                                <div class="t-cities-details">
                                                    <h4 class="t-cities-title"><?= $Apidestination[4]->dest_name ?></h4>
                                                    <div class="t-cities-subtitle t-cities-london">
                                                        <!-- <span><?= $Apidestination[4]->total_packages ?> Packages</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>




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
                <h2 class="t-package-title section-title">EXPLORE <span>POPULAR HOTELS</span></h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Explore world wide popular hotels across the world.
                </p>
            </div>
            <div class="row">
                <?php foreach ($Apihotel as $hotel) {
                    $image = ($hotel->hotel_image->hotel_pic_url!='') ? 'crm/' . substr($hotel->hotel_image->hotel_pic_url, 11) : 'images/hotel_general.png';
                    ?>
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="t-hotels-card">
                            <a target="_blank" onclick="get_tours_data('<?= $hotel->city_id ?>','3','<?= $hotel->hotel_id ?>')" style="cursor:pointer!important;">
                                <div class="t-hotels-img">
                                    <img src="<?= $image ?>" alt="" class="img-fluid w-100">
                                    <div class="t-hotels-ticket">
                                        <?= $hotel->rating_star ?>
                                    </div>
                                </div>
                            </a>
                            <div class="t-hotels-card-body">
                                <a target="_blank" onclick="get_tours_data('<?= $hotel->city_id ?>','3','<?= $hotel->hotel_id ?>')" style="cursor:pointer!important;">
                                    <h5 class="t-hotels-title"><?= $hotel->hotel_name ?></h5>
                                </a>
                                <div class="t-hotels-reviw">
                                    <ul class="t-hotels-reviw-list">
                                        <li class="t-hotels-reviw-item">
                                            <?= substr($hotel->amenities, 0, 200) ?> <br>
                                            <b> <?= $hotel->hotel_city->city_name ?>,<?= $hotel->country ?></b>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


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
                        <p class="deals-discription">Our company that offers travel related services around the world.
                            We provide travel services for Domestic and International and deal with in the most
                            professional and efficient manner with immediate response and best service. Our Well
                            Experienced tourism professionals serve tourists better as per their convenience.</p>
                        <!--<h5 class="deals-helpline">Help line: +001 21745 12345</h5>-->
                        <div class="deals-book-btns">
                            <a href="about.php" target="_blank" class="btn">ABOUT US</a>
                            <a href="contact.php" target="_blank" class="btn">CONTACT US</a>
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
                <h2 class="t-package-title section-title">EXPLORE  ALL <span>DESTINATION</span> TOURS</h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">Search all inbuld domestic & international packages
                    using our filter</p>
            </div>
            <div class="events-table">
                <div class="events-table-input">
                    <input type="text" id="myInput" class="form-control" onkeyup="filterSearch()" placeholder="Search Tour Name.." title="Type in a name">
                </div>
                <table id="myTable" class="table events-table-start">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Tour Name</th>
                            <th scope="col" class="table-hader-title">Days</th>
                            <th scope="col" class="table-hader-title">Nights</th>
                            <th scope="col" class="table-hader-title">Location</th>
                            <th scope="col">Book</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $count = 1;
                        foreach ($Apipackage as $package) {

                            $package_name = $package->package_name;

                            $package_fname = str_replace(' ', '_', $package_name);

                            $file_name = 'package_tours/' . $package_fname . '-' . $package->package_id . '.php';
                        ?>
                            <tr class="events-body">
                                <td class="events-place-ruting"><?= $count++ ?></td>
                                <td class="bob">
                                    <img src="<?= $package->main_img_url ?>" alt="" class="img-fluid events-place-img">
                                    <a target="_blank" href="<?= $file_name ?>" class="events-place-name"><?= $package->package_name ?></a>
                                </td>
                                <td class="events-place-ruting table-routing"><?= $package->total_days ?></td>
                                <td class="events-place-ruting table-routing"><?= $package->total_nights ?></td>
                                <td class="events-place-ruting table-routing"> <?= $package->destination->dest_name ?></td>
                                <td>
                                    <a target="_blank" href="<?= $file_name ?>" class="btn events-place-book">Book Now</a>
                                </td>
                            </tr>

                        <?php } ?>

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
                <h2 class="t-package-title section-title">BEST <span> SIGHT SEEING</span> EXPERIENCES</h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription"> Find Find best deals of sightseeing you should
                    explore in your life.</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($Apiactivity as $activity) {

                $url = ($activity->images[0]->image_url != '') ? "crm/".substr($activity->images[0]->image_url, 6) : 'images/activity_default.png';?>
                <div class="col col-12 col-md-6">
                    <div class="sight-card">
                        <div class="row">
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="sight-card-img">
                                    <img src="<?= $url ?>" alt="" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                                <div class="sight-card-body">
                                    <h6 class="sight-body-subtitle"><?= $activity->depature_point ?></h6>
                                    <h5 class="sight-body-title"> <?= $activity->excursion_name ?></h5>
                                    <p class="sight-body-discription"><?= substr($activity->note, 0, 100) ?></p>
                                    <a target="_blank" onclick="get_tours_data('<?= $activity->city_id ?>','4','<?= $activity->entry_id ?>')" style="cursor:pointer!important;color: white!important;" class="btn sight-card-btn">VIEW MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>



        </div>
    </div>
</section>
<!-- Sight Section End -->

<!-- Blog Section Start -->
<section class="branding-section">
    <div class="container">
        <div class="branding-content">
            <div class="t-package-header">
                <h2 class="t-package-title section-title">OUR <span>BLOGS</span> </h2>
                <div class="section-title-line text-center">
                    <div class="t-package-style"></div>
                    <div class="t-package-style-line"></div>
                    <div class="t-package-style"></div>
                </div>
                <p class="t-package-discription section-discription">We explore the world and write our experiences so
                    customer have better experience in their tours.</p>
            </div>
            <div class="row">
                <?php foreach ($Apiblog as $blog) { ?>
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="branding-list">
                            <div class="branding-header">
                                <img src="crm/<?= substr($blog->image, 9) ?>" alt="" class="img-fluid">
                                <h5 class="branding-header-title"><?= $blog->title ?></h5>
                            </div>
                            <div class="branding-body">
                                <div class="branding-item border-bottom">
                                    <article> <?= substr($blog->description, 0, 200) ?>... <a href="single-blog.php?blog_id=<?= $blog->entry_id ?>" target="_blank">Read
                                            More</a> </article>
                                </div>


                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Partner Slider Start -->
<div class="container mt-2 mb-5 pt-3 pb-5">
    <h1 class="section-title text-center mt-2 mb-5">OUR <span>PARTENERS</span>

        <?php
        $logos = json_decode($cached_array[0]->cms_data[0]->assoc_logos);
        ?>
    </h1>
    <div class="logo-slider">
        <?php foreach ($logos as $logo) { ?>
            <div class="item"><a href="#"><img src="https://itourscloud.com/destination_gallery/association-logo/<?= $logo ?>.png" width="200" alt=""></a>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Partner Slider End -->

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
                        <h2 class="mobile-app-title">WHY CHOOSE US</h2>
                        <p class="mobile-app-discription">World's leading tour and travels Booking website,Over 30,000
                            packages worldwide. Book travel packages and enjoy your holidays with <br class="d-none d-lg-block"> distinctive experience</p>
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
                        <h5 class="tips-points-title">TIPS BEFORE TRAVEL</h5>
                        <div class="tips-points-list">

                            <div class="tips-points-item">
                                <div class="tips-points-img">
                                    <img src="images/tips1.png" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tips-points-details">
                                    <h5 class="tips-details-title">Carry your documents</h5>
                                    <p class="tips-detalis-discription mb-0">Carry your required document like Passport,
                                        ID proof etc.</p>
                                </div>
                            </div>
                            <div class="tips-points-item">
                                <div class="tips-points-img">
                                    <img src="images/tips2.png" alt="" class="img-fluid w-100">
                                </div>
                                <div class="tips-points-details">
                                    <h5 class="tips-details-title">Basic knowledge of destination</h5>
                                    <p class="tips-detalis-discription mb-0">Be prepare about the destination, distance,
                                        route</p>
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
                        <h5 class="tips-points-title">CUSTOMER TESTIMONIALS</h5>
                        <div class="it-coustomer-slider owl-carousel">
                            <?php foreach ($Apitestimonial as $testimonial) { ?>
                                <div class="item">
                                    <div class="tips-points-item">
                                        <div class="tips-points-img ">
                                            <img src="crm/<?= substr($testimonial->image, 9) ?>" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="tips-points-details">
                                            <h5 class="tips-details-title"><?= $testimonial->name ?></h5>
                                            <p class="tips-detalis-discription tips-customer-discription">
                                                <?= substr($testimonial->testm, 0, 200) ?> ...</p>
                                            <address class="tips-detalis-discription mb-0"><?= $testimonial->designation ?>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="tips-helps-imgs">
                            <h5 class="tips-points-title tips-helps-title">SECURE PAYMENT GATEWAY</h5>
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

<script type="text/javascript" src="js/select2.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!--partner slider script-->
<script>
    $('.logo-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplayspeed: 2000,
        infinite: true,
        responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<!--End partner slider script-->

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
        $('#from_date, #to_date').datetimepicker({
            timepicker: false,
            format: 'd-m-Y',
            minDate: new Date()
        });

        $('#pickup_date').datetimepicker({
            format: 'm/d/Y H:i',
            minDate: new Date()
        });

        // document.getElementById('return_date').readOnly = true;



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

<script>
function filterSearch() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
$(function () {
	$('#enq_form').validate({
		rules : {
        },
		submitHandler : function (form) {

            $('#enq_submit').prop('disabled','true');
            var base_url = $('#base_url').val();
            var crm_base_url = $('#crm_base_url').val();
            var name = $('#name').val();
            var phone_no = $('#phone_no').val();
            var email = $('#email').val();
            var city = $('#city').val();
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            var service_name = $('#service_name').val();
            document.getElementById('enq_submit').textContent = 'Loading';

			$.ajax({
                type  : 'post',
                url   : crm_base_url + "controller/b2c_settings/b2c/homepage_enq.php",
                data  : {
                    name : name,
                    phone_no : phone_no,
                    email : email,
                    city : city,
                    from_date : from_date,
                    to_date : to_date,
                    service_name : service_name
                },
                success : function (result) {
                    var msg = 'Thank you for enquiry with us. Our experts will contact you shortly.';
                    $.alert({
                        title: 'Notification!',
                        content: msg,
                    });

                    document.getElementById('enq_submit').textContent = 'Enquire Now';
                    setTimeout(() => {
                        window.location.href= base_url;
                    }, 2000);
                }
            });
        }
    });
});
</script>
<script type="text/javascript" src="js/scripts.js"></script>