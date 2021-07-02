<?php declare(strict_types = 1);
   $myNumber = 100;
​
   function recursion(int $number) : int
   {
      if ($number === 1)
      {
         return $number;
      }
​
      return $number + recursion($number - 1);
   }
​
   echo(recursion($myNumber));