<?php

namespace Core;

class Registry
{
    private static ?Registry $instance = null;
    private array $prop = [];
    private \PDO $PDO;
    private Request $request;
    private function __construct()
    {
    }
    public static function getInstance(): Registry
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getProp($key)
    {
        if (isset($this->prop[$key])) {
            return $this->prop[$key];
        }
        return null;
    }
    public function setProp($key, $value): void
    {
        $this->prop[$key] = $value;
    }
    /**
     * @param Request $request
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }
    public function getRequest(): ?Request
    {
        if (is_null($this->request)) {
            throw new \Exception('No Request set');
        }
        return $this->request;
    }

    /**
     * @return \PDO
     */
    public function getPDO(): \PDO
    {
        return $this->PDO;
    }

    public function setPdo($params): void
    {
        $pdo = (new PDOConnection())->getConnection($params);

        $this->PDO = $pdo;
    }
}