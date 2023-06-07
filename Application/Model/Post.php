<?php


namespace Application\Model;


class Post extends DomainObject
{
    private string $title;
    private string $author;
    private string $date_added;
    private string $thumb;
    private string $description;

    public function __construct($id, $title, $author, $date_added, $description, $thumb)
    {
        parent::__construct($id);
        $this->title = $title;
        $this->author = $author;
        $this->date_added = $date_added;
        $this->thumb = $thumb;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getDateAdded(): string
    {
        return $this->date_added;
    }

    /**
     * @param string $date_added
     */
    public function setDateAdded(string $date_added): void
    {
        $this->date_added = $date_added;
    }

    /**
     * @return string
     */
    public function getThumb(): string
    {
        return $this->thumb;
    }

    /**
     * @param string $thumb
     */
    public function setThumb(string $thumb): void
    {
        $this->thumb = $thumb;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}