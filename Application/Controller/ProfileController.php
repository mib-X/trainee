<?php

namespace Application\Controller;

use Application\Model\UserMapper;
use Core\View;

class ProfileController extends \Core\Controller
{
    public function actionIndex()
    {
        $this->title = 'Profile page';
        if ($this->login->isLoggedIn()) {
            $mapper = new UserMapper($this->registry->getPDO());
            $user = $mapper->getById($_SESSION['userId']);
            $data = [ 'id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'image' => $user->getImage(),
                'date_reg' => $user->getRegisterDate(),
                'birthday' => $user->getBirthday()
            ];
            $page = $this->render('profile', $data);
            echo (new View) ->render($page);
        } else {
            (new ErrorController())->actionNotFound();
        }
    }
}
