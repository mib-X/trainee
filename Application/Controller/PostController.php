<?php


namespace Application\Controller;


use Application\Model\PostDbModel;
use Core\Controller;
use Core\View;

class PostController extends Controller
{
    public function actionIndex()
    {
        $this->title = "Post list";
        $modelDb = new PostDbModel();
        $data['posts'] = $modelDb->getPosts();
        $page = $this->render('posts', $data);
        echo (new View) ->render($page);
    }

    public function actionView($params)
    {
        $model = new PostDbModel();
        $data = $model->getPostById($params['id']);
        if($data !== false) {
            $this->title = $data['title'];
            $page = $this->render('post', $data);
        } else {
            $page = $this->render('404');
        }
        echo (new View) ->render($page);
    }
}
