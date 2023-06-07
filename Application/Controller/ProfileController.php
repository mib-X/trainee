<?php


namespace Application\Controller;


use Application\Model\UserDbModel;
use Application\Model\UserMapper;
use Core\PDOConnection;
use Core\View;

class ProfileController extends \Core\Controller
{
    public function actionIndex(){
        $this->title = 'Author page';
//        $model = new UserDbModel();
//        $data = $model->getUserById('1');
        $mapper = new UserMapper(PDOConnection::getConnection());
        $user = $mapper->getById(1);
        $data = [ 'id' => $user->getId(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'image' => $user->getImage(),
            'date_reg' => $user->getRegisterDate(),
            'birthday' => $user->getBirthday()
        ];
        $page = $this->render('profile', $data);
        echo (new View) ->render($page);
     }
}