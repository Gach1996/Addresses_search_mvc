<?php
require_once ROOT. '/../models/Addresses.php';
require_once ROOT. '/../models/Search.php';
require_once ROOT. '/../models/Distance.php';


class SearchController
{
    public function actionResult($id = null)
    {
        if (!isset($id)) {
            return;
        }

        $resultId = Addresses::checkResultExist($id);
        if (!isset($resultId)) {
            return;
        }

        $otherAddresses = Addresses::getOthers($id);

        $tableAddresses = Search::result($resultId, $otherAddresses);
//        dd(count($tableAddresses['5']));
//        dd(count($tableAddresses['5']));

        if (count($tableAddresses['5']) > count($tableAddresses['5_30']) && count($tableAddresses['5']) > count($tableAddresses['30'])) {
            $c = count($tableAddresses['5']);
        } elseif (count($tableAddresses['5_30']) > count($tableAddresses['5']) && count($tableAddresses['5_30']) > count($tableAddresses['30'])) {
            $c = count($tableAddresses['5_30']);
        } else {
            $c = count($tableAddresses['30']);
        }

        view('search/result.php', compact('tableAddresses', 'c'));
    }

}