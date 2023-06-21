<?php

namespace Core;

class AppHelper
{
    private const DATABASE = "/Application/config/db.php";
    private const CONF = "/Application/config/config.php";
    private const ROUTES = "/Application/config/routes.php";
    private Registry $registry;
    public function __construct()
    {
        $this->registry = Registry::getInstance();
        $this->init();
    }
    private function init()
    {
        $this->registry->setRequest(new Request());
    }
    public function setupOptions()
    {
        if (file_exists(ROOT. self::DATABASE)) {
            $db = include ROOT. self::DATABASE;
            $this->registry->setProp('db', $db);
        } else {
            throw new \Exception('File with dbconfig is not found');
        }
        if (file_exists(ROOT . self::CONF)) {
            $conf = include ROOT . self::CONF;
            if (!empty($conf)) {
                foreach ($conf as $key => $value) {
                    $this->registry->setProp($key, $value);
                }
            }
        } else {
            throw new \Exception('File with configuration is not found');
        }
        if (file_exists(ROOT. self::ROUTES)) {
            $routes = include ROOT. self::ROUTES;
            $this->registry->setProp('routes', $routes);
        } else {
            throw new \Exception('File with routes is not found');
        }
        if (!empty($this->registry->getProp('db'))) {
            $this->registry->setPdo($this->registry->getProp('db'));
        } else {
            throw new \Exception('PDO config data is not load');
        }
    }
}
