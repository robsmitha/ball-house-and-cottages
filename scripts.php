<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>


<script>

    function SetActiveTab(){
        var path = window.location.pathname;
        var page = path.split("/").pop();
        $('a[href="'+page+'"]').addClass('active');
    }

    function SetResponsiveUI(){
        if ($(window).width() < 767)
        {

        }else{

            $(window).scroll(function(){
                var scrollDistance = $(this).scrollTop();
                 if (scrollDistance > 50){
                    $(".main-navbar-top").addClass('d-none');
                    $("body").attr("style","padding-top: 140px");
                }else{
                    $(".main-navbar-top").removeClass('d-none');
                    $("body").attr("style","padding-top: 230px");
                }
            });
        }
    }


    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    $(function () {
        SetActiveTab();
        SetResponsiveUI();

    });


</script>