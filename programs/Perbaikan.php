<?php
    $inputProgram = 1;
    
    function luasSegitiga($alas, $tinggi)
    {
        return $luas = ($alas * $tinggi) / 2;
    }

    function luasPersegi($sisi)
    {
        return $luas = $sisi * $sisi;
    }

    $segitigaSatu = luasSegitiga(3, 4);
    $persegiSatu = luasPersegi(4);

    echo "Luas Segitiga Satu adalah " . $segitigaSatu . "<br>";
    
    echo "Luas Persegi Satu adalah " . $persegiSatu . "<br>";
?>