<?php
// tabloyap bir tablo oluşturma fonksiyonudur
function tabloyap($satir, $sutun, int $border = 1){
echo "<table border=$border>";
$sayi = 1;
// satır için
for($i=1;$i<=$satir;$i++){
    echo "<tr>";
    //sutunlar için
    for($x=1;$x<=$sutun;$x++){
        echo "<td>";
        echo $sayi++;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
}
$satir = 2;
$sutun = 7;
tabloyap($satir, $sutun);
?>
