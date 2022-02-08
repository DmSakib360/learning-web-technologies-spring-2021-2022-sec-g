<?php
	
	

function rect_area($length = 10, $width = 6) //function has declared
{
	echo "<br/>"."Programe 1"."<br/>";
    $area = $length * $width;
    $perimeter =2*($length+$width);

    echo "<br />" . "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ."<br />";

    echo "Perimeter Of Rectangle with length " . $length . " & width " . $width . " is " . $perimeter . "<br />" ;

}



function calc_VAT($vat = 15, $price= 500)
{
	echo "<br/>"."Programe 2"."<br/>";
	$totalVat=($price/100) *$vat;
	$totalPrice = $totalVat + $price;

	echo "<br />" ."Calculating Vat " . "<br />" ."Vat is " . $vat . "% and Without Vat price is " . $price . "<br />" ." Final Price is: "  . $totalPrice . "<br />";

}


function evenOdd($number)
{
	echo "<br/>"."Programe 3"."<br/>";
	echo "<br/>".$number." is";

   if($number % 2 == 0){
        echo "<br/>". "Even" . "<br/>"; 
    }
    else{
        echo "<br/>"."Odd" . "<br/>";
    }


}


function findLargest($x, $y, $z) {
 	
		echo "<br/>"."Programe 4"."<br/>";
 	    $max = $x;

  		if ($x >= $y && $x >= $z)
  			{
  				$max = $x;
 			}
    
 		if ($y >= $x && $y >= $z)
 		 {
  				 $max = $y;
 		 }
   
  		if ($z >= $x && $z >= $y)
 		 {
  	 			$max = $z;
 		 }
   
  
  echo "<br/>"."Largest number among $x, $y and $z is: $max\n"."<br/>";
}

function printNum($num=10)
{
	echo "<br/>"."Programe 5"."<br/>";

	echo "<br/>"."Printing Odd Numbers Between 10 to 100---"."<br/>";
     while ( $num <= 100 ) 
     {
     echo "$num\n";
     $num += 2;
	 }


}

function arrySearch()
{

echo "<br/>"."<br/>"."Programe 6"."<br/>";
$a=array("a"=>"Sakib","b"=>20,"c"=>"Rakib");
echo "<br/>"."Found in :";
echo array_search("Sakib",$a,true);
echo "<br/>"."Found in :";
echo array_search("Rakib",$a,true);

}


// function has been called.
//task1
rect_area(); 

//task2
calc_VAT();

//task3
evenOdd(60);

//task4
findLargest(80, 70, 30);

//task5
printNum();

//task6
arrySearch();

?>
