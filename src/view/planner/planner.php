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
          <input id="legday" name="workouts[]" value="leg day" type="checkbox" class="checkbox__button">
          <label for='legday'>Leg day</label>
          <input id="cardio" name="workouts[]" value="cardio" type="checkbox" class="checkbox__button">
          <label for='cardio'>Cardio</label>
          <input id="bench" name="workouts[]" value="bench" type="checkbox" class="checkbox__button">
          <label for='bench'>Bench</label>
          <input id="swole" name="workouts[]" value="swole" type="checkbox" class="checkbox__button">
          <label for='swole'>swole</label>
          <input id="bulking" name="workouts[]" value="bulking" type="checkbox" class="checkbox__button">
          <label for='bulking'>bulking</label>
          <input id="form" name="workouts[]" value="form" type="checkbox" class="checkbox__button">
          <label for='form'>form</label>
          <input id="plank" name="workouts[]" value="plank" type="checkbox" class="checkbox__button">
          <label for='plank'>plank</label>
          <input id="plateau" name="workouts[]" value="plateau" type="checkbox" class="checkbox__button">
          <label for='plateau'>plateau</label>
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
        <div class="input__wrapper doing__wrapper">
          <span>wil ik doen</span>
          <input checked id='running' type="checkbox" class="checkbox__button">
          <label class="doing" for="running">running</label>
          <input checked id='cardio1' type="checkbox" class="checkbox__button">
          <label class="doing" for="cardio1">cardio</label>
          <input checked id='swimming' type="checkbox" class="checkbox__button">
          <label class="doing" for="swimming">swimming</label>
          <input checked id='walking' type="checkbox" class="checkbox__button">
          <label class="doing" for="walking">walking</label>
        </div>
        <div class="input__wrapper not__doing">
          <span class="notdoing">Doe ik niet</span>
          <input id='biking' type="checkbox" class="checkbox__button">
          <label for="biking">biking</label>
          <input id='hardrunning' type="checkbox" class="checkbox__button">
          <label for="hardrunning">hardrunning</label>
          <input id='paddeling' type="checkbox" class="checkbox__button">
          <label for="paddeling">paddeling</label>
          <input id='surfing' type="checkbox" class="checkbox__button">
          <label for="surfing">surfing</label>
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
