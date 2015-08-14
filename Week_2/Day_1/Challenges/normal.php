<!-- 
	Using everything you have learned and some googling 

	without using an array of months, find all the months that begin with "J"

	- Display the Month Number, Month Name, and how many characters are in that Month Name

	For example:
		7 - July - 4


 -->
 <?php
 	function timeLapse($month){
 		return time()+$month*30*24*60*60;
 	}
  ?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
	<?php
	     // code goes here ...
		//echo date(F, 12);
	for($i = -7; $i<= 4; $i++){
		$m = date(F, timeLapse($i));
		if(substr($m,0,1) == "J"){
			echo $i+8 . " - " .$m." - ".strlen($m) . "<br />";
		}
		
	}

	?>
</p>
</body>
</html>