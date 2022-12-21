<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/style.min.css?_v=20221220120729">
  <?php wp_head();?>
</head>

<body>
  <div class="wrapper">
    <header class="header" data-aos="fade-down">
      <div class="header__container"><a href="<?php echo get_home_url(); ?>" class="header__logo logo">Orkhan Khalaf</a>
        <nav class="header__menu menu">
          <ul class="menu__list">
            <li class="menu__item"><a href="<?php echo home_url( 'blog' ); ?>" class="menu__link">Blog</a></li>
            <li class="menu__item"><a href="#" class="menu__link btn open__modal">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="page">
      <div data-observ></div>