<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Workout planner - <?php echo $title; ?></title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
  </head>
  <body>
    <main>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      <header><h1><?php echo $title; ?></h1>
      <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="19" height="2" rx="1" fill="white"/>
<rect y="5" width="19" height="2" rx="1" fill="white"/>
<rect y="10" width="19" height="2" rx="1" fill="white"/>
</svg>

      </header>
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
