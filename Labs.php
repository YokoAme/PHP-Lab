<?php>
//8 уровень заданий

// Square(n) Sum
function square_sum($numbers) : int {
    $sum=0;
    foreach($numbers as $num){
      $sum+=$num*$num;
    }
    return $sum;
}
