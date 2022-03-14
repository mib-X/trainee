<?php


namespace Application\Controller;


use Core\View;

class ProfileController extends \Core\Controller
{
    public function actionIndex(){
        $this->title = 'ProfileController page';
        $data = include_once ROOT . '/Application/config/users.php';
        $page = $this->render('profile', $data);
        echo (new View) ->render($page);
     }
}