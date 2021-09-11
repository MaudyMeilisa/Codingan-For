<?php
$jenis="makanan";
$menu="mie goreng";
$jumlah=2;

if($jenis == "makanan"){
    if($menu== "Nasi goreng"){
        echo "jenis pesanan:$jenis<br>";
        echo "nama pesanan:$menu<br>";
        echo "jumlah:$jumlah<br>";
        $harga = 10000;
        $total =$harga * $jumlah;
        echo "total:$total<br>";
        if($total >= 50000){
            $diskon =$total*0.2;
            echo "diskon 20%:$diskon<br>";
        }
        $totalbayar = $total - $diskon;
        echo "total bayar:$totalbayar<br>";
    }
    else if($menu== "mie goreng"){
        echo "jenis pesanan:$jenis<br>";
        echo "nama pesanan:$menu<br>";
        echo "jumlah:$jumlah<br>";
        $hargamie = 15000;
        $total =$hargamie * $jumlah;
        echo "total:$total<br>";
         if($total >= 50000){
            $diskon =$total*0.2;
            echo "diskon 20%:$diskon<br>";
        }
        $to= $total - $diskon;
        echo "total bayar:$to<br>";
    }

    else if($menu== "ayam goreng"){
        echo "jenis pesanan:$jenis<br>";
        echo "nama pesanan:$menu<br>";
        echo "jumlah:$jumlah<br>";
        $harga = 20000;
        $total =$harga * $jumlah;
        echo "total:$total<br>";
         if($total >= 50000){
            $diskon =$total*0.2;
            echo "diskon 20%:$diskon<br>";
        }
        $totalbayar = $total - $diskon;
        echo "total bayar:$totalbayar<br>";
    }

    else if($jenis == "minuman"){

    }
    else{
        echo "menu tidak ada";
    }
}


?>
