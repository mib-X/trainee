<?php


namespace Application\Controller;


use Application\Model\PostDbModel;
use Core\View;
use Core\Controller as Controller;

class DefaultController extends Controller
{
    public function actionIndex(){
        $this->title = "Main page title";
        $modelDb = new PostDbModel();
        $data['posts'] = $modelDb->getPosts();
        $page = $this->render('posts', $data);
        echo (new View) ->render($page);
    }
}