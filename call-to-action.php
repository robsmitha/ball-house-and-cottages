<section class="py-1">
    <hr>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-3 text-center border-right py-2" style="cursor: pointer" onclick="window.location = 'gallery.php'">
                <h1 class="call-to-action-heading">See</h1>
                <p class="call-to-action-subheading">The Venue</p>
            </div>
            <div class="col-md-3 text-center border-right py-2" style="cursor: pointer" onclick="window.location = 'celebrate.php'">
                <h1 class="call-to-action-heading">Plan</h1>
                <p class="call-to-action-subheading">Your Event</p>
            </div>
            <div class="col-md-3 text-center border-right py-2" style="cursor: pointer" onclick="window.location = 'stay.php'">
                <h1 class="call-to-action-heading">Book</h1>
                <p class="call-to-action-subheading">Your Stay</p>
            </div>
            <div class="col-md-3 text-center py-2" style="cursor: pointer" onclick="window.location = 'contact.php'">
                <h1 class="call-to-action-heading">Connect</h1>
                <p class="call-to-action-subheading">With Us</p>
            </div>
        </div>
    </div>
    <hr>
</section>
<script>
    $(function () {
        $(".hover-border").hover(function(){
            $(this).addClass("border-gold");
        }, function(){
            $(this).removeClass("border-gold");
        });
    });
</script>