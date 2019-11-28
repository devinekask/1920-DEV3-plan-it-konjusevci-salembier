<section class="planning">
<div class="planning__wrapper">
<ul class="steps">
<li class="step step--active"><a class="step__link step__link--active" href="index.php?page=planner">1</a></li>
<li class="step step--active"><a class="step__link step__link--active" href="index.php?page=plannerstep2">2</a></li>
<li class="step"><a class="step__link" href="index.php?page=plannerstep3">3</a></li>
</ul>
<h2 class='hidden'>Planning</h2>
<form action="index.php?page=plannerstep3" method="post">
<div class="input__wrapper">
<span class="subtitle__input2">How long will this session take?</span>
<div class="input__wrapper--step2">
    <input name="time" value="00:30:00" maxlength="8" class="input__step2">
</div>
</div>
<div class="input__wrapper">
<span class="subtitle__input2">How much do you weigh?</span>
<div class="input__wrapper--step2">
    <input size="3" value="65" maxlength="3" type="weight" class="input__step2">
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
</form>
</div>
</section>
