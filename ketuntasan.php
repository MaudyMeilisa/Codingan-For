<?php
$nilai = 2000;

if ($nilai >= 75 && $nilai <= 100){
echo "Selamat Anda Lulus";
}
else if($nilai < 75 && $nilai >= 0){
    echo "tidak lulus";
} else{
        echo"nilai tidak valid";
    }

?>