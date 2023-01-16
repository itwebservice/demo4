
banners();
packages();





function banners() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();
    $.get(
        base_url_api + 'banner',
        {},
        function (data) {

            $.each(data, function (key, value) {
                html += '<div class="main-booking-slide item"><div class="main-booking-slide-img"><img src="' + base_url + value + '" alt="booking" class="w-100 img-fluid"></div></div>';
            });
            $('#banner-section').html(html);
        }
    );
}

function packages() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();
    $.get(
        base_url_api + 'package/popular',
        {},
        function (data) {

            $.each(data, function (key, value) {
                
                 var pricing = (value.tariff) ? value.currency_code+' '+value.tariff.cadult  : 0.00; 
                htmlTemp = `
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="t-package-card">
                    <a target="_blank" href="`+value.file_name_url+`">
                        <div class="t-package-offer">
                            <img src="images/band.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="t-package-img">
                            <img src=" `+value.main_img_url+`" alt="" class="img-fluid">
                            <div class="t-package-card-btn">
                                <span class="t-package-card-price btn"> `+pricing+`
                                </span>
                                <a target="_blank" href="`+value.file_name_url+`" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                    </a>
                    <div class="t-package-card-body">
                        <h6 class="t-package-card-title">
                        `+value.package_name+`<span>(`+value.destination.dest_name+`)</span>
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
                `;
                html += htmlTemp;
            });
            $('#packages-section').html(html);
        }
    );
}
