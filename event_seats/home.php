<?php
require './header.php' ?>

<div class ="row mt-5">
<?php //for($i=1 ; $i<40 ; $i++){
 //create_seats($i);
//} 
foreach (get_all_seats() as $seat):?>
<?php if($seat->available){?>
<a href="./auth/choose_seat.php?id=<?=$seat->id?>" class="col-3 seats d-flex justify-content-center align-items-center <?= $seat->available? 'available':'unavailable'?> ">
<div><?= $seat->seat_number?></div>
</a>
<?php }else{
    if ($_SESSION['user']['id'] == $seat->id){?>
        <a href="./auth/choose_seat.php?id=<?=$seat->id?>" class="col-3 seats d-flex justify-content-center align-items-center <?= $seat->available? 'available':'unavailable'?> ">
        <div><?= $seat->seat_number?></div>
        </a>
    <?php }else{?>
        <div class="col-3 seats d-flex justify-content-center align-items-center <?= $seat->available? 'available':'unavailable'?> ">
        <div><?= $seat->seat_number?></div>
    </div>
    <?php }
}?>
<?php endforeach; ?>
</div>


<?php require './footer.php' ?>