<?php
    $ar_buah = [' pepaya', " mangga", " pisang", " jambu"];
    //menampilkan buah index 1
    echo $ar_buah[1];
    //menampilkan jumlah buah
    echo "<br/>jumlah buah". count($ar_buah);
    //menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>".$buah ."</li>";
    }  echo "</ol>";
   // menambahkan buah
   $ar_buah[] = " apel";

   //menghapus buah index ke 1
   unset($ar_buah[1]);
   //mengubah index 2 menjadi manngis
   $ar_buah[2] = " manggis";
   //menampilkan seluruh buah dengan index nya
   echo "<ul>";
   foreach ($ar_buah as $buah => $v){
    echo "<li>Buah index-" .$buah . "adalah" .$v . " ";
   }
   echo "</ul>";

   echo "<ul>";
   sort($ar_buah);
   foreach ($ar_buah as $buah => $v){
    echo "<li>Buah index-" .$buah . "adalah" .$v . " ";
   }
   echo "</ul>";
?>