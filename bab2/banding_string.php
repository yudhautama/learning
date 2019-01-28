<?php
// membandingkan string-string
echo (metaphone("rest") == metaphone("reset")) ?
"kedua string sama" : "Kedua string tidak sama";
echo '<br>';

echo (metaphone("deep") == metaphone("dip")) ?
"kedua string sama" : "Kedua string tidak sama";
echo '<br>';

echo (metaphone("fire") == metaphone("higher")) ?
"kedua string sama" : "Kedua string tidak sama";

?>