<?php
// mendefinisikan fungsi
// dengan argumen-argumen default
function pesanPizza($crust, $topping, $size="12"){
    return "Anda memesan sebuah pizza dengan ukuran $size-inci dengan crust $crust dan topping: " . implode(', ', $topping);
}

// memanggil fungsi tanpa argumen ketiga opsional
echo pesanPizza("tipis", array("cheese", "anchovies"));