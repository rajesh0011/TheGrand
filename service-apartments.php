<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Grand</title>
    <meta name="description" content="" />

    <?php include("inc/head.php") ?>

    <style type="text/css">
      .ui-widget.ui-widget-content {
          position: absolute!important;
      }
    </style>
    
</head>

<body id="service-apartments-page">
    
  <?php include("inc/header.php") ?>

  <section class="inner-banner-area rooms-hero">
    <div class="container">
      <div class="contact-banner">
        <div class="text-center">
          <p class="inner-banner-heading">Service Apartments</p>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service Apartments</li>
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
            <h1 class="inner-section-main-heading">Service Apartments in Delhi</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="cta-box-content text-center">
              <!-- <h3 class="cta-heading mb-4">Celebrate Precious Moments at Our Venues In Vasant Kunj</h3> -->
                <p>The Grand New Delhi offers luxurious fully-equipped service apartments in Delhi. As one of its kind in the vibrant city, our service apartments in New Delhi are meticulously designed to its guests a unique blend of luxury, flexibility, and comfort. An ideal offering for long-stay guests, these service apartments in New Delhi offer personalized services, equipped kitchenettes, added privacy, and impeccable decor, maintained daily.</p>
            </div>
          </div>
        </div>
        
    </div>
</section>



<section class="home-mid-sec">
  <div class="container-fluid p-0">
    <div class="row repeated-block">
      <div class="col-lg-5 align-self-center text-column">
        <div class="text-box-block">
          <h4 class="text-block-title">
           Studio Apartment
          </h4>
          <p><strong>Room Features:</strong> </p>
          <ul>
            <li>900 - 1054 square feet with a living room, and bedroom with attached bathrooms with a bathtub.</li>
            <li>A Minibar, 01 television unit for entertainment.</li>
            <li>Kitchenette facilities - Microwave/Induction, plate/basic utensils, Crockeries, washbasin, a minibar, a fridge, and a toaster.</li>
            <li>Complimentary breakfast and WiFi.</li>
          </ul>
          <div class="text-box-btns">
            <a href="#" class="btn explore-more-hero">Book Now</a>
            <!-- <a href="#" class="btn book-now-hero" id="book-now">Explore Now</a> -->
          </div>
          
        </div>
      </div>
      <div class="col-lg-7 p-0 image-column">
        <div class="img-block">
          <img src="img/service-apartments-1.webp" class="w-100" alt="Studio Apartments" />
        </div>
      </div>
    </div>

    <div class="row repeated-block">
      <div class="col-lg-5 align-self-center text-column">
        <div class="text-box-block">
          <h4 class="text-block-title">
             1 BHK Apartment
          </h4>
          <p><strong>Room Features:</strong> </p>
          <ul>
            <li>1350 square feet lavish master bedroom with 2 wardrobes along with attached bathrooms.</li>
            <li>A living area with a dining table for 6, along with attached bathrooms and a fully equipped.</li>
            <li>2 television units for entertainment.</li>
            <li>Kitchenette facilities - Microwave/Induction, plate/basic utensils, Crockeries, washbasin, a minibar, a fridge, and a toaster.</li>
            <li>Complimentary breakfast and WiFi.</li>
          </ul>
          <div class="text-box-btns">
            <!-- <a href="#" class="btn explore-more-hero">Explore More</a> -->
            <a href="#" class="btn book-now-hero" data-bs-toggle="modal" data-bs-target="#service-apartment-enquiry" >Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-7 p-0 image-column">
        <div class="img-block">
          <img src="img/new-event-img.jpg" class="w-100" alt="wedding and events" />
        </div>
      </div>
      
    </div>

    


  </div>
</section>




<?php include("inc/testimonials.php") ?>


<?php include("inc/footer.php") ?>
    

<div class="modal fade" id="service-apartment-enquiry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <h5 class="modal-title">Enquire Now</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="fixed-form fixed">
                          <form method="post" action="#">
                              <div class="form row">
                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control" id="" name="name" placeholder="First Name*" required />
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control" id="" name="name" placeholder="Last Name*" required />
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="phone" class="form-control" name="phone" id="" placeholder="Phone*" required/>
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="email" class="form-control" name="email" id="" placeholder="Email*" required />
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control" id="checkindate" placeholder="Checkin" name="fromdate" readonly="">
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control" id="checkoutdate" placeholder="Checkout" name="fromdate" readonly="">
                                  </div>
                                  
                                  <div class="col-12 form-group">
                                      <select class="form-select form-control" aria-label="Default select example">
                                        <option selected disabled>Please Select</option>
                                        <option value="Studio Apartment">Studio Apartment</option>
                                        <option value="1 BHK Apartment">1 BHK Apartment</option>
                                      </select>
                                  </div>

                                  <div class="col-12 form-group">
                                      <textarea class="form-control" placeholder="Message" rows="3" required></textarea>
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
  <script type="text/javascript">
    $( "#checkindate" ).datepicker({
          numberOfMonths: 2,
           showCurrentAtPos: 0,
           dateFormat: 'dd/mm/y',
           minDate: 0,
           onSelect: function(selectedDate){
            var d11 = $('#checkindate').datepicker('getDate');
            d11.setDate(d11.getDate() + 1); 
            $('#checkoutdate').datepicker('option', 'minDate', d11,{autoOpen: true});
            $('#checkoutdate').datepicker('setDate', d11);
          }
        });
        
        $('#checkindate').datepicker({
          minDate: new Date(),
          numberOfMonth: 2,
        });

        $('#checkoutdate').datepicker({
          minDate: new Date(),
          dateFormat: 'dd/mm/y',
        });

        if($('#checkindate').length) {
            $('#checkindate').datepicker('setDate', new Date());
            var d22 = $('#checkindate').datepicker('getDate');
            d22.setDate(d22.getDate() + 1);
            $('#checkoutdate').datepicker('option', {numberOfMonths: 2,
              showCurrentAtPos: 1,}, 'minDate', d22);
            $('#checkoutdate').datepicker( 'setDate', d22);
        }
  </script>


</body>

</html>