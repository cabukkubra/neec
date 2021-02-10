    $(document).ready(function () {
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            items: 1,
        });
        owl.on("translate.owl.carousel", function (e) {
            $(".owl-item video").each(function () {
                $(this).get(0).pause();
            });
        });
        owl.on("translated.owl.carousel", function (e) {
            $(".owl-item.active video").get(0).play();
        });
        if (!isMobile()) {
            $(".owl-item .item").each(function () {
                var attr = $(this).attr("data-videosrc");
                if (typeof attr !== typeof undefined && attr !== false) {
                    console.log("hit");
                    var videosrc = $(this).attr("data-videosrc");
                    $(this).prepend('<video muted><source src="' + videosrc + '" type="video/mp4"></video>');
                }
            });
            $(".owl-item.active video").attr("autoplay", true).attr("loop", true);
        }
    });

    function isMobile(width) {
        if (width == undefined) {
            width = 0;
        }
        if (window.innerWidth <= width) {
            return true;
        } else {
            return false;
        }
    }

    

$(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $("header").addClass("stick");
        } else {
            $("header").removeClass("stick");
        }

        if ($(this).scrollTop() > 150) {
            $(".productTitleSmall").css({
                display: "block",
            });
        } else {
            $(".productTitleSmall").css({
                display: "none",
            });
        }
    });