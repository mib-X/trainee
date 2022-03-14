<?php


namespace Application\Controller;


use Application\Model\FillDbModel;

class AddController
{

    public function actionIndex(){
        $model = new FillDbModel();
        foreach ($model->posts as $post){
            $model->AddPosts($post);
        }

    }
}