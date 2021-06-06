<?php

class Controller
{
   protected $smartyObj;

    public function __construct()
    {
        $smartyObj = new Smarty();

        $smartyObj->setTemplateDir(TemplatePrefix);
        $smartyObj->setCompileDir('../tmp/templates_c');
        $smartyObj->setCacheDir('../tmp/cache');
        $smartyObj->setConfigDir('../library/Smarty/configs');

        $smartyObj->assign('APP', APP);

        $this->smartyObj = $smartyObj;
    }
}