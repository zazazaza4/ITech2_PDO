<?php
function runQuery($sqlSelect, $values)
{
    include "db_connect.php";
    try {
        $sth = $dbh->prepare($sqlSelect);

        if (func_num_args() > 1) {
            foreach ($values as $key => $value) {
                $sth->bindValue($key, $value);
            }
        }

        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_NAMED);

        return $res;
    } catch (PDOException $ex) {
        echo $ex->GetMessage();
    }
    $dbh = null;
}
