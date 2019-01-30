<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once ("head.php")?>

<body>
<!-- Navigation -->
<?php include_once ("navbar.php")?>


<header class="bg-image-half"style="background-image: url('img/wedding-venue-gallery.jpg');">
    <div class="container-fluid">
        <div class="celebrate-section row">

            <div class="col align-self-center">
                <hr class="border-white">
                <h1 class="celebrate-text text-white text-center">
                    Take a Look
                </h1>
                <hr class="border-white">
            </div>
        </div>
    </div>
</header>
<div class="container-fluid py-4">
    <div class="row no-gutters">
        <div class="col-md align-self-center">
            <hr class="border-secondary">
        </div>
        <div class="col-md-3">
            <div class="bg-secondary p-1">
                <div class="m-1 border border-white">
                    <h3 class="font-oswald text-white text-center text-uppercase">
                        Ball House
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md align-self-center">
            <hr class="border-secondary">
        </div>
    </div>
</div>
<div class="container">
    <div>
        <!-- Swiper -->
        <div class="house-swiper-container swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/ball-house-1.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/ball-house-2.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/ball-house-3.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/ball-house-4.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/ball-house-5.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="house-swiper-pagination swiper-pagination"></div>
        </div>

        <!-- Initialize House Swiper -->
        <script>
            var house_slides = 3;
            if($(window).width() < 767){
                house_slides = 1;
            }

            var house_swiper = new Swiper('.house-swiper-container', {
                slidesPerView: Number(house_slides),
                spaceBetween: 30,
                pagination: {
                    el: '.house-swiper-pagination',
                    clickable: true,
                },
            });
        </script>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row no-gutters">
        <div class="col-md align-self-center">
            <hr class="border-secondary">
        </div>
        <div class="col-md-3">
            <div class="bg-secondary p-1">
                <div class="m-1 border border-white">
                    <h3 class="font-oswald text-white text-center text-uppercase">
                        Cottages
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md align-self-center">
            <hr class="border-secondary">
        </div>
    </div>
</div>
<div class="container">
    <div>
        <!-- Swiper -->
        <div class="cottages-swiper-container swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/cottage-1.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/cottage-2.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/cottage-3.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/cottage-4.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/cottage-5.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/cottage-6.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="cottages-swiper-pagination swiper-pagination"></div>
        </div>

        <!-- Initialize House Swiper -->
        <script>
            var cottages_slides = 3;
            if($(window).width() < 767){
                cottages_slides = 1;
            }
            var cottages_swiper = new Swiper('.cottages-swiper-container', {
                slidesPerView: Number(cottages_slides),
                spaceBetween: 30,
                pagination: {
                    el: '.cottages-swiper-pagination',
                    clickable: true,
                },
            });
        </script>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row no-gutters">
        <div class="col-md align-self-center">
            <hr class="border-secondary">
        </div>
        <div class="col-md-3">
            <div class="bg-secondary p-1">
                <div class="m-1 border border-white">
                    <h3 class="font-oswald text-white text-center text-uppercase">
                        Community
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md align-self-center">
            <hr class="border-secondary">
        </div>
    </div>
</div>
<div class="container">
    <div>
        <!-- Swiper -->
        <div class="community-swiper-container swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/community-1.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/community-2.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/community-3.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image">
                        <img src="img/community-4.jpg" class="img-thumbnail img-fluid">
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="community-swiper-pagination swiper-pagination"></div>
        </div>

        <!-- Initialize House Swiper -->
        <script>
            var community_slides = 3;
            if($(window).width() < 767){
                community_slides = 1;
            }
            var community_swiper = new Swiper('.community-swiper-container', {
                slidesPerView: Number(community_slides),
                spaceBetween: 30,
                pagination: {
                    el: '.community-swiper-pagination',
                    clickable: true,
                },
            });
        </script>
    </div>
</div>

<?php include_once ("footer.php")?>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <img class="gallery-image-view img-fluid">
    </div>
</div>
<script>
    $('.gallery-image').click(function () {

        var img_path = $(this).find('img').attr('src');
        console.log(img_path);
        $('.gallery-image-view').attr('src',img_path);
        $('.modal').modal('show');
    })
</script>
</body>
</html>
