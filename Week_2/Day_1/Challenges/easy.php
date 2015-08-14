<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php

          	    // code goes here ...
          	    $val = 0;
          	    do{
          	      $val = rand(1,7);
          	      echo $val." <br />";
          	    }while($val != 7);

            ?>
        </p>
	</body>
</html>