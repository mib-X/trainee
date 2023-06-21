<?php

namespace Core;

class Request
{
    private array $params = [];
    private array $feedback = [];
    private string $path = "/";

    public function __construct()
    {
        $this->init();
    }
    private function init()
    {
        $this->params = $_REQUEST;
        $path = parse_url($_SERVER['REQUEST_URI']);
        $this->path = (empty($path['path'])) ? "/" : $path['path'];
    }

    public function getParam($name)
    {
        return $this->params[$name] ?? null;
    }
    public function setParam(string $key, $value)
    {
        $this->params[$key] = $value;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
    public function addFeedback($msg): void
    {
        array_push($this->feedback, $msg);
    }
    public function getFeedback(): array
    {
        return $this->feedback;
    }
    public function getFeedbackString(string $separator = "\n"): string
    {
        return implode($separator, $this->feedback);
    }
    public function clearFeedback(): void
    {
        $this->feedback = [];
    }
}
