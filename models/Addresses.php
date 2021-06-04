<?php

class Addresses
{

    public static function getAddresses($term = '')
    {
        $connection = Db::getConnection();

        $result = null;

        if (!empty($term) && mb_strlen($term) >= 3) {
            $term = trim($term);

            $term = str_replace(' ', '+', $term);
            $term = '+' . $term;

            $fullTextSearchSql = "SELECT * FROM addresses
    WHERE MATCH(addresses_address,addresses_street) AGAINST('{$term}'IN BOOLEAN MODE)";
            $result = $connection->query($fullTextSearchSql);

            if ($result) {
                $result = $result->fetch_all(MYSQLI_ASSOC);

                return $result;
            }
        }

        $connection->close();
    }

    public static function checkResultExist($id)
    {
        $resultId = null;
        $connection = Db::getConnection();

        if ($id) {
            $id = (int) $id;

            $sql = "SELECT id FROM addresses WHERE id = $id";

            $res = mysqli_query($connection, $sql);
            $resultId = mysqli_fetch_assoc($res);
        }

        return $resultId;
    }

    public static function getOthers($id)
    {
        $result = null;
        $connection = Db::getConnection();

        if (isset($id)) {
            $id = (int) $id;

            $sql = "SELECT id, addresses_street, addresses_address FROM addresses WHERE id != $id";

            $result = mysqli_query($connection, $sql);
            $addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);

        }
        return $addresses;
    }
}