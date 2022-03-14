<?php


namespace Application\Controller;


use Application\Model\UserDbModel;
use Core\View;

class ProfileController extends \Core\Controller
{
    public function actionIndex(){
        $this->title = 'ProfileController page';
        $model = new UserDbModel();
        $data = $model->getUserById('1');
        $page = $this->render('profile', $data);
        echo (new View) ->render($page);
     }
}