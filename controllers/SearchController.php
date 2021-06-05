<?php

require_once ROOT. '/../models/Addresses.php';
require_once ROOT. '/../models/Search.php';
require_once ROOT. '/../models/Distance.php';
require_once ROOT. '/../controllers/Controller.php';

class SearchController extends Controller
{
    public function actionResult($id = null)
    {
        if (!isset($id)) {
            return;
        }

        $result = Addresses::checkResultExist($id);
        if (!isset($result)) {
            return;
        }

        $otherAddresses = Addresses::getOthers($id);

        $tableAddresses = Search::result($result, $otherAddresses);

        $this->smartyObj->assign('tableAddresses', $tableAddresses);
        $this->smartyObj->assign('clickedAddress', $result);

        loadTemplate($this->smartyObj, 'search/result');
    }

}