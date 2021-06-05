<?php

require_once ROOT. '/../models/Addresses.php';
require_once ROOT. '/../controllers/Controller.php';

class HomeController extends Controller
{
    public function actionIndex()
    {
        loadTemplate($this->smartyObj, 'pages/index');
    }

    public function actionSearch()
    {
        $term = $_GET['name'] ?? '';

        if (empty($term)) {
            return;
        }

        $addresses = Addresses::getAddresses($term);

        echo json_encode($addresses);
    }

}