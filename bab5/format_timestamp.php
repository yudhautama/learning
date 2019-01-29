<?php
// membaca tanggal
echo date("d M Y", time()) . "\n";

// membaca waktu
echo date("h:i:s A", time()) . " \n";

// membaca tanggal dan waktu
echo date("l, d F Y, h:i:s A", time()). " \n";

// membaca waktu dengan zona waktu
echo date("h:i:s A T", time()) . " \n";

// membaca tanggal dan waktu dalam format ISO8601
echo date("c", time());