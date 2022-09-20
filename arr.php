<?php 
$gas_quantity = $_POST["gas_quantity"];
$per_km = $_POST['consumed'];
$km_sum = 0;
$km_raw = 15376;
$result = [];
for($i=1;$i <= 25;$i++){
    $gas_quantity = $gas_quantity - $per_km;
     array_push($result, $gas_quantity);
}

foreach($result as $value){
    $km_sum = $km_sum + $km_raw;
    echo "<p>".$km_sum."km"." Litros Restantes: ".$value."</p>";
}

?>