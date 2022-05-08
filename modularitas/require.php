<?php
    /*Jika menggunakan 'require' dan file yang dimuat tidak ditemukan,
    maka akan muncul kode error bahwa file tersebut tidak ada
    dan seluruh kode yang tertulis setelahnya tidak akan dieksekusi. 
    Jika ingin kode tersebut dijalankan maka membutuhkan file tersebut.
    kata kuncinya 'membutuhkan'.
    */
    require("filekosong.php");
    echo "Halo Dunia!!";
?>