<?php
/*
Template Name: Home
*/
?>

<?php
get_header();
?>

<span class="material-symbols-outlined arrow-separator">arrow_forward_ios</span>
<main class="content">
  <section class="advantages" id="advantages">
    <div class="container">
      <h2 class="advantages__title title">What makes us the best</h2>
      <div class="advantages-box">
        <div class="advantages-container">
          <span class="advantages-container__icon"><span class="material-symbols-outlined">group</span></span>
          <h3 class="advantages-container__title">
            Experienced specialists
          </h3>
          <p class="advantages-container__text">
            Our agents will help you every step of the way.
          </p>
        </div>
        <div class="advantages-container">
          <span class="advantages-container__icon"><span class="material-symbols-outlined">visibility</span></span>
          <h3 class="advantages-container__title">
            Transparent transactions
          </h3>
          <p class="advantages-container__text">
            Transparency and trust in every purchase.
          </p>
        </div>
        <div class="advantages-container">
          <span class="advantages-container__icon"><span class="material-symbols-outlined">support_agent</span></span>
          <h3 class="advantages-container__title">Post-support</h3>
          <p class="advantages-container__text">
            We stay with you even after the purchase.
          </p>
        </div>
        <div class="advantages-container">
          <span class="advantages-container__icon"><span class="material-symbols-outlined">apartment</span></span>
          <h3 class="advantages-container__title">Variety of objects</h3>
          <p class="advantages-container__text">
            Find the perfect property for yourself.
          </p>
        </div>
      </div>
    </div>
  </section>
  <span class="material-symbols-outlined arrow-separator">arrow_forward_ios</span>
  <section class="services" id="services">
    <div class="container">
      <h2 class="services__title title">Services</h2>
      <div class="services-container">
        <div class="services-left-side">
          <?php the_field("services_item") ?>
        </div>
        <div class="services-right-side">
          <?php the_field("services_text") ?>
        </div>
      </div>
    </div>
  </section>
  <span class="material-symbols-outlined arrow-separator">arrow_forward_ios</span>
  <section class="objects">
    <div class="object-container">
      <h2 class="objects__title title">Our Objects</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php
          global $post;

          $myposts = get_posts([
            'numberposts' => -1,
            'category' => 13
          ]);

          if ($myposts) {
            foreach ($myposts as $post) {
              setup_postdata($post);
          ?>
              <div class="swiper-slide">

                <?php the_post_thumbnail(
                  array(380, 250),
                ); ?>
              </div>


          <?php
            }
          }

          wp_reset_postdata();
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <p class="objects__text">
        "We offer a wide selection of properties: from cozy apartments to
        luxury houses. Find your ideal home with us!"
      </p>
    </div>
  </section>
</main>


<?php
get_footer();
?>