<?php
// uji kelas
class kelasUji{
     public function __construct(){
        return false;
     }
   
}

// menguji apakah ada kelas atau tidak
echo  class_exists("kelasUji") ? "Kelas ada" : "Kelas Tidak  Ada";
echo "<br>";
echo  class_exists("kelasTakUji") ? "Kelas ada" : "Kelas Tidak  Ada";