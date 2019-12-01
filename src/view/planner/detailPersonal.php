<section class='planning planning--stap1'>
        <div class="information__wrapper">
            <h2><?php echo $workout['workouts'] ?></h2>
            <div class="templates">
                <div class="template__wrapper">
                    <div class="template--diffuclty">
                        <span>Diffuclty</span>
                        <?php if($workout['sporty'] == 'easy') { ?>
                        <div class="diffuclty diffuclty--active"></div>
                        <div class="diffuclty"></div>
                        <div class="diffuclty"></div>
                        <?php } elseif($workout['sporty'] == 'intermediate'){ ?>
                          <div class="diffuclty diffuclty--active"></div>
                        <div class="diffuclty diffuclty--active"></div>
                        <div class="diffuclty"></div>
                        <?php } else { ?>
                          <div class="diffuclty diffuclty--active"></div>
                        <div class="diffuclty diffuclty--active"></div>
                        <div class="diffuclty diffuclty--active"></div>
                          <?php };?>
                    </div>
                </div>
            </div>
        </div>
        <div class="exercises">
            <ul class="excersise-list">
              <?php foreach($excersises as $excersise): ?>
                <li class="exersise">
                    <img class="exercise-img" src="<?php echo $excersise['icon'] ?>" alt="<?php echo $excersise['info'] ?>">
                    <p class="exercise-name"><?php echo $excersise['info'] ?></p>
              <p class="exercise-amount"><?php if($workout['sporty'] == 'easy') { ?> x10<?php }?>
              <?php if($workout['sporty'] == 'intermediate') { ?> x15<?php } if($workout['sporty'] == 'hard')  {?>x20 <?php }?> </p>
                </li>
              <?php endforeach;?>
            </ul>
            <div class="planning__wrapper">
                <a href="index.php?page=detail&id=<?php echo $workout['id'];?>?" class="button button-submit">Begin</a></div>
        </div>
    </section>

    <?php
$counter = 1;
foreach($excersises as $excersise): ?>
<section class="planning planning--detail">
    <div class="information__wrapper">
        <h2><?php echo $workout['workouts'] ?></h2>
        <div class="templates">
            <div class="template__wrapper">
                <div class="template--diffuclty">
                    <span>Diffuclty</span>
                    <?php if($workout['sporty'] == 'easy') { ?>
                    <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty"></div>
                    <div class="diffuclty"></div>
                    <?php } elseif($workout['sporty'] == 'intermediate'){ ?>
                      <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty"></div>
                    <?php } else { ?>
                      <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty diffuclty--active"></div>
                      <?php };?>
                </div>
            </div>
        </div>
    </div>
    <div class="extended__information">
        <span class="excersices-left"><?php echo $counter; ?>/<?php echo count($excersises) ?></span>
        <a class="exit" href="index.php">+</a>
    </div>
    <div class="planning__wrapper">
        <img class="excerscie-img" src="<?php echo $excersise['iconbig'] ?>" alt="plank" width="186">
        <span class="excersice-name"><?php echo $excersise['info']?></span>
        <span class="excersice-todo"><?php if($workout['sporty'] == 'easy') { ?> x10<?php }?>
          <?php if($workout['sporty'] == 'intermediate') { ?> x15<?php } if($workout['sporty'] == 'hard')  {?>x20 <?php }?></span>
        <a href="index.php?page=detail" class="button button-submit button--detail"><?php if($excersises[count($excersises)-1] == $excersise){ echo 'Finish'; }else{ echo 'Next'; } ?></a></div>
    </div>
</section>
<?php
$counter++;
 endforeach;?>
