<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

$yaslar["Emrullah"] = 17;
$yaslar["Yusuf"] = 18;
$yaslar["Guven"] = 15;
$yaslar["Eyup"] = 16;

echo "Emrullah " . $yaslar['Emrullah'] . " yaşındadır.<br>";

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
foreach($yaslar as $isim => $ismin_yasi){
echo  $isim . "'nin yaşı =" . $ismin_yasi;
  echo "<br>";
}


?>

</body>
</html>
