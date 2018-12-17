(function($) {
    'use strict';
    $(".maps").each(function() {
        var setAdress = $(this).data("address"),
            setZoom = $(this).data("zoom"),
            setSaturation = -20,
            getId = $(this).attr("id");
        if ($(this).hasClass("map-primary")) {
            $(this).append("<i></i>");
            var getColor2 = $(".maps.map-primary i").css("backgroundColor");
            var rgb2hex2 = function(rgb) {
                rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
                return (rgb && rgb.length === 4) ? "#" + ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) + ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2) : '';
            }
            var setHue = rgb2hex2(getColor2);
        } else if ($(this).hasClass("map-aqua")) {
            var setHue = "#27d7e7";
        } else if ($(this).hasClass("map-blue")) {
            var setHue = "#3498db";
        } else if ($(this).hasClass("map-brown")) {
            var setHue = "#9c8061";
        } else if ($(this).hasClass("map-dark-blue")) {
            var setHue = "#4765a0";
        } else if ($(this).hasClass("map-dark-red")) {
            var setHue = "#a10f2b";
        } else if ($(this).hasClass("map-green")) {
            var setHue = "#72c02c";
        } else if ($(this).hasClass("map-light-green")) {
            var setHue = "#79d5b3";
        } else if ($(this).hasClass("map-orange")) {
            var setHue = "#f7931d";
        } else if ($(this).hasClass("map-purple")) {
            var setHue = "#9b6bcc";
        } else if ($(this).hasClass("map-red")) {
            var setHue = "#e74c3c";
        } else if ($(this).hasClass("map-teal")) {
            var setHue = "#18ba9b";
        } else if ($(this).hasClass("map-yellow")) {
            var setHue = "#ffcc00";
        } else if ($(this).hasClass("map-default")) {
            var setSaturation = -100;
        } else {
            var setHue = null;
        }
        // Default
        $(this).prettyMaps({
            address: setAdress,
            image: 'js/maps/map-icon.png',
            saturation: setSaturation,
            hue: setHue,
            zoom: setZoom,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true,
            scrollwheel: false,
        });
        var restourant = $("#owl-restaurant");
        if (restourant.length) {
            restourant.owlCarousel({
                navigation: false, // Show next and prev buttons
                pagination: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                afterMove: function() {
                    $(".list-map").each(function() {
                        // Synced with maps
                        var cekActive = $(".owl-page.active", this).index(),
                            getAddress = $(".owl-restaurant").find(".item").eq(cekActive).find(".location").html();
                        $(".maps").prettyMaps({
                            address: getAddress,
                            image: 'js/maps/map-icon.png',
                            saturation: setSaturation,
                            hue: setHue,
                            zoom: setZoom,
                            panControl: true,
                            zoomControl: true,
                            mapTypeControl: true,
                            scaleControl: true,
                            streetViewControl: true,
                            overviewMapControl: true,
                            scrollwheel: false,
                        });
                    });
                }
            });
            $(".next-restaurant").on("click", function() {
                restourant.trigger('owl.next');
            });
            $(".prev-restaurant").on("click", function() {
                restourant.trigger('owl.prev');
            });
        }
    });
})(jQuery);