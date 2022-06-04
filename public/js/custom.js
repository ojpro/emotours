//* Back to top
$(document).ready(function(){
    let pageHeight = $(document).height();
    let halfHeight = pageHeight / 2
    let currentPosition = halfHeight;

    // on page scroll
    $(window).scroll(function(){
        // if the page scroll to down more than the half show the button
        if ($(this).scrollTop() > halfHeight ) {
            $('#back-to-top').fadeIn().toggleClass('hidden');
        } else {
            // other ways hide it
            $('#back-to-top').fadeOut();
        }
    });
    // go back to to the top of the page with animation
    $('#back-to-top').click(function(){
        $("html, body").animate({ scrollTop: 0 ,},halfHeight / 2);
        return false;
    });

    $('#datedropper').dateDropper(
        {
            onChange: function (res) {
                $('#datedropper').text(res.date.m + '-' + res.date.d + '-' + res.date.Y);
            }
        }
    );
});