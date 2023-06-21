<?php


namespace Application\Controller;

use Core\Controller;
use Core\View;

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->title = "Login page";
        if (!empty($this->registry->getRequest()->getParam('email')) &&
            !empty($this->registry->getRequest()->getParam('password'))
        ) {
            if ($this->login->authenticate(
                $this->registry->getRequest()->getParam('email'),
                $this->registry->getRequest()->getParam('password')
            )
            ) {
                header('Location:' . HOST);
            }
        }
        $data = [];
        $data['errors'] =  $this->registry->getRequest()->getFeedback();
        $page = $this->render('login', $data);
        echo (new View) ->render($page);
    }
}
