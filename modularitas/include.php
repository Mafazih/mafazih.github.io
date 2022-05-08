<?php
    /*Jika menggunakan 'include' dan file yang dimuat tidak ditemukan,
    maka akan muncul kode error bahwa file tersebut tidak ada,
    namun kode yang tertulis setelahnya akan tetap berjalan atau dieksekusi. 
    */
    include("filekosong.php");
    print "<b> Halo Dunia!!"."<br/>";
    echo "Kode setelah include tetap berjalan";
?>