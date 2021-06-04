<?php

require_once ROOT. '/../models/Addresses.php';

class HomeController
{
    public function actionIndex()
    {
        view('pages/index.php', []);
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