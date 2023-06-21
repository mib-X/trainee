<?php

namespace Application\Model;

/**
 * Class User
 * Domain object class User
 * @package Application\Model
 */
class User extends DomainObject
{
    private string $name;
    private string $email;
    private string $register_date;
    private string $birthday;
    private string $image;
    private string $password;
    public function __construct(
        $id,
        $name,
        $email,
        $password,
        $register_date,
        $birthday = "1970-01-01",
        $image = "/img/default-user-logo.jpg"
    ) {
        parent::__construct($id);
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->register_date = $register_date;
        $this->birthday = $birthday;
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getRegisterDate(): string
    {
        return $this->register_date;
    }

    /**
     * @param string $register_date
     */
    public function setRegisterDate(string $register_date): void
    {
        $this->register_date = $register_date;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param $password
     */
    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return mixed
     */
    public function emailValidate()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }
}
