<?php
// mendefinisikan array
// cara pertama
$mobil = array(
        'Ferrari',
        'Porsche',
        'Jaguar',
        'Lamborgini',
        'Mercedes', 
);

echo "cara pertama \n";
print_r($mobil);
echo '<br>';

// cara kedua
$mobil[0] = 'Ferrari';
$mobil[1] = 'Porsche';
$mobil[2] = 'Jaguar';
$mobil[3] = 'Lamborgini';
$mobil[4] = 'Mercedes';

echo "cara kedua \n";
print_r($mobil);