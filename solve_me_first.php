
<?php

solve_me_first_function();
read_input_and_write_output();
data_types_function();
sum_arrays_fucntion();

function solve_me_first_function(){
$handle = fopen ("php://stdin","r");
print ("enter two number to perform addition....\n");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
printf("%d plus %d equals %d\n", $_a, $_b, $sum); 
fclose($handle);
}

function solveMeFirst($a,$b){
  // Hint: Type return $a + $b; below  
  return $a + $b;
}

function read_input_and_write_output(){
$handle = fopen ("php://stdin","r");
print("enter a string literal to see its output....\n");
// Declare a variable named 'inputString' to hold our input.
$inputString = ""; 

// Read a full line of input from stdin (cin) and save it to our variable, input_string.
$inputString = fgets($handle);

// Print a string literal saying "Hello, World." to stdout using cout.
print("Hello, World.\n");

// TODO: Write a line of code here that prints the contents of input_string to stdout.
printf("you entered [ %s ]", $inputString); 
fclose($handle);
}
 
function data_types_function(){
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$int1 = 0;
$_sum_int = 0;
$double1 = 0.0;
$_sum_double = 0.0;
$string1 = "";
// Read and save an integer, double, and String to your variables.
printf("enter one integer to perform addition with %d\n", $i);
$int1 = fgets($handle);
printf("enter one double to perform addition with %d\n", $d);
$double1 = fgets($handle);
printf("enter string to perform concatenation....\n");
$string1 = fgets($handle); 
// Print the sum of both integer variables on a new line.
$_sum_int = (int)$i + (int)$int1;
printf("%d plus %d equals %d", $i, $int1, $_sum_int);
// Print the sum of the double variables on a new line.
$_sum_double = (int)$d + (int)$double1;
printf("%d plus %d equals %d", $d, $double1, $_sum_double);
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
print($s . $string1 );
fclose($handle);
}

function sum_arrays_fucntion(){
	
}













?>

