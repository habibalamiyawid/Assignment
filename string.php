<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowel_count = 0;
    $str_reverse = strrev($string);
    
    for ($i = 0; $i < strlen($string); $i++) 
    {
       if (
            $string[$i] === 'a' || $string[$i] === 'e' || $string[$i] === 'i' || $string[$i] === 'o' || $string[$i] === 'u' ||
            $string[$i] === 'A' || $string[$i] === 'E' || $string[$i] === 'I' || $string[$i] === 'O' || $string[$i] === 'U'
        ) {
            $vowel_count++;
        }
    }
    
    echo "Original String: $string, Vowel Count:  $vowel_count, Reversed String: $str_reverse\n";
}

?>