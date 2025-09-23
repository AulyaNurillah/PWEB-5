// js/script.js - Revisi: Tambah slider, load more, AJAX form, scroll animations.
$(document).ready(function() {
    // Smooth scroll.
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        var target = $(this.hash);
        if (target.length) {
            $('html, body').animate({ scrollTop: target.offset().top }, 1000);
        }
    });

    // Fade-in on scroll.
    function checkVisibility() {
        $('section, #hero').each(function() {
            var top = $(this).offset().top;
            var bottom = top + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            if (bottom > viewportTop && top < viewportBottom) {
                $(this).addClass('opacity-100');
            }
        });
    }
    $(window).on('scroll load', checkVisibility);

    // Testimonials slider (simple jQuery cycle).
    var slides = $('#testimonialSlider > div');
    var current = 0;
    slides.eq(current).addClass('active');
    setInterval(function() {
        slides.eq(current).removeClass('active').fadeOut(500);
        current = (current + 1) % slides.length;
        slides.eq(current).addClass('active').fadeIn(500);
    }, 3000);

    // Load more programs.
    $('#loadMorePrograms').click(function() {
        $('#programList > div.hidden').slice(0, 4).removeClass('hidden').addClass('animate-fadeIn');
        if ($('#programList > div.hidden').length === 0) {
            $(this).hide();
        }
    });

    // AJAX form submit.
    $('#testForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: 'proses_form.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#formMessage').removeClass('hidden text-red-500').addClass('text-green-500').text('Success: ' + response.message);
                } else {
                    $('#formMessage').removeClass('hidden').text('Error: ' + response.message);
                }
            },
            error: function() {
                $('#formMessage').removeClass('hidden').text('AJAX error occurred.');
            }
        });
    });
});