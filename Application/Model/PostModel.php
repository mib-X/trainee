<?php


namespace Application\Model;

use \Core\ModelFile as ModelFile;

class PostModel extends ModelFile
{
    public function getPost($id) {
        return $this->data[$id];
    }
}