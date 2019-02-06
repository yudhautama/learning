<?php
// mendefinisikan kelas basis
class Anjing {
    // kode tertentu
}

// mewarisi kelas
class Bloodhound extends Anjing{
    // kode tertentu
}

// menciptakan instans (objek)
$spike = new Bloodhound;

// menghasilkan true
echo ($spike instanceof Bloodhound) ? "\$spike adalah instans dari Bloodhound" : "\$spike bukan instans dari Bloodhound";
echo is_subclass_of($spike, "Anjing") ? "\$spike adalah subkelas dari Anjing" : "\$spike bukan subkelas dari Anjing";