<?php


namespace Application\Controller;


use Application\Model\PostModel;
use Core\Controller;
use Core\View;

class PostController extends Controller
{
    public function actionIndex()
    {
        $this->title = "Post list";
        $model = new PostModel('config/posts');
        $data['posts'] = $model->getData();
        $page = $this->render('posts', $data);
        echo (new View) ->render($page);
    }

    public function actionView($params)
    {
        $posts = new PostModel('config/posts');
        $data = $posts->getPost($params['id']);
        if($data !== null) {
            $this->title = $data['title'];
            $page = $this->render('post', $data);
        } else {
            $page = $this->render('404');
        }
        echo (new View) ->render($page);
    }
}
