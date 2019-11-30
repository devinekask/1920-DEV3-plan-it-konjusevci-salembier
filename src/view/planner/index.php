<section class="planning">
<h2>Eigen planning</h2>
<div class="planning__wrapper">
<?php if(empty($workouts)){ ?>
    <p class="planning__emptystate">Maak je eigen planning aan de hand van jouw gegevens.</p>
    <a href="index.php?page=planner" class="button">Maak een planning</a>
<?php }else{ ?>
    <ul class="personal__plans">
    <?php foreach($workouts as $workout): ?>
        <li class="plan plan--personal"><a class="personalplan__link" href="">Bodybuilding</a></li>
    <?php endforeach; } ?>
    </ul>
</div>
</section>
<section class="templateplan">
<h2>Template plan</h2>
<ul>
<li class="plan plan--template"><a class="templateplan__link" href="">Bodybuilding</a></li>
<li class="plan plan--template"><a class="templateplan__link" href="">Bodybuilding</a></li>
<li class="plan plan--template"><a class="templateplan__link" href="">Bodybuilding</a></li>
</ul>
</section>
