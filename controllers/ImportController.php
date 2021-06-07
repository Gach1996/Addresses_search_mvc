<?php

require_once ROOT. '/../models/Import.php';

/**
 * Class ImportController
 */
class ImportController
{
    public function actionImport()
    {
        $import = Import::importXML();

        $redirect = empty(APP) ? '/' : APP;

        header('Location: ' . $redirect);
    }

    public function actionRemove()
    {
        Import::removeTable();

        $redirect = empty(APP) ? '/' : APP;

        header('Location: ' . $redirect);
    }

}