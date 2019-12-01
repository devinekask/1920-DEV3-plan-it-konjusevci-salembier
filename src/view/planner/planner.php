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
        <span>Choose a workout</span>
        <div class="checkbox__wrapper">
          <input id="legday" name="exercises[]" value="leg day" type="checkbox" class="checkbox__button">
          <label for='legday'>Leg day</label>
          <input id="cardio" name="exercises[]" value="cardio" type="checkbox" class="checkbox__button">
          <label for='cardio'>Cardio</label>
          <input id="bench" name="exercises[]" value="bench" type="checkbox" class="checkbox__button">
          <label for='bench'>Bench</label>
          <input id="swole" name="exercises[]" value="swole" type="checkbox" class="checkbox__button">
          <label for='swole'>swole</label>
          <input id="bulking" name="exercises[]" value="bulking" type="checkbox" class="checkbox__button">
          <label for='bulking'>bulking</label>
          <input id="form" name="exercises[]" value="form" type="checkbox" class="checkbox__button">
          <label for='form'>form</label>
          <input id="plank" name="exercises[]" value="plank" type="checkbox" class="checkbox__button">
          <label for='plank'>plank</label>
          <input id="plateau" name="exercises[]" value="plateau" type="checkbox" class="checkbox__button">
          <label for='plateau'>plateau</label>
        </div>
      </div>
      <div class="input__wrapper">
        <span>Choose the days</span>
        <div class="checkbox__wrapper">
          <input id="mon" name="days[]" value="monday" type="checkbox" class="checkbox__button">
          <label for='mon'>mon.</label>
          <input id="tues" name="days[]" value="tuesday" type="checkbox" class="checkbox__button">
          <label for='tues'>tues.</label>
          <input id="wens" name="days[]" value="wednesday" type="checkbox" class="checkbox__button">
          <label for='wens'>wednes.</label>
          <input id="thurs" name="days[]" value="thursday" type="checkbox" class="checkbox__button">
          <label for='thurs'>thurs.</label>
          <input id="fri" name="days[]" value="friday" type="checkbox" class="checkbox__button">
          <label for='fri'>fri.</label>
          <input id="satur" name="days[]" value="satruday" type="checkbox" class="checkbox__button">
          <label for='satur'>satur.</label>
          <input id="sun" name="days[]" value="sunday" type="checkbox" class="checkbox__button">
          <label for='sun'>sun.</label>
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
        <span class="subtitle__input2">How long will this session take?</span>
        <div class="input__wrapper--step2">
          <input name="time" value="00:30:00" maxlength="8" class="input__step2">
        </div>
      </div>
      <div class="input__wrapper">
        <span class="subtitle__input2">How much do you weigh?</span>
        <div class="input__wrapper--step2">
          <input size="3" name="weight" value="65" maxlength="3" class="input__step2">
          <p class="input__step2 input__step2--extra">KG</p>
        </div>
      </div>
      <div class="input__wrapper">
        <span class="subtitle__input2">How tall are you?</span>
        <div class="input__wrapper--step2">
          <input size="4" name="height" value="1,70" maxlength="4" class="input__step2">
          <p class="input__step2 input__step2--extra">M</p>
        </div>
      </div>
      <div class="input__wrapper">
        <span class="subtitle__input2">What's your age?</span>
        <div class="input__wrapper--step2">
          <input size="3" name="age" value="19" maxlength="3" class="input__step2">
          <p class="input__step2 input__step2--extra">Y/O</p>
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
      <h2 class="planner__title">LIST OF EXERCISES</h2>
      <div class="exercises__wrapper">
        <div class="input__wrapper doing__wrapper">
          <span>want to do</span>
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
          <span class="notdoing">not doing</span>
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
        <span class="difficulty">CHOOSE YOUR DIFFICULTY</span>
        <div class="radio__wrapper">
          <input type="radio" name="sporty" value="easy" id="easy">
          <label class="radio__button" for="easy">easy</label>
          <input type="radio" name="sporty" value="intermediate" id="intermediate">
          <label class="radio__button" for="intermediate">intermediate</label>
          <input type="radio" name="sporty" value="hard" id="hard">
          <label class="radio__button" for="hard">hard</label>
        </div>
      </div>
      <input type="hidden" name="action" value="insert">
      <div class="planning__wrapper"><input type="submit" value="Lets get them gainz" class='button button-submit'></div>
      </div>
    </div>
  </section>
</form>