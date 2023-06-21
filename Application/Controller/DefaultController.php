<?php

namespace Application\Controller;

use Application\Model\PostMapper;
use Core\View;
use Core\Controller as Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->title = "Main page title";
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
}
