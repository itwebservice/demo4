
banners();
packages();
hotels();
packageList();
activities();
blogs();
testimonials();
$( document ).ready(function() {
    iframelazy();
});

function iframelazy()
{
    html = '<iframe width="560" loading=lazy height="315" src="https://www.youtube.com/embed/CxHZAm_B0UU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    $('#iframe-lazy').html(html);
}

function banners() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();

    var jqXhr = ajaxCall(base_url_api + 'banner', {}, function(data) {
        $.each(data, function (key, value) {
            html += '<div class="main-booking-slide item"><div class="main-booking-slide-img"><img src="' + base_url + value + '" alt="booking" class="w-100 img-fluid"></div></div>';
        });
        $('#banner-section').html(html);
    });
    // $.get(
    //     base_url_api + 'banner',
    //     {},
    //     function (data) {

    //         $.each(data, function (key, value) {
    //             html += '<div class="main-booking-slide item"><div class="main-booking-slide-img"><img src="' + base_url + value + '" alt="booking" class="w-100 img-fluid"></div></div>';
    //         });
    //         $('#banner-section').html(html);
    //     }
    // );
}

function packages() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();
    
    var jqXhr = ajaxCall(base_url_api + 'package/popular', {}, function(data) {
        $.each(data, function (key, value) {

            var pricing = (value.tariff) ? value.currency_code + ' ' + value.tariff.cadult : 0.00;
            var htmlTemp = `
            <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="t-package-card">
                <a target="_blank" href="`+ value.file_name_url + `">
                    <div class="t-package-offer">
                        <img src="images/band.png" alt="" class="img-fluid w-100">
                    </div>
                    <div class="t-package-img">
                        <img src=" `+ value.main_img_url + `" alt="" class="img-fluid">
                        <div class="t-package-card-btn">
                            <span class="t-package-card-price btn"> `+ value.currency.default_currency +` `+ value.tour_cost + `
                            </span>
                            <a target="_blank" href="`+ value.file_name_url + `" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </a>
                <div class="t-package-card-body">
                    <h6 class="t-package-card-title">
                    `+ value.package_name + `<span>(` + value.destination.dest_name + `)</span>
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
    });
    
    
    
/*    $.get(
        base_url_api + 'package/popular',
        {},
        function (data) {

            $.each(data, function (key, value) {

                var pricing = (value.tariff) ? value.currency_code + ' ' + value.tariff.cadult : 0.00;
                var htmlTemp = `
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="t-package-card">
                    <a target="_blank" href="`+ value.file_name_url + `">
                        <div class="t-package-offer">
                            <img src="images/band.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="t-package-img">
                            <img src=" `+ value.main_img_url + `" alt="" class="img-fluid">
                            <div class="t-package-card-btn">
                                <span class="t-package-card-price btn"> `+ pricing + `
                                </span>
                                <a target="_blank" href="`+ value.file_name_url + `" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                    </a>
                    <div class="t-package-card-body">
                        <h6 class="t-package-card-title">
                        `+ value.package_name + `<span>(` + value.destination.dest_name + `)</span>
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
    ); */
}


function hotels() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();
    
    var jqXhr = ajaxCall(base_url_api + 'hotel/popular', {}, function(data) {
        $.each(data, function (key, value) {
            var htmlTemp = `
             <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
             <div class="t-hotels-card">
                 <a target="_blank" onclick="get_tours_data('`+value.city_id +`','3','`+ value.hotel_id +`')" style="cursor:pointer!important;">
                     <div class="t-hotels-img">
                         <img src="`+ base_url+value.main_img +`" alt="" class="img-fluid w-100">
                         <div class="t-hotels-ticket">
                             `+ value.rating_star +`
                         </div>
                     </div>
                 </a>
                 <div class="t-hotels-card-body">
                     <a target="_blank" onclick="get_tours_data('`+ value.city_id +`','3','`+ value.hotel_id +`')" style="cursor:pointer!important;">
                         <h5 class="t-hotels-title">`+ value.hotel_name +`</h5>
                     </a>
                     <div class="t-hotels-reviw">
                         <ul class="t-hotels-reviw-list">
                             <li class="t-hotels-reviw-item">
                                 `+ (value.amenities).substr(0,200) +` <br>
                                 <b> `+ value.hotel_city.city_name +`,`+ value.country +`</b>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
             `;
             html += htmlTemp;
         });
         $('#hotel-section').html(html);
    });
    
    
    
   /* $.get(
        base_url_api + 'hotel/popular',
        {},
        function (data) {

            $.each(data, function (key, value) {
               var htmlTemp = `
                <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
                <div class="t-hotels-card">
                    <a target="_blank" onclick="get_tours_data('`+value.city_id +`','3','`+ value.hotel_id +`')" style="cursor:pointer!important;">
                        <div class="t-hotels-img">
                            <img src="`+ base_url+value.main_img +`" alt="" class="img-fluid w-100">
                            <div class="t-hotels-ticket">
                                `+ value.rating_star +`
                            </div>
                        </div>
                    </a>
                    <div class="t-hotels-card-body">
                        <a target="_blank" onclick="get_tours_data('`+ value.city_id +`','3','`+ value.hotel_id +`')" style="cursor:pointer!important;">
                            <h5 class="t-hotels-title">`+ value.hotel_name +`</h5>
                        </a>
                        <div class="t-hotels-reviw">
                            <ul class="t-hotels-reviw-list">
                                <li class="t-hotels-reviw-item">
                                    `+ (value.amenities).substr(0,200) +` <br>
                                    <b> `+ value.hotel_city.city_name +`,`+ value.country +`</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                `;
                html += htmlTemp;
            });
            $('#hotel-section').html(html);
        }
    ); */
}
function packageList()
{
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();
    var count =1;

    var jqXhr = ajaxCall(base_url_api + 'package/popular', {}, function(data) {
        $.each(data, function (key, value) {

            var pricing = (value.tariff) ? value.currency_code + ' ' + value.tariff.cadult : 0.00;
           var htmlTemp = `
            <tr class="events-body">
                            <td class="events-place-ruting">`+ count++ +`</td>
                            <td class="bob">
                                <img src="`+ value.main_img_url +`" alt="" class="img-fluid events-place-img">
                                <a target="_blank" href="`+ value.file_name_url +`" class="events-place-name">`+ value.package_name +`</a>
                            </td>
                            <td class="events-place-ruting table-routing">`+ value.total_days +`</td>
                            <td class="events-place-ruting table-routing">`+ value.total_nights +`</td>
                            <td class="events-place-ruting table-routing"> `+ value.destination.dest_name +`</td>
                            <td>
                                <a target="_blank" href="`+ value.file_name_url +`" class="btn events-place-book">Book Now</a>
                            </td>
                        </tr>
            `;
            html += htmlTemp;
        });
        $('#packages-list-section').html(html);
    });

  /*  $.get(
        base_url_api + 'package/popular',
        {},
        function (data) {

            $.each(data, function (key, value) {

                var pricing = (value.tariff) ? value.currency_code + ' ' + value.tariff.cadult : 0.00;
               var htmlTemp = `
                <tr class="events-body">
                                <td class="events-place-ruting">`+ count++ +`</td>
                                <td class="bob">
                                    <img src="`+ value.main_img_url +`" alt="" class="img-fluid events-place-img">
                                    <a target="_blank" href="`+ value.file_name_url +`" class="events-place-name">`+ value.package_name +`</a>
                                </td>
                                <td class="events-place-ruting table-routing">`+ value.total_days +`</td>
                                <td class="events-place-ruting table-routing">`+ value.total_nights +`</td>
                                <td class="events-place-ruting table-routing"> `+ value.destination.dest_name +`</td>
                                <td>
                                    <a target="_blank" href="`+ value.file_name_url +`" class="btn events-place-book">Book Now</a>
                                </td>
                            </tr>
                `;
                html += htmlTemp;
            });
            $('#packages-list-section').html(html);
        }
    );   */ 
}

function activities() {

    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();

    var jqXhr = ajaxCall(base_url_api + 'activity/popular', {}, function(data) {
        $.each(data, function (key, value) {
            var htmlTemp = `
            <div class="col col-12 col-md-6">
            <div class="sight-card">
                <div class="row">
                    <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="sight-card-img">
                            <img src="`+ base_url+value.main_img_url +`" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                        <div class="sight-card-body">
                            <h6 class="sight-body-subtitle">`+ value.departure_point +`</h6>
                            <h5 class="sight-body-title"> `+ value.excursion_name +`</h5>
                            <p class="sight-body-discription">`+ (value.note).substr( 0, 100) +`</p>
                            <a target="_blank" onclick="get_tours_data('`+ value.city_id +`','4','`+ value.entry_id +`')" style="cursor:pointer!important;color: white!important;" class="btn sight-card-btn">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            `; 
            html += htmlTemp;
         });
         $('#activity-section').html(html);
    });


   /* $.get(
        base_url_api + 'activity/popular',
        {},
        function (data) {

            $.each(data, function (key, value) {
               var htmlTemp = `
               <div class="col col-12 col-md-6">
               <div class="sight-card">
                   <div class="row">
                       <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                           <div class="sight-card-img">
                               <img src="`+ base_url+value.main_img_url +`" alt="" class="img-fluid w-100">
                           </div>
                       </div>
                       <div class="col col-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                           <div class="sight-card-body">
                               <h6 class="sight-body-subtitle">`+ value.departure_point +`</h6>
                               <h5 class="sight-body-title"> `+ value.excursion_name +`</h5>
                               <p class="sight-body-discription">`+ (value.note).substr( 0, 100) +`</p>
                               <a target="_blank" onclick="get_tours_data('`+ value.city_id +`','4','`+ value.entry_id +`')" style="cursor:pointer!important;color: white!important;" class="btn sight-card-btn">VIEW MORE</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
               `; 
               html += htmlTemp;
            });
            $('#activity-section').html(html);
        }
    ); */
}

function blogs() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();

    var jqXhr = ajaxCall(base_url_api + 'blogs', {}, function(data) {
        $.each(data, function (key, value) {
            var htmlTemp = `
            <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
            <div class="branding-list">
                <div class="branding-header">
                    <img src="`+base_url+ value.img_filter +`" alt="" class="img-fluid">
                    <h5 class="branding-header-title">`+ value.title +`</h5>
                </div>
                <div class="branding-body">
                    <div class="branding-item border-bottom">
                        <article> `+ (value.description).substr( 0, 200) +`... <a href="single-blog.php?blog_id=`+ value.entry_id +`" target="_blank">Read
                                More</a> </article>
                    </div>


                </div>
            </div>
        </div>
            `; 
            html += htmlTemp;
         });
         $('#blog-section').html(html);
    });


  /*  $.get(
        base_url_api + 'blogs',
        {},
        function (data) {

            $.each(data, function (key, value) {
               var htmlTemp = `
               <div class="col col-12 col-md-12 col-lg-4 col-xl-4">
               <div class="branding-list">
                   <div class="branding-header">
                       <img src="`+base_url+ value.img_filter +`" alt="" class="img-fluid">
                       <h5 class="branding-header-title">`+ value.title +`</h5>
                   </div>
                   <div class="branding-body">
                       <div class="branding-item border-bottom">
                           <article> `+ (value.description).substr( 0, 200) +`... <a href="single-blog.php?blog_id=`+ value.entry_id +`" target="_blank">Read
                                   More</a> </article>
                       </div>


                   </div>
               </div>
           </div>
               `; 
               html += htmlTemp;
            });
            $('#blog-section').html(html);
        }
    ); */
}


