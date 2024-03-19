<?php

function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
perkenalan("Qodri","Hallo");

echo "<hr>";

$saya = "Qodri";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya,$ucapanSalam);

?>