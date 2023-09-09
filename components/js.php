<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>

<!-- Application JS -->
<script>
    $(document).ready((e) => {
        $('.hamBtn').click(() => {
            // if()
            console.log();
            if ($('.hamBtn').hasClass('hide')) {
                $('.mobileNavLinks').toggle();
                $('.hamBtn').removeClass('hide')
                $('.hamBtn').addClass('show')
                $('.hamBtn').html(` <i class='bx bx-menu-alt-left'></i>`)
            }
            else {
                $('.mobileNavLinks').toggle();
                $('.hamBtn').removeClass('show')
                $('.hamBtn').addClass('hide')
                $('.hamBtn').html(`<i class='bx bx-menu'></i>`)
            }
        })
    });

    $('.eventNavLinkMobile').click(() => {
        $('.previousEventsMobile').toggle();
    })
</script>