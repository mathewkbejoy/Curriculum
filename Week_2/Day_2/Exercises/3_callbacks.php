<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Some functions in PHP take a parameter called a "callback".
         * A callback is a function that will be run somehow inside the
         * function that is calling it.
         * @see http://php.net/manual/en/function.array-filter.php
         */

        // Modify the function in our previous example to return "true" if
        // the score is greater than 5, and "false" if it is not.
          function score($n){
            $name = ucwords(strtolower(trim($n)));
            $posA = stripos($name, 'a');
            $parts = explode(' ', $name);
            $lenLast = strlen(array_pop($parts));
            $numWords = str_word_count($name);
            $score = $posA * $lenLast / $numWords;
            //echo "<br /> $name: $score";
             if($score > 5){
                 return true;
             }
                 return false;
            }


        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        $names[] = 'Bob ArK';
        $names[] = 'Derek WaLL';

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        $names = array_filter($names, 'score');


        // Without writing a loop, print out the winners separated by a comma and a space
        print implode(" ,", $names);

        // Question: Do the names look right?


        ?>

    </p>

    </body>
</html>