function associations() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();
    $.get(
        base_url_api + 'association',
        {},
        function (data) {

            $.each(data, function (key, value) {
               var htmlTemp = `
               
            
               `; 
               html += htmlTemp;
            });
            $('#blog-section').html(html);
        }
    );
}


function testimonials() {
    var html = "";
    var base_url_api = $('#base_url_api').val();
    var base_url = $('#crm_base_url').val();

    var jqXhr = ajaxCall(base_url_api + 'testimonial', {}, function(data) {
        $.each(data, function (key, value) {
            var htmlTemp = `
            <div class="item">
            <div class="tips-points-item">
                <div class="tips-points-img ">
                    <img src="`+ base_url+value.filter_img +`" alt="" class="img-fluid w-100">
                </div>
                <div class="tips-points-details">
                    <h5 class="tips-details-title">`+ value.name +`</h5>
                    <p class="tips-detalis-discription tips-customer-discription">
                        `+ (value.testm).substr( 0, 200) +` ...</p>
                    <address class="tips-detalis-discription mb-0">`+ value.designation +`
                    </address>
                </div>
            </div>
        </div>
         
            `; 
            html += htmlTemp;
         });
         $('#testimonial-section').html(html);
    });


   /* $.get(
        base_url_api + 'testimonial',
        {},
        function (data) {

            $.each(data, function (key, value) {
               var htmlTemp = `
               <div class="item">
               <div class="tips-points-item">
                   <div class="tips-points-img ">
                       <img src="`+ base_url+value.filter_img +`" alt="" class="img-fluid w-100">
                   </div>
                   <div class="tips-points-details">
                       <h5 class="tips-details-title">`+ value.name +`</h5>
                       <p class="tips-detalis-discription tips-customer-discription">
                           `+ (value.testm).substr( 0, 200) +` ...</p>
                       <address class="tips-detalis-discription mb-0">`+ value.designation +`
                       </address>
                   </div>
               </div>
           </div>
            
               `; 
               html += htmlTemp;
            });
            $('#testimonial-section').html(html);
        }
    ); */
}


function ajaxCall(url, data, doneCallback) {
 
    return $.get(url, data, function() {}, "json").done(doneCallback).fail();
}