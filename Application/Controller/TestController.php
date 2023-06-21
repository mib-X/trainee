<?php

namespace Application\Controller;

use Core\Controller;
use Application\Model;
use Core\PDOConnection;
use Core\Registry;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo "actionIndex";
        echo "<pre>";
        var_dump($this->registry);
        print_r($this->registry->getProp('menu'));
        print_r($this->nav);
    }
}

