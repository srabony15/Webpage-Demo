<!DOCTYPE html>
<html>
<body>
<?php
//Finding primes from 1 to 100

for($i=1;$i<=500;$i++)
{
	$check=0;
	for($j=1;$j<=$i;$j++)
    {
    	if($i%$j==0)
        {
        	//echo $i."D ";
        	$check++;
            //echo $check;
        }
    }

     if($check==2)
     {
        echo $i." ";
     }
}

?>
</body>
</html>

<!--PHP Practice -->
<!--1. Generating common shapes (Triangle, rectangle) using text.
2. Sorting array
3. FizzBuzz
4. Finding fibonacci series
5. Finding sum of n numbers


FizzBuzz
1-100
3 or its multiple - replace the number with Fizz
5 or its multiple - replace the number with Buzz
if number is multiple of both 3 and 5 - replace the number with FizzBuzz -->
