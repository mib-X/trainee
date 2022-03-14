<?php


namespace Application\Controller;


use Core\Controller;
use Core\View;

class ErrorController extends Controller
{
    public function actionNotFound($params)
    {
        $this->title = "404 - PAGE NOT FOUND";
        $page = $this->render('404');
        echo (new View) ->render($page);

    }
}