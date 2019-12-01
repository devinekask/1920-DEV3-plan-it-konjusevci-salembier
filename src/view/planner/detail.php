<section class='planning planning--stap1'>
    <div class="information__wrapper">
        <h2><?php echo $workout['title'] ?></h2>
        <div class="personal__workout hidden">
            <div class="personal">
                <div class="personal__days">
                    <p>days completed <br> <span class="personal__numbers days">1 / 3</span></p>
                </div>
            </div>
            <div class="time">
                <div class="personal-time">
                    <br>
                    <p>time <span class="personal__time">30mins</span></p>
                </div>
            </div>
        </div>
        <div class="template">
            <div class="template__wrapper">
                <p class="information-template--workout">?</p>
                <div class="template--diffuclty">
                    <span>Diffuclty</span>
                    <?php if($template['sportief'] == 'Beginner') { ?>
                    <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty"></div>
                    <div class="diffuclty"></div>
                    <?php } elseif($template['sportief'] == 'Gemiddeld'){ ?>
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
    <div class="information-js hidden"><?php echo $template['info']; ?></div>
    <div class="exercises">
        <ul class="excersise-list">
          <?php foreach($excersises as $excersise): ?>
            <li class="exersise">
                <img class="exercise-img" src="<?php echo $excersise['icon'] ?>" alt="<?php echo $excersise['info'] ?>">
                <p class="exercise-name"><?php echo $excersise['info'] ?></p>
                <p class="exercise-amount">x10</p>
            </li>
          <?php endforeach;?>
        </ul>
        <div class="planning__wrapper">
            <a href="index.php?page=detail&id=<?php echo $workout['id'];?>?" class="button button-submit">Begin</a></div>
    </div>
</section>

<section class="planning planning--stap2">
    <div class="information__wrapper">
        <h2><?php echo $workout['title'] ?></h2>
        <div class="personal__workout hidden">
            <div class="personal">
                <div class="personal__days">
                    <p>days completed <br> <span class="personal__numbers days">1 / 3</span></p>
                </div>
            </div>
            <div class="time">
                <div class="personal-time">
                    <br>
                    <p>time <span class="personal__time">30mins</span></p>
                </div>
            </div>
        </div>
        <div class="template">
            <div class="template__wrapper">
                <p class="information-template--workout">?</p>
                <div class="template--diffuclty">
                    <span>Diffuclty</span>
                    <?php if($template['sportief'] == 'Beginner') { ?>
                    <div class="diffuclty diffuclty--active"></div>
                    <div class="diffuclty"></div>
                    <div class="diffuclty"></div>
                    <?php } elseif($template['sportief'] == 'Gemiddeld'){ ?>
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
    <div class="information-js hidden"><?php echo $template['info']; ?></div>
    <div class="extended__information">
        <span class="excersices-left">1/10</span>
        <a class="exit" href="index.php">+</a>
    </div>
    <div class="planning__wrapper">
        <img class="excerscie-img" src="<?php echo $excersise['iconbig'] ?>" alt="plank" width="186">
        <span class="excersice-name">Excersice name</span>
        <span class="excersice-todo">x10</span>
        <a href="index.php?page=detail" class="button button-submit">Next</a></div>
    </div>
</section>
