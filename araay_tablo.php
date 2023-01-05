<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo "<table border=1>";    
for ($row = 0; $row < 4; $row++) {
  echo "<tr>";
  for ($col = 0; $col < 3; $col++) {
    echo "<td>".$cars[$row][$col]."</td>";
  }
  echo "</tr>";
}
echo "</table>"; 
?>

</body>
</html>
