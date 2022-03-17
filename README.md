# Exercices_PHP
Some PHP Exercices (the type of these variables, multiple of 3 and a multiple of 5,the PGCD (largest common divisor) )

/**
 * Give the value of each of the variables during and at the end of the following script 
 * and check the evolution of the type of these variables:
 */

$x="PHP5";
var_dump($x);

$a[]=&$x;
var_dump($a);

$y=" 5 eme version de PHP";
var_dump($y);

$z=$y*10;
var_dump($z);

$x.=$y;
var_dump($x);

$y*=$z;
var_dump($y);

$a[0]="MySQL";
var_dump($a[0]);



/**
 * Write a function to test if a number is both a multiple of 3 and a multiple of 5.
 */

function MultipleBothNumbers($number){
  if(($number%3==0 && $number%5==0))
    echo "Le nombre $number est multiple de 3 et 5.";
  else 
    echo "Le nombre $number n'a pas multiple de 3 et 5.";
}



/**
 * Use a while loop to determine the first random draw integer that is a multiple of a given number. Write the variant using the do...while loop.
 */

$number = 18;
$x = rand(0, 1000);
//Boucle while
while ($x % $number != 0) {
    $x = rand(0, 1000);
}
echo "$x is multiple of $number";

$number = 18;
//do...while
do {
    $x = rand(0, 1000);
} while ($x % $number != 0);
echo "$x is multiple of $number";




/**
 * Look for the PGCD (largest common divisor) of two given numbers.
 *  Manage with an exception the case where at least one of the numbers is not integer.
 */

//Requires $A > $B
$A = 9876;
$B = 5432;
try {
    if (!(is_integer($A) or is_integer($b))) {
        throw new Exception("Numbre(s) not integers !");
    } else {
        echo "Le PGCD between $A and $B is : ";
        do {
            $R = $A % $B;
            $A = $B;
            $B = $R;
        } while ($R != 0);
        echo $A;
    }
} catch (Exception $except) {
    echo $except->getMessage();
}
