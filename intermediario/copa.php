<?php
$ano_limite = $_GET["ano_limite"];
$last_copa = 2014;
$copas=0;

for($i = $last_copa ; $i< $ano_limite; $i+=4){
    $copas++;    
}

echo "Haverá $copas copas até o ano de $ano_limite";

