jQuery(document).ready(function ($) {
    $(".f_heading").on("click", function () {
        // Remove active class from all headings
        $(".f_heading").removeClass("active");
        // Hide all accordion content
        $(".f_content").hide();

        // Add active class to the clicked heading
        $(this).addClass("active");
        // Show the corresponding content
        $(this).next(".f_content").show();
    });
    $(".fcp2").on("click", function () {
        // Remove active class from all headings
        // Hide all accordion content
        $(".find_car_parts_form").toggleClass("active");
    });
    $(".showcoupon2").on("click", function () {
        $(".couponToggleContent").toggleClass("active");
    });
    /* $(".tab-heading").on("click", function () {
        $(this).next().toggleClass("active");
    }); */
// 1. Show the first panel on load
    const firstPanel = $('.bde-tabs__panel-content').first();
    firstPanel.addClass('active');
    firstPanel.find('h2').removeClass('d-none hidden').addClass('active');
    firstPanel.find('.tab-content-c').show();

    // 2. Handle toggle on h2 click
    $('.bde-tabs__panel-content h2').on('click', function () {
        const panel = $(this).closest('.bde-tabs__panel-content');
        const content = panel.find('.tab-content-c');

        if (content.is(':visible')) {
            // Hide this panel
            content.slideUp();
            $(this).removeClass('active');
            panel.removeClass('active');
        } else {
            // Hide all panels first
            $('.bde-tabs__panel-content .tab-content-c').slideUp();
            $('.bde-tabs__panel-content').removeClass('active');
            $('.bde-tabs__panel-content h2').removeClass('active');

            // Show this panel
            content.slideDown();
            $(this).addClass('active');
            panel.addClass('active');
        }
    });    
});


/* jQuery(document).ready(function ($) {
    // Toggle on manual click
    $(".showcoupon2").on("click", function () {
        $(".couponToggleContent").addClass("active");

        // Store toggle state in localStorage so it persists after reload
        localStorage.setItem("couponToggled", "true");
    });

    // Persist toggle after reload (if failed submission)
    if (localStorage.getItem("couponToggled") === "true") {
        $(".couponToggleContent").addClass("active");
    }

    // After submission, check if coupon succeeded
    if (
        $('.woocommerce-message:contains("Coupon code applied successfully")').length > 0 ||
        $('.woocommerce-message:contains("Coupon has been applied")').length > 0
    ) {
        // Coupon was applied → hide the form and toggle, clear stored toggle
        $(".couponToggle, .couponToggleContent").hide();
        localStorage.removeItem("couponToggled");
    }

    // If error message shown → leave form open
    if (
        $('.woocommerce-error:contains("does not exist")').length > 0 ||
        $('.woocommerce-error:contains("already applied")').length > 0 ||
        $('.woocommerce-error').length > 0
    ) {
        $(".couponToggleContent").addClass("active");
        localStorage.setItem("couponToggled", "true");
    }
});

 */