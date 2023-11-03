<?php

    $pemasukan=50000000;
    $hutang_a=1650000;
    $hutang_b=9500000;
    $bungahutang_a=0.5;
    $bungahutang_b=0.45;

    $jumlahhutang=$hutang_a + $hutang_b;
    $sisa_uang=$pemasukan - $jumlahhutang;
    $jumlahtotalbunga=$bungahutang_a + $bungahutang_b;
    $jumlahtotalhutang=$jumlahhutang;

    echo $sisa_uang;
    echo "\n";
    echo $jumlahtotalbunga;
    echo "\n";
    echo $jumlahtotalhutang;
?>