<?php>

//8 уровень заданий

function square_sum($numbers) : int {
    $sum=0;
    foreach($numbers as $num){
      $sum+=$num*$num;
    }
    return $sum;
}

function enough($cap, $on, $wait) {
  $available_space = $cap - $on; 
  if ($available_space >= $wait) {
      return 0;
  } else {
      return $wait - $available_space; }
}

function removeEveryOther($array) {
  $result = [];
  for ($i = 0; $i < count($array); $i++) {
      if ($i % 2 == 0) {
          $result[] = $array[$i];
      }
  }

  return $result;
}

//7 уровеь заданий

function multiples(int $m, float $n): array {
  $result = [];
  for ($i = 1; $i <= $m; $i++) {
      $result[] = $n * $i; 
  }
  return $result;
}

function disemvowel($string) {
  return preg_replace('/[aeiouAEIOU]/', '', $string);
}

function square_digits(int $num): int {
  $digits = str_split((string)$num);
  $result = '';

  foreach ($digits as $digit) {
      $result .= ($digit * $digit);
  }

  return (int)$result;
}

//6 уровень заданий

function expandedForm(num) {
  let [integerPart, fractionalPart] = num.toString().split('.');
  let result = [];

  integerPart.split('').forEach((digit, index) => {
    if (digit !== '0') {
      result.push(digit * Math.pow(10, integerPart.length - index - 1));
    }
  });

  if (fractionalPart) {
    fractionalPart.split('').forEach((digit, index) => {
      if (digit !== '0') {
        result.push(${digit}/${Math.pow(10, index + 1)});
      }
    });
  }

  return result.join(' + ');
}

function expanded_form(int $n): string {
  $digits = str_split((string)$n);
  $length = count($digits);
  $result = [];

  foreach ($digits as $index => $digit) {
      if ($digit != '0') {
          $result[] = $digit * pow(10, $length - $index - 1);
      }
  }

  return implode(' + ', $result);
}

function digitalRoot(n) {
  while (n >= 10) {
    n = n.toString().split('').reduce((sum, digit) => sum + parseInt(digit), 0);
  }
  return n;
}
