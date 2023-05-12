<link rel="stylesheet" href="../css/table.css" />
<?php
include "generateTable.php";
include "run_query.php";

$category = $_GET['category'];

try {
    $sqlSelect = "SELECT name, price, quality, quantity FROM `items`,`category` WHERE `c_name`=:category AND `FID_Category`=`ID_Category`;";

    $params = [":category" => $category];
    $res = runQuery($sqlSelect, $params);

    echo generateTable($res);
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}
