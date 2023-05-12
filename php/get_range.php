<link rel="stylesheet" href="../css/table.css" />
<?php
include "generateTable.php";
include "run_query.php";

$minPrice = $_GET['min'];
$maxPrice = $_GET['max'];

try {
    $sqlSelect = "SELECT name, price, quality, quantity FROM `items` WHERE `price` >= :min AND `price` <= :max;";

    $params = [":min" => $minPrice, ':max' => $maxPrice];
    $res = runQuery($sqlSelect, $params);

    echo generateTable($res);
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}
