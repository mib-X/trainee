<?php


namespace Core;


class ModelFile
{
    protected $data;
    public function __construct($file)
    {
        $path = ROOT . "/Application/$file.php";
        if(file_exists($path)){
            $this->data =  include_once $path;
        } else {
            $this->data = null;
        }
    }
    public function getData()
    {
        return $this->data;
    }
}