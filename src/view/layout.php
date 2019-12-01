<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Plan je eigen workouts" />
  <meta name="author" content="Devine" />
  <meta name="keywords" content="workout, planning, exercises, sport" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Workout planner - <?php echo $title; ?></title>
  <?php echo $css;?>
</head>

<body>
  <header class="header">
    <div class="header__top">
      <h1>
        <?php echo $title; ?></h1>
    </div>
    <div class="header__bot">
      <div class="header__info">
        <p class="info__amount">12</p>
        <p class="info__description">workouts</p>
      </div>
      <div class="header__info">
        <p class="info__amount">6455</p>
        <p class="info__description">kcal</p>
      </div>
      <div class="header__info">
        <p class="info__amount">10</p>
        <p class="info__description">dagen</p>
      </div>
    </div>
  </header>
  <main>
    <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
    <?php echo $content;?>
  </main>
  <footer class="footer">
    <div class="footer__item">
      <a href='index.php' class="footer__text">
        <svg width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M5.25 15.375L21 3.41666L36.75 15.375V34.1667C36.75 35.0728 36.3813 35.9419 35.7249 36.5826C35.0685 37.2234 34.1783 37.5833 33.25 37.5833H8.75C7.82174 37.5833 6.9315 37.2234 6.27513 36.5826C5.61875 35.9419 5.25 35.0728 5.25 34.1667V15.375Z"
            stroke="#C1BFBF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M15.75 37.5833V20.5H26.25V37.5833" stroke="#C1BFBF" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg> <br>
        Home </a>
    </div>
    <div class="footer__item">
      <a class="planning__wrapper" href="index.php?page=planner">
      <svg width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M33.4167 6.83334H9.50001C7.61304 6.83334 6.08334 8.36304 6.08334 10.25V34.1667C6.08334 36.0537 7.61304 37.5833 9.50001 37.5833H33.4167C35.3036 37.5833 36.8333 36.0537 36.8333 34.1667V10.25C36.8333 8.36304 35.3036 6.83334 33.4167 6.83334Z"
          stroke="#C1BFBF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M28.2917 3.41666V10.25" stroke="#C1BFBF" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" />
        <path d="M14.625 3.41666V10.25" stroke="#C1BFBF" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" />
        <path d="M6.08334 17.0833H36.8333" stroke="#C1BFBF" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
      <p class="footer__text"> Add a planner</p>
    </div></a>
  </footer>
  <?php echo $js; ?>
</body>

</html>
