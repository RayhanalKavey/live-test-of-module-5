<?php
//Task-1: Create a PHP script using a loop to print all odd numbers between 1 and 10.
for ($i=0;  $i<=10 ; $i++) { 
  if($i % 2 != 0){
      echo "$i <br/>";
  }
};



//Task-2: Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

function greet(string $name) {
   echo $name;
}
greet( "Welcome to Ostad! <br/>");



//Task-3: Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

function factorial(int $number) {
   static $result;
   $result ??= 1;
   if($number > 1 ){
      $result *= $number;
      return factorial($number-1);
   }else{
      return $result;
   }
   ;
}
$number= 6;
echo "Factorial of {$number} is = ".factorial($number)."<br/>";


// Task-4: Write a PHP function named 'Fibonacci' that prints the Fibonacci series up to 12 numbers.
function Fibonacci($count=12){
  $old=0;
  $new=1;
   for ($i=0; $i < $count;$i++){
    echo "{$old} ";
      $_temp = $old + $new;
      $old = $new;
      $new = $_temp;
   }
}

Fibonacci(12); 