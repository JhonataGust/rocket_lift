<?php 
$gas_consumed = $_POST["gas_total"] <= 0 ? 0 : $_POST["gas_total"];
echo "<div class='left'>
    <h4>Gas Left: ".$gas_consumed." litros</h4>
    </div>";
?>