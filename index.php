<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once ("head.php")?>

  <body>
  <!--<style>
      .overlay-container {
          position: relative;
          width: 100%;
      }

      .overlay {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          height: 100%;
          width: 100%;
          opacity: 0;
          transition: .5s ease;
          background-color: #fefefe;
      }

      .overlay-container:hover .overlay {
          opacity: .8;
      }

      .text {
          color: white;
          font-size: 20px;
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          text-align: center;
      }
  </style>-->
    <!-- Navigation -->
    <?php include_once ("navbar.php")?>

    <!-- Header - set the background image for the header in the line below -->
    <header class="bg-image-full"style="background-image: url('img/background-main.jpg');">
        <div class="container-fluid">
            <div class="d-block">
                <div class="mx-auto masthead-top"></div>
                <div class="mx-auto masthead-pre-top"></div>
                <div class="mx-auto p-4 masthead">
                    <div class="text-center border border-2">
                        <p class="masthead-title">Welcome</p>
                        <p class="masthead-cursive">friends</p>
                        <hr class="w-25">
                        <span class="masthead-text" title="Tallahassee Hotels, Hotels, Tallahassee Weekend Getaway">Stay.</span><br>
                        <span class="masthead-text" title="Tallahassee Golf">Play.</span><br>
                        <span class="masthead-text" title="Tallahassee Weddings, Tallahassee Wedding Venue, Wedding Venue">Celebrate.</span>
                    </div>
                </div>
                <div class="mx-auto masthead-pre-bottom"></div>
                <div class="mx-auto masthead-bottom"></div>
            </div>
        </div>
    </header>

    <!-- Call to action section -->
    <?php include_once ("call-to-action.php")?>

    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-1">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="img/ceremony-cropped.png" class="img-fluid home-img">
                <!--<div class="overlay-container">
                    <img src="img/ceremony.png" class="img-fluid home-img">
                    <div class="overlay">
                        <div class="text">
                            <a class="text-dark" href="venue.php">Find Out More</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="col-md-3">
                <img src="img/bridal-suite-cropped.png" class="img-fluid home-img">
                <!--<div class="overlay-container">
                    <img src="img/bridal-suite.png" class="img-fluid home-img">
                    <div class="overlay">
                        <div class="text">
                            <a class="text-dark" href="venue.php">Find Out More</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="col-md-3">
                <img src="img/details-cropped.png" class="img-fluid home-img">
                <!--<div class="overlay-container">
                    <img src="img/details.png" class="img-fluid home-img">
                    <div class="overlay">
                        <div class="text">
                            <a class="text-dark" href="venue.php">Find Out More</a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="col-md-3">
                <img src="img/wedding-photo-cropped.png" class="img-fluid home-img">
                <!--<div class="overlay-container">
                    <img src="img/wedding-photo.png" class="img-fluid home-img">
                    <div class="overlay">
                        <div class="text">
                            <a class="text-dark" href="venue.php">Find Out More</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <?php include_once ("footer.php")?>


  </body>
</html>
