<?php 
  //Declaring a constant for tax rate
  define("TAX_RATE", 0.1805);
  //Declaring other variables and converting the strings from the form to floats
  $hours = floatval($_POST["hours-worked"]);
  $rate = floatval($_POST["hourly-rate"]);
  $total = $hours * $rate;
  //number_format($number, $numberOfDecimals) rounds off decimals
  $tax = number_format($total * TAX_RATE, 2);
  $pay = number_format($total - $tax, 2);
?>

The amount of money you will make is $<?php echo "$pay" ?>. <br>The amount of money the government will make through taxes is $<?php echo "$tax" ?>.