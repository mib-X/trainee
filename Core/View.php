<?php


namespace Core;


class View
{

    public function render(Page $page)
    {
        return $this->renderLayout($page, $this->renderContent($page), $this->getNav($page->get('nav')));
    }
    public function getPart($view, $data = [])
    {
        $viewPartPath = ROOT . '/Application/View/' . $view . '.php';
        if (file_exists($viewPartPath)) {
            ob_start();
            extract($data);
            include $viewPartPath;
            return ob_get_clean();
        } else {
            echo "Нет такого файла представления " . $viewPartPath;
        }
    }

    private function getNav($data = [])
    {
        $viewPartPath = ROOT . '/Application/View/navigation.php';
        if (file_exists($viewPartPath)) {
            ob_start();
            $menu = $data;
            include $viewPartPath;
            return ob_get_clean();
        } else {
            echo "Нет такого файла представления " . $viewPartPath;
            die();
        }
    }

    private function renderLayout(Page $page, $content, $navigation)
    {
        $layoutPath = ROOT . '/Application/View/layout/' . $page->get('layout') . '.php';
        if(file_exists($layoutPath)) {
            ob_start();
            $title = $page->get('title');
            include $layoutPath;
            return ob_get_clean();
        } else {
            echo "Нет такого layout " . $page->get('layout');
            die();
        }
    }

    private function renderContent(Page $page)
    {
        $viewPath = ROOT . '/Application/View/' . $page->get('view') . '.php';
        if (file_exists($viewPath)) {
            ob_start();
            $data = $page->get('data');
            extract($data);
            include $viewPath;
            return ob_get_clean();
        } else {
            echo "Нет такого файла представления" . $page->get('view');
            die();
        }
    }
}
