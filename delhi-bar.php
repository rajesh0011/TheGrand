<!DOCTYPE html>
<html lang="en">
<head>
    <title>Best Bars in Delhi | Lounge in Delhi | The Grand New Delhi</title>
    <meta name="description" content="Discover the best Lounge & bars in Delhi at The Grand New Delhi. Enjoy signature cocktails, premium drinks, and a vibrant atmosphere in one of the city's top luxury hotels." />

    <?php include("inc/head.php") ?>

    <style type="text/css">
        .date-coloum input {
    border: none;
    box-sizing: border-box;
    outline: 0;
    position: relative;
    width: 100%;
}

.date-coloum input[type="date"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto;
}
    </style>

    
</head>

<body id="rooms-page">
    
  <?php include("inc/header.php") ?>

    
    <section class="inner-banner-area rooms-hero">
    <div class="container">
      <div class="contact-banner">
        <div class="text-center">
          <h2 class="inner-banner-heading">Bar</h2>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Bar</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>


    <?php include("inc/booking.php") ?>


<section class="section-margin section-margin--small">
    <div class="container">
        <div class="section-intro text-center pb-80px">
            <h1 class="inner-section-main-heading">Bars in New Delhi</h1>
        </div>

        
        <div class="row pb-4 justify-content-center">
            <div class="col-md-6 col-xl-6 mb-5">
                <div class="card card-explore">
                    <div class="owl-carousel owl-theme rooms-slider text-center">
                        <div class="item">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/aqua-bar-1.avif" alt="Best Bars in Delhi" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/aqua-bar-2.avif" alt="Bars in Delhi" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-explore__title"><a>Aqua Bar</a></h4>
                        <p>Enjoy a relaxed al fresco experience at our Aqua Bar, at the finest 5-star hotel in New Delhi. It is one of the best poolside bars in New Delhi. Soak in the sun with a healthy continental menu served along with a wide range of tantalizing cocktails and mocktails. Experience a magical evening with your loved ones at one of the most happening and luxurious bars in Delhi during your stay at our 5-star hotel near Delhi airport.
                            <br/>
                            <br/>
                        <b>Location:</b> Poolside<br/>
                        <b>Timings:</b> 10:00 am to 07:00 pm( Temporarily Closed)
                        </p>
                        <input type="checkbox" class="check" />
                        
                        <div class="text-box-btns-1">

                            <a href="javascript:void(0);" class="btn book-now-hero-1" data-bs-toggle="modal" data-bs-target="#reserve-your-table">Reserve Your Table</a>
                            <!-- <a href="#" target="_blank" class="btn explore-more-hero-1">View Spa Menu</a> -->
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 mb-5">
                <div class="card card-explore">
                    <div class="owl-carousel owl-theme rooms-slider text-center">
                        <div class="item">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/gbar-1.avif" alt="Luxury Bars in Delhi" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/gbar-2.avif" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/gbar-3.avif" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-explore__title"><a>G-Bar</a></h4>
                        <p>GBar is our super-deluxe all-day lounge and cocktail bar, serving the best selection of wines, champagnes and cocktails and alcohol in Delhi with soulful music to give you an experience of your lifetime.

                        With its contemporary décor, an array of scrumptious finger foods and canapés, GBar is the place to unwind. Book your stay at The Grand New Delhi and enjoy the parties at one of the most happening nightclubs in New Delhi and spend your evening at our G Bar lounge.
                            <br/>
                            <br/>
                        <b>Location:</b> Lobby level<br/>
                        <b>Timings:</b> 01:00 pm to 01:00 am<br>
                        <b>Kindly call us at +91 11 4766 1200 for more information.</b>
                        </p>
                        <input type="checkbox" class="check" />
                        
                        <div class="text-box-btns-1">

                            <a href="javascript:void(0);" class="btn book-now-hero-1" data-bs-toggle="modal" data-bs-target="#reserve-your-table">Reserve Your Table</a>
                            <!-- <a href="#" target="_blank" class="btn explore-more-hero-1">View Spa Menu</a> -->
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<?php include("inc/testimonials.php") ?>


<div class="modal fade" id="reserve-your-table" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title">Reserve Your Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="fixed-form fixed">
                    <form method="post" action="dine_mail.php">
                        <div class="form row">
                           
                            <div class="col-12 form-group">
                                <input type="text" class="form-control"  name="name" placeholder="Name*" required />
                            </div>
                            <div class="col-12 form-group">
                                <input type="number" class="form-control" name="phone"  pattern="[7-9]{1}[0-9]{9}" placeholder="Mobile Phone*" required/>
                            </div>
                            <div class="col-12 form-group">
                                <input type="email" class="form-control" name="email"  placeholder="Email*" required/>
                            </div>
                            <div class="col-12 form-group">
                                <input type="number" class="form-control" placeholder="No of Guest" name="noofguest" />

                            </div>
                            <div class="col-12 form-group date-coloum">
                                <input type="date" placeholder="Date" name="date_in" class="form-control date-checkin" />
                            </div>
                            <div class="col-12 form-group">
                                      <textarea class="form-control" placeholder="Message" rows="3" name="message" required></textarea>
                            </div>
                            <div class="col-12 formFooter">
                                <button type="submit" name="Submit" value="Submit" class="btn mx-auto">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include("inc/footer.php") ?>

<script type="text/javascript">
    $('.rooms-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    // navText: ['<i class="fa-solid fa-angles-left"></i>', '<i class="fa-solid fa-angles-right"></i>'],
    dots: false,
    autoplay: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1

        },
        600: {
            items: 1

        },
        1024: {
            items: 1
        }
    }
})
</script>


<script>
    $('details').on({
 'open.details': function() {
    console.log('opened');
  },
  'close.details': function() {
    console.log('closed');
  }
});
</script>

<script type="text/javascript">
   var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date_in")[0].setAttribute('min', today);
   
</script>
    
   
</body>

</html>