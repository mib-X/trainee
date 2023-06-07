<?php

namespace Application\Model;

class User extends DomainObject
{
    private string $name;
    private string $email;
    private string $register_date;
    private string $birthday;
    private string $image;
    public function __construct($id, $name, $email, $register_dateAdded, $birthday, $image)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->email = $email;
        $this->register_date = $register_dateAdded;
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
}
