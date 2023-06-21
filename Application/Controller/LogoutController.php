<?php

namespace Application\Controller;

class LogoutController extends \Core\Controller
{
    public function actionIndex()
    {
        $this->login->logout();
        header('Location:' . HOST);
    }
}
