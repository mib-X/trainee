<?php

namespace Core;

use Application\Model\Login;

class Controller
{
    protected string $layout = 'default';
    protected string $title = '';
    protected ?array $nav = [];
    protected Registry $registry;
    protected Login $login;
    public function __construct()
    {
        $this->registry = Registry::getInstance();
        $this->login = new Login();
        $this->nav = $this->registry->getProp('menu');
        if (!$this->login->isLoggedIn()) {
            unset($this->nav['/profile']);
        }
    }

    protected function render($view, $data = []) : Page
    {
        return new Page($this->layout, $this->nav, $this->title, $view, $data);
    }
}
