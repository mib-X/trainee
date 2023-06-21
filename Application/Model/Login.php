<?php

namespace Application\Model;

use Core\Registry;

class Login
{
    private Registry $registry;
    public function __construct()
    {
        $this->registry = Registry::getInstance();
    }
    public function authenticate($email, $password): bool
    {
        try {
            $stmt = $this->registry->getPDO()->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->execute(['email' => $email]);
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
        if (! is_array($row)) {
            $this->registry->getRequest()->addFeedback("Password or email incorrect");
            return false;
        }
        if ($row && password_verify($password, $row['password'])) {
            $_SESSION['userId'] = $row['id'];
            $_SESSION['userName'] = $row['name'];
            return true;
        }

        return false;
    }
    public function isLoggedIn(): bool
    {
        if (isset($_SESSION['userId'])) {
            return true;
        }
        return false;
    }
    public function logout()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
    }
}
