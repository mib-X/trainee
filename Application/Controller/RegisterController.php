<?php


namespace Application\Controller;


use Application\Model\Registration;
use Application\Model\User;
use Application\Model\UserMapper;
use Core\View;

class RegisterController extends \Core\Controller
{
    public function actionIndex()
    {
        $this->title = "Register page";
        if (!empty($this->registry->getRequest()->getParam('name')) &&
            !empty($this->registry->getRequest()->getParam('password')) &&
            !empty($this->registry->getRequest()->getParam('email')) &&
            !empty($this->registry->getRequest()->getParam('confirmPassword'))
        )
        {
            if ($this->registry->getRequest()->getParam('password') !==
                $this->registry->getRequest()->getParam('confirmPassword')) {
                $this->registry->getRequest()->addFeedback("Password mismatch");
            } else {
                $user = new User(
                    null,
                    $this->registry->getRequest()->getParam('name'),
                    $this->registry->getRequest()->getParam('email'),
                    password_hash($this->registry->getRequest()->getParam('password'), PASSWORD_DEFAULT),
                    date('Y-m-d')
                );
                $mapper = new UserMapper($this->registry->getPDO());
                $registration = new Registration($mapper);
                if ($registration->registerUser($user)) {
                    $page = $this->render('registered');
                    echo (new View) ->render($page);
                    exit();
                } else {
                    $this->registry->getRequest()->addFeedback("User wasn't added");
                }

            }
        }
        $data = [];
        $data['errors'] =  $this->registry->getRequest()->getFeedback();
        $page = $this->render('register', $data);
        echo (new View) ->render($page);
    }
}