<?php

namespace Application\Controller;

use Application\Model\PostDbModel;
use Application\Model\PostMapper;
use Core\Controller;
use Core\PDOConnection;
use Core\View;

class PostController extends Controller
{
    public function actionIndex()
    {
        $this->title = "Post list";
//        $modelDb = new PostDbModel();
//        $data['posts'] = $modelDb->getPosts();
        $mapper = new PostMapper($this->registry->getPDO());
        $posts = $mapper->getPosts(10);
        $data['posts'] = [];
        foreach ($posts as $post) {
            $data['posts'][] = [
              'id' => $post->getId(),
              'title' => $post->getTitle(),
              'author' => $post->getAuthor(),
              'date_added' => $post->getDateAdded(),
              'description' => $post->getDescription(),
              'thumb' => $post->getThumb()
            ];
        }
        $page = $this->render('posts', $data);
        echo (new View) ->render($page);
    }

    public function actionView($params)
    {
//        $model = new PostDbModel();
//        $data = $model->getPostById($params['id']);
        $mapper = new PostMapper($this->registry->getPDO());
        $post = $mapper->getById($params['id']);
        $data = [
            'id' => $post->getId(),
            'title' => $post->getTitle(),
            'author' => $post->getAuthor(),
            'date_added' => $post->getDateAdded(),
            'description' => $post->getDescription(),
            'thumb' => $post->getThumb()
        ];
        if (!empty($data)) {
            $this->title = $data['title'];
            $page = $this->render('post', $data);
        } else {
            $page = $this->render('404');
        }
        echo (new View) ->render($page);
    }
}
