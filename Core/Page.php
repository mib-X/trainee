<?php

namespace Core;

class Page
{
    private string $layout;
    private $view;
    private string $title;
    private array $data;
    private array $nav;

    public function __construct($layout, $nav, $title = '', $view = null, $data = [])
    {
        $this->layout = $layout;
        $this->title = $title;
        $this->view = $view;
        $this->data = $data;
        $this->nav = $nav;
    }

    public function get($property)
    {
        return $this->$property;
    }
}