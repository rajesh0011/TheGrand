<!DOCTYPE html>
<html lang="en">
<head>
    <title>Explore Our Image Gallery & Videos - The Grand
</title>
    <meta name="description" content="Discover the elegance and luxury of The Grand through our image gallery and videos. Explore stunning visuals and captivating footage that showcase our exquisite accommodations, dining, and event spaces. Get a glimpse of what awaits you!
" />
<link rel="canonical" href="https://www.thegrandnewdelhi.com/gallery" />

    <?php include("inc/head.php") ?>
    <link rel="stylesheet" href="css/jquery.fancybox.css" media="all" />
    
</head>

<body id="about-page">
    
  <?php include("inc/header.php") ?>

    
  <section class="inner-banner-area rooms-hero">
    <div class="container">
      <div class="contact-banner">
        <div class="text-center">
          <p class="inner-banner-heading">Our Gallery</p>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>


    <?php include("inc/booking.php") ?>


        <section class="gallery-section-page">
            <div class="container">
                <div class="section-intro text-center pb-80px">
                    <h1 class="inner-section-main-heading">Our Gallery </h1>
                </div>


                <div class="row justify-content-center">
                    <div class="section clearfix"></div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="2s">
                        <a href="img/new-images/cake-mixing-1.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-1.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="3s">
                        <a href="img/new-images/cake-mixing-2.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-2.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="4s">
                        <a href="img/new-images/cake-mixing-3.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-3.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="2s">
                        <a href="img/new-images/cake-mixing-4.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-4.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="3s">
                        <a href="img/new-images/cake-mixing-5.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-5.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="4s">
                        <a href="img/new-images/cake-mixing-6.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-6.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="2s">
                        <a href="img/new-images/cake-mixing-7.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-7.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="3s">
                        <a href="img/new-images/cake-mixing-8.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-8.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 content mt-4 mt-md-0 wow bounceInUp" data-wow-duration="4s">
                        <a href="img/new-images/cake-mixing-9.webp" data-fancybox="gallery-images">     
                            <div class="img-wrap gallery-small">
                                <img src="img/new-images/cake-mixing-9.webp" class="w-100" alt="" />
                            </div>
                        </a>
                    </div>

                    

                    <div class="col-md-12 text-center">
                       <a href="#" id="loadMore">Load More</a>
                    </div>
                </div>


                
            </div>
        </section>



<?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript">
        $(".content").slice(0, 3).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 3).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("").addClass("noContent");
    }
  });
    </script>

   
</body>

</html>