<?php
$instrumentos = array("trompete", "trompa", "trombone", "tuba");
 
$i = 0;
echo "<select>";
while($i < 3){
           echo "<option>$instrumentos[$i]</option>";
}
 
echo "</select>";

//Exibe uma lista de opções com o array para selecionar
?>