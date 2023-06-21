<?php


namespace Application\Model;


use Core\PDOConnection;
use Core\Registry;

class Registration
{
    private Registry $registry;
    private UserMapper $userMapper;

    public function __construct(UserMapper $userMapper)
    {
        $this->registry = Registry::getInstance();
        $this->userMapper = $userMapper;
    }
    public function registerUser(User $user): bool
    {
        if ($this->userExists($user)) {
            $this->registry->getRequest()->addFeedback("User with this email already exists");
            return false;
        }
        if (strlen($user->getName()) < 3) {
            $this->registry->getRequest()->addFeedback("Name too small. Choose Name from 3 to 32 characters");
            return false;
        }
        if (strlen($user->getName()) > 32) {
            $this->registry->getRequest()->addFeedback("Name too small. Choose Name from 3 to 32 characters");
            return false;
        }
        if(!$user->emailValidate()) {
            $this->registry->getRequest()->addFeedback("Email is not valid");
            return false;
        }

        $this->userMapper->insert($user);
//        try {
//            $stmt = $this->PDO->prepare("INSERT INTO users (id, name, email, date_reg, password, image, birthday)
//                VALUES (null, :name, :email, NOW(), :password, :image, :birthday) ");
//            $stmt->execute([
//                'name' => $this->name,
//                'email' => $this->email,
//                'password' => $this->password,
//                'image' => null,
//                'birthday' => null
//            ]);
//        } catch (\PDOException $e) {
//            echo $e->getMessage();
//        }

        return true;

    }
    private function userExists(User $user): bool
    {
        $stmt = $this->registry->getPDO()->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$user->getEmail()]);
        if (!empty($stmt->fetch())) {
            return true;
        }
        return false;
    }
}