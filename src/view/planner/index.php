<section class="planning">
    <h2>Eigen planning</h2>
    <div class="planning__wrapper">
        <?php if(empty($workouts)){ ?>
        <p class="planning__emptystate">Maak je eigen planning aan de hand van jouw gegevens.</p>
        <?php }else{ ?>
        <ul class="personal__plans">
            <?php foreach($workouts as $workout): ?>
            <li class="plan plan--personal">
                <div class="personalplan__wrapper">
                    <p class="personalplan__name"><?php echo implode(', ',explode(',',$workout['exercises'])); ?></p>
                    <form action="index.php" method="POST" class="personalplan__edit">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?php echo $workout['id']; ?>">
                        <button class="personalplan__edit--button" type="submit">
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <line x1="2.70711" y1="1.29289" x2="16.7071" y2="15.2929" stroke="white"
                                    stroke-width="2" />
                                <line y1="-1" x2="19.799" y2="-1"
                                    transform="matrix(-0.707107 0.707107 0.707107 0.707107 16 2)" stroke="white"
                                    stroke-width="2" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="personalplan__wrapper">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.5 18C14.1944 18 18 14.1944 18 9.5C18 4.80558 14.1944 1 9.5 1C4.80558 1 1 4.80558 1 9.5C1 14.1944 4.80558 18 9.5 18Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.5 4.40002V9.50002L12.9 11.2" stroke="white" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="personalplan__text personalplan--days">Every
                        <?php echo implode(', ',explode(',',$workout['days'])); ?></p>
                </div>
                <div class="personalplan__wrapper">
                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.39 0H6.61286C6.0935 0 5.66857 0.428571 5.66857 0.952381C5.66857 1.47619 6.0935 1.90476 6.61286 1.90476H10.39C10.9094 1.90476 11.3343 1.47619 11.3343 0.952381C11.3343 0.428571 10.9094 0 10.39 0ZM8.50143 12.381C9.02079 12.381 9.44572 11.9524 9.44572 11.4286V7.61905C9.44572 7.09524 9.02079 6.66667 8.50143 6.66667C7.98207 6.66667 7.55714 7.09524 7.55714 7.61905V11.4286C7.55714 11.9524 7.98207 12.381 8.50143 12.381ZM15.1398 6.08571L15.848 5.37143C16.2068 5.00952 16.2162 4.40952 15.848 4.0381L15.8385 4.02857C15.4703 3.65714 14.8848 3.66667 14.5165 4.02857L13.8083 4.74286C12.3447 3.5619 10.5033 2.85714 8.50143 2.85714C3.96886 2.85714 0.116175 6.62857 0.00286106 11.2C-0.119896 16.0381 3.72335 20 8.50143 20C13.204 20 17 16.1619 17 11.4286C17 9.40952 16.3012 7.55238 15.1398 6.08571ZM8.50143 18.0952C4.84705 18.0952 1.89143 15.1143 1.89143 11.4286C1.89143 7.74286 4.84705 4.7619 8.50143 4.7619C12.1558 4.7619 15.1114 7.74286 15.1114 11.4286C15.1114 15.1143 12.1558 18.0952 8.50143 18.0952Z"
                            fill="white" />
                    </svg>
                    <p class="personalplan__text personalplan--time"><?php echo $workout['time']; ?></p>
                    <form action="index.php" method="GET" class="personalplan__edit">
                        <button class="personalplan__edit--button" type="submit">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1667 2.16674C14.3855 1.94787 14.6454 1.77425 14.9313 1.6558C15.2173 1.53735 15.5238 1.47638 15.8333 1.47638C16.1429 1.47638 16.4493 1.53735 16.7353 1.6558C17.0213 1.77425 17.2811 1.94787 17.5 2.16674C17.7189 2.38561 17.8925 2.64544 18.0109 2.93141C18.1294 3.21738 18.1903 3.52387 18.1903 3.8334C18.1903 4.14293 18.1294 4.44943 18.0109 4.7354C17.8925 5.02136 17.7189 5.2812 17.5 5.50007L6.24999 16.7501L1.66666 18.0001L2.91666 13.4167L14.1667 2.16674Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </div>
            </li>
            <?php endforeach; } ?>
        </ul>
        <a href="index.php?page=planner" class="button">Maak een planning</a>
    </div>
</section>
<section class="templateplan">
    <h2>Template plan</h2>
    <ul>
    <li class="template"><img class="template__img" src="../assets/img/bodymass.png" alt=""><a class="templateplan__link" href="index.php?page=detail">
Bodybuilding</a></li>
      <?php foreach($templateworkouts as $templateworkout): ?>
      <?php endforeach;?>
    </ul>
</section>
