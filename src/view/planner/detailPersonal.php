<section class='planning planning--stap1'>
        <div class="information__wrapper">
            <h2><?php echo $workout['title'] ?></h2>
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
              <p class="exercise-amount"><?php if($template['sportief'] == 'Beginner') { ?> x10<?php }?>
              <?php if($template['sportief'] == 'Gemiddeld') { ?> x15<?php } if($template['sportief'] == 'Expert')  {?>x20 <?php }?> </p>
                </li>
              <?php endforeach;?>
            </ul>
            <div class="planning__wrapper">
                <a href="index.php?page=detail&id=<?php echo $workout['id'];?>?" class="button button-submit">Begin</a></div>
        </div>
    </section>