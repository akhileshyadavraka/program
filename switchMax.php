<?php
$a=26;
$b=21;
$c=18;

switch($a>$b)
{
   case 0:
   {
	      switch($b>$c)
	    {
		   case 0: 
		   echo "Max number is: C <br> Max Value of C is: ".$c;
		   break;
	      case 1: 
	      echo "Max number is: B <br> Max Value of B is: ".$b;
	      break;

	    }
	      break;
   }
   case 1:
   {
	      switch($a>$c)
	   {
	      case 0: 
	      echo "Max number is: C <br> Max Value of C is: ".$c;
	      break;
	      case 1: 
	      echo "Max number is: A <br> Max Value of A is: ".$a;
	      break;
	   }
	      break;
   }
}


?>