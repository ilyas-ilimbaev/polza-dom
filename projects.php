<?php

include('config.php');

include('class/db.php');

$base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS);

$name_tag_null = false;

if (!isset($_GET['tag'])) {
  $name_tag_null = true;
} else {
  $tag = $_GET['tag'];
  $result = $base->query("SELECT * FROM `house_list` WHERE `name-tag` = '$tag'");
  if ($result) {
    $result = $result[0];
  } else {
    $name_tag_null = true;
  }
} ?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Строительство домов под ключ от строительной компании Польза-Дом</title>
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/swiper-bundle/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <?php
      include ('blocks/header.php');
  ?>
  <section class="project">
    <div class="project-wrapper">
      <?php

      if ($name_tag_null) {
      ?>

        <div class="project-main-info">
          <div class="project__basic-info" style="padding-bottom: 50px;">
            <h3 class="project__title">Произошла ошибка</h3>
            <p>Вы ошиблись в ссылке или данный дом больше не продаётся.</p>
            <a href="../catalog.html" style="color: blue; text-decoration: underline;">Весь каталог</a>


          </div>
        </div>

      <?php
      } else {
      ?>
        <div class="project-main-info">
          <div class="project__basic-info">
            <h3 class="project__title">
              Дом
              <?php echo $result['square']; ?>
              кв.м.
            </h3>
            <div class="project__card-wrapper">
              <div class="project__card">
                <img src="../img/lounge.png" alt="гостинная" class="project__card-icon" />
                <span class="project__card-text"><?php echo $result['quantity-parlor']; ?>
                  гостинная</span><span class="project__card-text"><?php echo $result['square-parlor']; ?>
                  кв.м</span>
              </div>
              <div class="project__card">
                <img src="../img/kitchen.png" alt="кухня" class="project__card-icon" />
                <span class="project__card-text"><?php echo $result['quantity-kitchen']; ?>
                  кухня</span><span class="project__card-text"><?php echo $result['square-kitchen']; ?>
                  кв.м</span>
              </div>
              <div class="project__card">
                <img src="../img/ladder.png" alt="этаж" class="project__card-icon" />
                <span class="basic-info__card-text"><?php echo $result['quantity-storey']; ?>
                  этажа</span>
              </div>
              <div class="project__card">
                <img src="../img/bathroom.png" alt="санузел" class="project__card-icon" />
                <span class="project__card-text"><?php echo $result['quantity-lavatory']; ?>
                  санузел</span><span class="project__card-text"><?php echo $result['square-lavatory']; ?>
                  кв.м</span>
              </div>
              <div class="project__card">
                <img src="../img/bedroom.png" alt="спальня" class="project__card-icon" />
                <span class="project__card-text"><?php echo $result['quantity-bedroom']; ?>
                  спальни</span><span class="project__card-text"><?php echo $result['square-bedroom']; ?>
                  кв.м</span>
              </div>
            </div>
            <div class="project__card-price">
              <?php
              $reverse = strrev($result['cost']);
              $cost = strrev(chunk_split($reverse, 3, ' '));
              echo $cost; ?>
              РУБ.
            </div>
          </div>
          <img src="<?php echo $result['img']; ?>" alt="Дом <?php echo $result['square']; ?> кв.м." class="project-img" />
        </div>
        <div class="project-main-desc">
          <div class="project__title black-color">Описание</div>
          <p class="project__card-text black-color">
            <?php echo $result['description']; ?>
          </p>
          <a href="" class="header-calc-link" data-name-tag="<?php if (!$name_tag_null) echo $result['name-tag']; ?>">Рассчитать стоимость</a>
        </div>
      <?php } ?>
    </div>
  </section>
  <section class="help-question">
    <div class="help-question-wrapper">
      <div class="help-question__left-img-wrapper">
        <img src="/img/section-helpQuestion.png" alt="" class="help-question__left-img" />
      </div>
      <div class="help-question__right-desc__wrapper">
        <div class="help-question__right-desc">
          <h3 class="newsletter-title help-question-title">У вас остались вопросы?</h3>
          <p class="newsletter-text help-question-text">
            Закажите бесплатную консультацию у нашего специалиста по любым вопросам
          </p>
          <form action="" class="newsletter-form">
            <div class="newsletter-form__item">
              <input type="tel" required="" name="number" maxlength="12" placeholder="Введите номер телефона" class="newsletter-form__input" />
              <button class="newsletter-form__submit">ОТПРАВИТЬ</button>
            </div>
            <p class="newsletter-form__text">
              Нажимая кнопку “Отправить заявку” вы принимаете условия обработки данных
            </p>
          </form>
        </div>
        <img src="/img/stroitel.png" alt="бесплатная консультация" class="help-question__right-img" />
      </div>
    </div>
  </section>
  <?php
      include ('blocks/popups.php');
  ?>
  <script src="/libs/swiper-bundle/swiper-bundle.min.js"></script>
  <script src="/libs/jquery.validate/jquery.validate.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>