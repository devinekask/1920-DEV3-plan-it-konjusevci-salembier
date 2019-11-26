<section class="planning">
<div class="planning__wrapper">
<ul class="steps">
<li class="step step--active"><a class="step__link step__link--active" href="index.php?page=planner">1</a></li>
<li class="step step--active"><a class="step__link step__link--active" href="index.php?page=plannerstep2">2</a></li>
<li class="step step--active"><a class="step__link step__link--active" href="index.php?page=plannerstep3">3</a></li>
</ul>
<h2 class="planner__title">LIST OF EXERCISES</h2>
<form action="index.php" method="get">
<div class="exercises__wrapper">
<div class="input__wrapper doing__wrapper">
  <span>want to do</span>
  <input checked id='running' type="checkbox" class="checkbox__button">
  <label for="running">running</label>
  <input checked id='cardio' type="checkbox" class="checkbox__button">
  <label for="cardio">cardio</label>
  <input checked id='swimming' type="checkbox" class="checkbox__button">
  <label for="swimming">swimming</label>
  <input checked id='walking' type="checkbox" class="checkbox__button">
  <label for="walking">walking</label>
</div>
<div class="input__wrapper not__doing">
  <span>dont want to do</span>
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
<div class="input__wrapper sporty__wrapper">
  <span>CHOOSE YOUR DIFFICULTY</span>
  <input type="radio" name="sporty" value="easy" id="easy">
  <label for="easy">easy</label>
  <input type="radio" name="sporty" value="intermediate" id="intermediate">
  <label for="intermediate">intermediate</label>
  <input type="radio" name="sporty" value="hard" id="hard">
  <label for="hard">hard</label>
</div>
</form>
</div>
</section>
