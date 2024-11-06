<html>

<body>
  <footer class="footer" id="contact">
    <div class="container">
      <div class="footer-info-container">
        <div class="contacts">
          <h2 class="contacts__title">Contact information</h2>
          <div class="contacts-info">
            <ul class="contacts-info__list">
              <li class="contacts-info__item">
                <p class="contacts-info__item-title">Address</p>
                <p class="contacts-info__item-text">
                  <?php the_field("address") ?>
                </p>
              </li>
              <li class="contacts-info__item">
                <p class="contacts-info__item-title">Work Time</p>
                <p class="contacts-info__item-text">
                  <?php the_field("work_time") ?>
                </p>
              </li>
              <li class="contacts-info__item">
                <p class="contacts-info__item-title">Phone</p>
                <p class="contacts-info__item-text"><?php the_field("telephone_number_text") ?></p>
              </li>
            </ul>
          </div>
        </div>
        <div class="follow-us">
          <h2 class="follow-us__title">Follow Us</h2>
          <div class="social-links">
            <a href="<?php the_field("instagram_link") ?>">
              <div class="social-links__item">
                <ion-icon
                  class="socials-link__icon"
                  name="logo-instagram"></ion-icon>
              </div>
            </a>
            <a href="<?php the_field("twitter_link") ?>">
              <div class="social-links__item">
                <ion-icon
                  class="socials-link__icon"
                  name="logo-twitter"></ion-icon>
              </div>
            </a>
            <a href="<?php the_field("youtube_link") ?>">
              <div class="social-links__item">
                <ion-icon
                  class="socials-link__icon"
                  name="logo-youtube"></ion-icon>
              </div>
            </a>
            <a href="<?php the_field("facebook_link") ?>">
              <div class="social-links__item">
                <ion-icon
                  class="socials-link__icon"
                  name="logo-facebook"></ion-icon>
              </div>
            </a>
          </div>
        </div>
        <div class="footer-contact-form">
          <h2 class="contacts-form__title">We are Ready to Help!</h2>
          <?php echo do_shortcode('[contact-form-7 id="2a522b4" title="Contact Form for home-picker"]') ?>
        </div>
      </div>
    </div>
  </footer>

  <?php
  wp_footer();
  ?>
</body>

</html>