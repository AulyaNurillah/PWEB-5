$(document).ready(function() {

    // Smooth scroll
    $('a[href^="#"]').click(function(e){
        e.preventDefault();
        var target = $(this.hash);
        if(target.length){
            $('html,body').animate({scrollTop: target.offset().top},800);
        }
    });

    // Fade-in section
    $('section, #hero').each(function(){ $(this).addClass('opacity-0 transition-opacity duration-1000'); });
    setTimeout(()=> $('#hero').removeClass('opacity-0').addClass('opacity-100'), 200);
    $(window).on('scroll load', function(){
        $('section').each(function(){
            var top = $(this).offset().top;
            var bottom = top + $(this).outerHeight();
            var vTop = $(window).scrollTop();
            var vBottom = vTop + $(window).height();
            if(bottom>vTop && top<vBottom) $(this).removeClass('opacity-0').addClass('opacity-100');
        });
    });

    // Testimonials slider
    var slides = $('#testimonialSlider > div'); var current=0;
    if(slides.length){ slides.eq(0).show().addClass('active');
        setInterval(function(){
            slides.eq(current).fadeOut(500).removeClass('active');
            current=(current+1)%slides.length;
            slides.eq(current).fadeIn(500).addClass('active');
        },3000);
    }

    // Load more programs
    $('#loadMorePrograms').click(function(){
        $('#programList > div.hidden').slice(0,4).removeClass('hidden');
        if($('#programList > div.hidden').length===0) $(this).hide();
    });

    $(document).ready(function(){

    // Modal open/close
    $('#loginBtn').click(()=> $('#loginModal').removeClass('hidden'));
    $('#signupBtn').click(()=> $('#signupModal').removeClass('hidden'));
    $('#closeLogin').click(()=> $('#loginModal').addClass('hidden'));
    $('#closeSignup').click(()=> $('#signupModal').addClass('hidden'));

    
    // AJAX Login
    $('#loginForm').submit(function(e){
        e.preventDefault();
        $.post('proses_form.php', $(this).serialize()+'&action=login', function(res){
        if(res.success){
            location.reload(); // reload agar navbar update
        } else {
            $('#loginMessage').removeClass('hidden').text(res.message).addClass('text-red-500');
        }
        }, 'json');
    });

    // AJAX Signup
    $('#signupForm').submit(function(e){
        e.preventDefault();
        $.post('proses_form.php', $(this).serialize()+'&action=signup', function(res){
        if(res.success){
            alert(res.message);
            $('#signupModal').addClass('hidden');
        } else {
            $('#signupMessage').removeClass('hidden').text(res.message).addClass('text-red-500');
        }
        }, 'json');
    });

    // AJAX Logout
    $('#logoutBtn').click(function(){
        $.post('proses_form.php', {action:'logout'}, function(res){
        if(res.success) location.reload();
        }, 'json');
    });
});
});