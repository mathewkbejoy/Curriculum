<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
      <p>
        <?php
        /**
        * array can be created in 2 ways as of 5.4.0
        *  - array();
        *  - [];
        */
       
        $arrayVar = array('1','2','3');
        $arrayVar2 = [1,2,3]; // shorthand

        var_dump($arrayVar);

        echo "<br />";

        var_dump($arrayVar2);

        ?>
      </p>
	</body>
</html>