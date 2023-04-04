<?php
include ("header.php");
?>
<style>

</style>
 
<link href="https://custudentszone.azureedge.net/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/about.css">

<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="<?php echo FRONT_SITE_PATH?>shop">shop</a></li>
                        <li class="active">About us </li>
                    </ul>
                </div>
            </div>
        </div>
         

<div class="container01">
  <div style="text-align:center">
    <div class="overview-content-2">
    <h2>Welcome To <span>Snack Shack </span> Cafe!</h2>
  </div>
  <div class="row01">
    <div class="column01">
      <img src="assets/img/banner/banner-3.jpg" style="width:100%">
    </div>
    <div class="column01">
      <h3>This Website will help you to display the café products and dishes, so that users can easily see the products and order their dish online just pressing one click.</h3>
            <p class="fst-italic">
              Our team countinuously working 24/7 to improve this site and collecting the custommers data for analitices.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Website for the daily users and for online users</li>
              <li><i class="bi bi-check-circle"></i> Directly mail us to join our developers Community</li>
              <li><i class="bi bi-check-circle"></i> Please give feed back to us , by which we can improve this site</li>
            </ul>
            <p>
              Mail Us your query we'll revert you as soon as possible.
            </p>
            <a style="border:solid #007bff 2px; border-radius: 10px; padding:4px" href="mailto:snackshack394@gmail.com" class="get-started-btn">Mail Us</a>
    </div>
  </div>
</div>
</div>
<hr>


<script>
   /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });
</script> 

<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                  <h3>Darshan Yadav</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
                    We are here 24/7 for you , to serve the Community.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Sayan Sarkar</h3>
                  <h4>CO-FOUNDER</h4>
                  <p>
                    <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
                    We faced a lot of challenges, but finally a good think here for you all. 
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Atul</h3>
                  <h4>Editor</h4>
                  <p>
                    <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
                    Our mission is to ensure nobody has a bad meal.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            
            </div><!-- End testimonial item -->

            
            </div><!-- End testimonial item -->

            
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

<script src="https://custudentszone.azureedge.net/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/testimonials.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<?php
include("footer.php");
?>