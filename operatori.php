<?php

$i=1; $t=0;

$t = $t + $i; 

//skraćeno od linije 5
$t += $i;

// ista pravila vrijede za - * /

// specifičnosti uvećanja za 1

$i=0; //0

$i=$i+1; //1

$i+=1; //2    uvećanje za 7 $i+=7;

$i++; //3

//increment
echo $i++; //3 //prvo koristi pa onda uveća varijablu

echo $i; //4

echo ++$i; //5 //prvo uveća pa koristi

//decrement - ista pravila

$i=1; $j=0;

$i = $j++; //$i=0, $j=1

$j = --$i - --$j; // $i=-1, $j=-1

echo $j + $i; //-2

// DOmaća zadaća: Kreirati 7 scenarija napamet iz glase (napisati)
// prije izvođenja na papiru doći do rješenja i nakon izvođenja provjeriti točnost