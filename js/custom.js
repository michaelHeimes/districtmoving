jQuery('.pro-primary-slider').slick({
    infinite: true,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 4000,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                arrows: false,

            }
        }
    ]
});

jQuery(document).ready(function ($) {
    // dropdown toggle
    jQuery(".caret").on("click", function (e) {
          e.preventDefault();
        jQuery('.sub-menu').toggle(); 
    });

    var url = jQuery(location).attr('href');
    var parts = url.split("/");
    var last_part = parts[parts.length-2];
    if( last_part == "government-moving-services"){
        jQuery("#input_1_5").val("Govemment");
    }else if(last_part == "storage-services"){
        jQuery("#input_1_5").val("Storage");
    }else if(last_part == "residential-moving-services"){
        jQuery("#input_1_5").val("Household");
    }else if(last_part == "commercial-moving-services"){
        jQuery("#input_1_5").val("Commercial");
    }
});     


