<?php
// fungsi untuk menguji apakah tahun leap atau tidak
function ujitahunleap($tahun){
    return checkdate(2, 29, $tahun);
}

echo ujitahunleap(2020) ? "Adalah Tahun Leap" : "Bukan Tahun Leap";
echo "<br>";
echo ujitahunleap(2024) ? "Adalah Tahun Leap" : "Bukan Tahun Leap";  