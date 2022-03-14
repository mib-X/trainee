<?php


namespace Core;


class Page
{
    private string $layout;
    private $view;
    private string $title;
    private array $data;

    public function __construct($layout, $title = '', $view = null,  $data = [])
    {
        $this->layout = $layout;
        $this->title = $title;
        $this->view = $view;
        $this->data = $data;
    }

    public function get($property)
    {
        return $this->$property;
    }
}