<?php foreach ($Apibanner as $banner) { 
            
            ?>
            <div class="main-booking-slide item">
                <div class="main-booking-slide-img">
                    <img src="<?= BASE_URL.$banner ?>" alt="booking" class="w-100 img-fluid">
                </div>
            </div>
        <?php } ?>

        //package


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




                    //Hotel


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

                //packages list
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

                        //activities
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

//Blog
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

                //TESTIMONIALS


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