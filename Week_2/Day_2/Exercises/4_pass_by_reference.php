<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Copy exercise 3 into this file and add a single character
         * to save our modifications to our names.
         * @hint: Google the name of this file + PHP
         */
         
         function score(&$name){
            $name = ucwords(strtolower(trim($name)));
            $posA = stripos($name, 'a');
            $parts = explode(' ', $name);
            $lenLast = strlen(array_pop($parts));
            $numWords = str_word_count($name);
            $score = $posA * $lenLast / $numWords;
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


        ?>

    </p>

    </body>
</html>