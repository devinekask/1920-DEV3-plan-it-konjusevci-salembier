<section class="planning">
<h2>Eigen planning</h2>
<div class="planning__wrapper">
<?php if(empty($workouts)){ ?>
    <p class="planning__emptystate">Maak je eigen planning aan de hand van jouw gegevens.</p>
    <a href="index.php?page=planner" class="button">Maak een planning</a>
<?php }else{ ?>
    <ul class="personal__plans">
    <?php foreach($workouts as $workout): ?>
        <li class="plan plan--personal">
            <p class="personalplan__name"><?php echo implode(', ',explode(',',$workout['exercises'])); ?></p>
            <div class="personalplan__wrapper">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.5 18C14.1944 18 18 14.1944 18 9.5C18 4.80558 14.1944 1 9.5 1C4.80558 1 1 4.80558 1 9.5C1 14.1944 4.80558 18 9.5 18Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9.5 4.40002V9.50002L12.9 11.2" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <p class="personalplan__text personalplan--days">Every <?php echo implode(', ',explode(',',$workout['days'])); ?></p>
            </div>
<div class="personalplan__wrapper">
    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M10.39 0H6.61286C6.0935 0 5.66857 0.428571 5.66857 0.952381C5.66857 1.47619 6.0935 1.90476 6.61286 1.90476H10.39C10.9094 1.90476 11.3343 1.47619 11.3343 0.952381C11.3343 0.428571 10.9094 0 10.39 0ZM8.50143 12.381C9.02079 12.381 9.44572 11.9524 9.44572 11.4286V7.61905C9.44572 7.09524 9.02079 6.66667 8.50143 6.66667C7.98207 6.66667 7.55714 7.09524 7.55714 7.61905V11.4286C7.55714 11.9524 7.98207 12.381 8.50143 12.381ZM15.1398 6.08571L15.848 5.37143C16.2068 5.00952 16.2162 4.40952 15.848 4.0381L15.8385 4.02857C15.4703 3.65714 14.8848 3.66667 14.5165 4.02857L13.8083 4.74286C12.3447 3.5619 10.5033 2.85714 8.50143 2.85714C3.96886 2.85714 0.116175 6.62857 0.00286106 11.2C-0.119896 16.0381 3.72335 20 8.50143 20C13.204 20 17 16.1619 17 11.4286C17 9.40952 16.3012 7.55238 15.1398 6.08571ZM8.50143 18.0952C4.84705 18.0952 1.89143 15.1143 1.89143 11.4286C1.89143 7.74286 4.84705 4.7619 8.50143 4.7619C12.1558 4.7619 15.1114 7.74286 15.1114 11.4286C15.1114 15.1143 12.1558 18.0952 8.50143 18.0952Z" fill="white"/>
    </svg>
    <p class="personalplan__text personalplan--time"><?php echo $workout['time']; ?></p>
    <svg class="personalplan__edit" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.75 1.75004C11.947 1.55306 12.1808 1.39681 12.4382 1.2902C12.6956 1.18359 12.9714 1.12872 13.25 1.12872C13.5286 1.12872 13.8044 1.18359 14.0618 1.2902C14.3192 1.39681 14.553 1.55306 14.75 1.75004C14.947 1.94703 15.1032 2.18088 15.2098 2.43825C15.3165 2.69562 15.3713 2.97147 15.3713 3.25004C15.3713 3.52862 15.3165 3.80447 15.2098 4.06184C15.1032 4.31921 14.947 4.55306 14.75 4.75004L4.625 14.875L0.5 16L1.625 11.875L11.75 1.75004Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


</div>
        </li>
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
