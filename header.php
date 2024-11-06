<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Vite App</title>

  <?php
  wp_head();
  ?>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header-top">
        <a href="#" class="header__logo logo"><?php the_field("logo") ?></a>
        <button class="hamburger" aria-label="Toggle menu">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-list__item item">
              <a href="#advantages">About us</a>
            </li>
            <li class="nav-list__item"><a href="#services">Services</a></li>
            <li class="nav-list__item"><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <div class="phone-box">
          <span class="material-symbols-outlined call-icon">call</span><a href="#" class="phone-box__phone"><?php the_field("telephone_number_text") ?></a>
        </div>
      </div>
      <div class="modal-menu">
        <button class="close-menu" aria-label="Close menu">Close</button>
        <h2>MENU</h2>
        <ul class="modal-nav-list">
          <li class="modal-nav-list__item">
            <a href="#advantages">About us</a>
          </li>
          <li class="modal-nav-list__item">
            <a href="#services">Services</a>
          </li>
          <li class="modal-nav-list__item">
            <a href="#contact">Contact us</a>
          </li>
        </ul>
        <div class="modal-phone-box">
          <span class="material-symbols-outlined call-icon">call</span>
          <a href="#" class="modal-phone-box__phone"><?php the_field("telephone_number_text") ?></a>
        </div>
      </div>
      <div class="header-content">
        <div class="header-info">
          <h1 class="header-content__title"><?php the_field("title") ?></h1>
          <p class="header-content__text">
            <?php the_field("text_on_main_page") ?>
          </p>
          <button class="header-content__button button">Contact us</button>
        </div>
      </div>
    </div>
  </header>
</body>

</html>