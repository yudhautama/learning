<?php
//mendefinisikan array
$b = array("sodium", "klorin", "hidrogen");
$a = array("klorin", "sodium", "hidrogen");

// tak sensitif terhadap kunci
print_r(array_diff($a, $b));

// sensitif terhadap kunci
print_r(array_diff_assoc($a, $b));

// tak sensitif terhadap kunci
print_r(array_intersect($a, $b));

// sensitif terhadap kunci
print_r(array_intersect_assoc($a, $b));