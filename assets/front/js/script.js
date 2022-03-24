"use strict"
/* back-to-top */
if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function() {
        backToTop();
    });
    $('#back-to-top').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('body').addClass('newClass');
    } else {
        $('body').removeClass('newClass');
    }
});

/* Chat_Boat 
Start of Tawk.to Script */

var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/61fa37059bd1f31184da83c0/1fqsmds0t';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();

/* End of Tawk.to Script */

/*  fade_in_button_start  */
$(document).ready(function() {
    $("#yes_no_btn_1").click(function() {
        $("#div1").fadeIn();
    });
});

/*  fade_in_button_end  */

/*  fade_in_button_start  */
$(document).ready(function() {
    $("#yes_no_btn_2").click(function() {
        $("#div2").fadeIn();
    });
});

/* fade_in_button_end */

/* fade_in_button_start */
$(document).ready(function() {
    $("#yes_no_btn_3").click(function() {
        $("#div3").fadeIn();
    });
});

/* fade_in_button_end */

(function() {
    "use strict";
    var jQueryPlugin = (window.jQueryPlugin = function(ident, func) {
        return function(arg) {
            if (this.length > 1) {
                this.each(function() {
                    var $this = $(this);
                    if (!$this.data(ident)) {
                        $this.data(ident, func($this, arg));
                    }
                });
                return this;
            } else if (this.length === 1) {
                if (!this.data(ident)) {
                    this.data(ident, func(this, arg));
                }
                return this.data(ident);
            }
        };
    });
})();
(function() {
    "use strict";

    function Guantity($root) {
        const element = $root;
        const quantity = $root.first("data-quantity");
        const quantity_target = $root.find("[data-quantity-target]");
        const quantity_minus = $root.find("[data-quantity-minus]");
        const quantity_plus = $root.find("[data-quantity-plus]");
        var quantity_ = quantity_target.val();
        $(quantity_minus).click(function() {
            quantity_target.val(--quantity_);
        });
        $(quantity_plus).click(function() {
            quantity_target.val(++quantity_);
        });
    }
    $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
    $("[data-quantity]").Guantity();
})();


/* GALLERY  */
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('body').addClass('newClass');
    } else {
        $('body').removeClass('newClass');
    }
});


// Gallery image hover
$(".img-wrapper").hover(
    function() {
        $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
    },
    function() {
        $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
    }
);
// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');
// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);
// Hide overlay on default
$overlay.hide();
// When an image is clicked
$(".img-overlay").click(function(event) {
    // Prevents default behavior
    event.preventDefault();
    // Adds href attribute to variable
    var imageLocation = $(this).prev().attr("href");
    // Add the image src to $image
    $image.attr("src", imageLocation);
    // Fade in the overlay
    $overlay.fadeIn("slow");
});
// When the overlay is clicked
$overlay.click(function() {
    // Fade out the overlay
    $(this).fadeOut("slow");
});
// When next button is clicked
$nextButton.click(function(event) {
    // Hide the current image
    $("#overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").next().find("img"));
    // All of the images in the gallery
    var $images = $("#image-gallery img");
    // If there is a next image
    if ($nextImg.length > 0) {
        // Fade in the next image
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    } else {
        // Otherwise fade in the first image
        $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
    }
    // Prevents overlay from being hidden
    event.stopPropagation();
});
// When previous button is clicked
$prevButton.click(function(event) {
    // Hide the current image
    $("#overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").prev().find("img"));
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    // Prevents overlay from being hidden
    event.stopPropagation();
});
// When the exit button is clicked
$exitButton.click(function() {
    // Fade out the overlay
    $("#overlay").fadeOut("slow");
});

/* GALLERY  */

/* GMC  */
(function() {
"use strict";
var jQueryPlugin = (window.jQueryPlugin = function(ident, func) {
    return function(arg) {
        if (this.length > 1) {
            this.each(function() {
                var $this = $(this);
                if (!$this.data(ident)) {
                    $this.data(ident, func($this, arg));
                }
            });
            return this;
        } else if (this.length === 1) {
            if (!this.data(ident)) {
                this.data(ident, func(this, arg));
            }
            return this.data(ident);
        }
    };
});
})();
(function() {
    "use strict";

    function Guantity($root) {
        const element = $root;
        const quantity = $root.first("data-quantity");
        const quantity_target = $root.find("[data-quantity-target]");
        const quantity_minus = $root.find("[data-quantity-minus]");
        const quantity_plus = $root.find("[data-quantity-plus]");
        var quantity_ = quantity_target.val();
        $(quantity_minus).click(function() {
            quantity_target.val(--quantity_);
        });
        $(quantity_plus).click(function() {
            quantity_target.val(++quantity_);
        });
    }
    $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
    $("[data-quantity]").Guantity();
})();


/* MEDICLAIM  */
/* Quentity_Button  */
jQuery(document).ready(function() {
    // This button will increment the value
    $('.qtyplus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
    });
});