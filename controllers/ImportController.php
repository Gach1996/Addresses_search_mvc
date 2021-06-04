<?php

require_once ROOT. '/../models/Import.php';

class ImportController
{
    public function actionImport()
    {
        $import = Import::importXML();

        header('Location: /' . APP);
    }

}