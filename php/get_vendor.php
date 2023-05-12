<link rel="stylesheet" href="../css/table.css" />
<?php
include "generateTable.php";
include "run_query.php";

$vendor = $_GET['vendor'];

try {
    $sqlSelect = "SELECT name, price, quality, quantity FROM `items`,`vendors` WHERE `v_name`=:vendor AND `FID_Vendor`=`ID_Vendors`";

    $params = [":vendor" => $vendor];
    $res = runQuery($sqlSelect, $params);

    echo generateTable($res);
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}
