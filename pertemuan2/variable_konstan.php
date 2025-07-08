<?php
    //mendefenisikan konstanta
    define ("PHI", 3.14);
    define ("DBNAME", "Inventori");
    define ("DBSERVER", "Localhost");

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kell = 2 * PHI * $jari;

    echo "Luas Lingkaran dengan Jari " .$jari." : ".$luas;
    echo "<br/>Kelilingnya : " .$kell;

?>

<hr>
<?php
    echo "Nama Database : " .DBNAME;
    echo "<br/>Lokasi Databae".DBSERVER;
?>