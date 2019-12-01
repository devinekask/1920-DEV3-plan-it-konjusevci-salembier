<form action="index.php" method="post">
  <section class="planning planning--stap1">
    <div class="planning__wrapper">
      <ul class="steps">
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap1" href="">1</a></li>
        <li class="step"><a class="step__link" data-planner-class="planning planning--stap2" href="">2</a></li>
        <li class="step"><a class="step__link" data-planner-class="planning planning--stap3" href="">3</a></li>
        <li class="step"><a class="step__link" data-planner-class="planning planning--stap4" href="">4</a></li>
      </ul>
      <h2 class='hidden'>Planning</h2>
      <div class="input__wrapper">
        <span>Kies een workout</span>
        <div class="checkbox__wrapper">
          <?php foreach($workouts as $workout): ?>
          <input id="<?php echo $workout['title']; ?>" name="workouts" value="<?php echo $workout['id']; ?>" type="radio" class="checkbox__button workout">
          <label for='<?php echo $workout['title']; ?>'><?php echo $workout['title']; ?></label>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="input__wrapper">
        <span>Kies de dagen</span>
        <div class="checkbox__wrapper">
          <input id="mon" name="days[]" value="monday" type="checkbox" class="checkbox__button">
          <label for='mon'>maan.</label>
          <input id="tues" name="days[]" value="tuesday" type="checkbox" class="checkbox__button">
          <label for='tues'>dins.</label>
          <input id="wens" name="days[]" value="wednesday" type="checkbox" class="checkbox__button">
          <label for='wens'>woens.</label>
          <input id="thurs" name="days[]" value="thursday" type="checkbox" class="checkbox__button">
          <label for='thurs'>donder.</label>
          <input id="fri" name="days[]" value="friday" type="checkbox" class="checkbox__button">
          <label for='fri'>vrij.</label>
          <input id="satur" name="days[]" value="satruday" type="checkbox" class="checkbox__button">
          <label for='satur'>zater.</label>
          <input id="sun" name="days[]" value="sunday" type="checkbox" class="checkbox__button">
          <label for='sun'>zon.</label>
        </div>
      </div>
      <div class="planning__wrapper"><input type="submit" value="Next step" class='button button-submit'></div>
    </div>
  </section>

  <section class="planning planning--stap2">
    <div class="planning__wrapper">
      <ul class="steps">
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap1" href="">1</a></li>
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap2" href="">2</a></li>
        <li class="step"><a class="step__link" data-planner-class="planning planning--stap3" href="">3</a></li>
        <li class="step"><a class="step__link" data-planner-class="planning planning--stap4" href="">4</a></li>
      </ul>
      <h2 class='hidden'>Planning</h2>
      <div class="input__wrapper">
        <span class="subtitle__input2">Hoe lang wil dat de workout duurdt?</span>
        <div class="input__wrapper--step2">
          <input name="time" value="30" maxlength="3" size="3" readonly class="input__step2">
          <p class="input__step2 input__step2--extra">Minuten</p>
        </div>
        <div class="slider__wrapper">
          <input type="range" min="15" max="180" value="30" class="slider" id="time">
        </div>
      </div>
      <div class="input__wrapper">
        <span class="subtitle__input2">Hoeveel weeg je?</span>
        <div class="input__wrapper--step2">
          <input size="3" name="weight" value="65" maxlength="3" readonly class="input__step2">
          <p class="input__step2 input__step2--extra">KG</p>
        </div>
        <div class="slider__wrapper">
          <input type="range" min="30" max="150" value="65" class="slider" id="weight">
        </div>
      </div>
      <div class="input__wrapper">
        <span class="subtitle__input2">Hoe groot ben je?</span>
        <div class="input__wrapper--step2">
          <input size="3" name="height" value="170" maxlength="3" readonly class="input__step2">
          <p class="input__step2 input__step2--extra">CM</p>
        </div>
        <div class="slider__wrapper">
          <input type="range" min="100" max="240" value="170" class="slider" id="height">
        </div>
      </div>
      <div class="input__wrapper">
        <span class="subtitle__input2">Wat is je leeftijd?</span>
        <div class="input__wrapper--step2">
          <input size="2" name="age" value="19" maxlength="2" readonly class="input__step2">
          <p class="input__step2 input__step2--extra">J/O</p>
        </div>
        <div class="slider__wrapper">
          <input type="range" min="15" max="75" value="19" class="slider" id="age">
        </div>
      </div>
      <div class="planning__wrapper"><input type="submit" value="Next step" class='button button-submit'></div>
    </div>
  </section>

  </section>
  <section class="planning planning--stap3">
    <div class="planning__wrapper exercise">
      <ul class="steps">
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap1" href="">1</a></li>
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap2" href="">2</a></li>
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap3" href="">3</a></li>
        <li class="step"><a class="step__link" data-planner-class="planning planning--stap4" href="">4</a></li>
      </ul>
      <h2 class="planner__title">lijst van oefeningen</h2>
      <div class="exercises__wrapper">
        <div class="input__wrapper">
          <span>wil ik doen</span>
          <div class="doing__wrapper">
            <label class="doing" for="running"> running
              <input checked id='running' type="checkbox" class="doing checkbox__button">
            </label>
            <label class="doing" for="cardio1">cardio
              <input checked id='cardio1' type="checkbox" class="doing checkbox__button">
            </label>
            <label class="doing" for="swimming">swimming
              <input checked id='swimming' type="checkbox" class="doing checkbox__button">
            </label>
            <label class="doing" for="walking">walking
              <input checked id='walking' type="checkbox" class="doing checkbox__button">
            </label>
          </div>
        </div>
        <div class="input__wrapper">
          <span class="notdoing">Doe ik niet</span>
          <div class="not__doing">
            <label for="biking" class="doing">biking
              <input id='biking' type="checkbox" class="doing checkbox__button">
            </label>
            <label for="hardrunning" class="doing">hardrunning
              <input id='hardrunning' type="checkbox" class="doing checkbox__button">
            </label>
            <label for="paddeling" class="doing">paddeling
              <input id='paddeling' type="checkbox" class="doing checkbox__button">
            </label>
            <label for="surfing" class="doing">surfing
              <input id='surfing' type="checkbox" class="doing checkbox__button">
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="planning__wrapper"><input type="submit" value="Next step" class='button button-submit'></div>
    </div>
  </section>

  <section class="planning planning--stap4">
    <div class="planning__wrapper">
      <ul class="steps">
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap1" href="">1</a></li>
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap2" href="">2</a></li>
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap3" href="">3</a></li>
        <li class="step step--active"><a class="step__link step__link--active"
            data-planner-class="planning planning--stap4" href="">4</a></li>
      </ul>
      <div class="input__wrapper sporty__wrapper">
        <span class="difficulty">KIES JE MOEILIJKHEIDSGRAAD</span>
        <div class="radio__wrapper">
          <input type="radio" name="sporty" value="easy" id="easy" checked>
          <label class="radio__button" for="easy">Makkelijk</label>
          <input type="radio" name="sporty" value="intermediate" id="intermediate">
          <label class="radio__button" for="intermediate">Gemiddeld</label>
          <input type="radio" name="sporty" value="hard" id="hard">
          <label class="radio__button" for="hard">Expert</label>
        </div>
      </div>
      <input type="hidden" name="action" value="insert">
      <div class="planning__wrapper"><input type="submit" value="Lets get them gainz" class='button button-submit'>
      </div>
    </div>
    </div>
  </section>
</form>