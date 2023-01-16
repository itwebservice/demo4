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