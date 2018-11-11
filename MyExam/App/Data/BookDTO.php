<?php

namespace App\Data;

class BookDTO
{
    const TITLE_MIN_LENGTH = 3;
    const TITLE_MAX_LENGTH = 50;

    const AUTHOR_MIN_LENGTH = 3;
    const AUTHOR_MAX_LENGTH = 50;

    const DESCRIPTION_MIN_LENGTH = 10;
    const DESCRIPTION_MAX_LENGTH = 10000;

    const IMAGE_MIN_LENGTH = 3;
    const IMAGE_MAX_LENGTH = 255;

    private $id;
    private $title;
    private $author;
    private $description;
    private $image;
    /**
     * @var GenreDTO
     */
    private $genreId;
    /**
     * @var UserDTO
     */
    private $userId;
    private $addedOn;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id = null): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @throws \Exception
     */
    public function setTitle($title): void
    {
        PDOValidator::validate(
            self::TITLE_MIN_LENGTH,
            self::TITLE_MAX_LENGTH,
            $title,
            "Book title out of range [3, 50]."
        );

        $this->title = $title;
    }

    /**
     * @return UserDTO
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        PDOValidator::validate(
            self::AUTHOR_MIN_LENGTH,
            self::AUTHOR_MAX_LENGTH,
            $author,
            "Book Author out of range [3, 50]."
        );
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @throws \Exception
     */
    public function setDescription($description): void
    {
        PDOValidator::validate(
            self::DESCRIPTION_MIN_LENGTH,
            self::DESCRIPTION_MAX_LENGTH,
            $description,
            "Book Description out of range [10, 10 000]."
        );

        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @throws \Exception
     */
    public function setImage($image): void
    {
        PDOValidator::validate(
            self::IMAGE_MIN_LENGTH,
            self::IMAGE_MAX_LENGTH,
            $image,
            "Book Image URL out of range [3, 255]."
        );

        $this->image = $image;
    }

    /**
     * @return GenreDTO
     */
    public function getGenreId(): GenreDTO
    {
        return $this->genreId;
    }

    /**
     * @param GenreDTO $genreId
     */
    public function setGenreId(GenreDTO $genreId): void
    {
        $this->genreId = $genreId;
    }

    /**
     * @return UserDTO
     */
    public function getUserId(): UserDTO
    {
        return $this->userId;
    }

    /**
     * @param UserDTO $userId
     */
    public function setUserId(UserDTO $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getAddedOn()
    {
        return $this->addedOn;
    }

    /**
     * @param mixed $addedOn
     */
    public function setAddedOn($addedOn): void
    {
        $this->addedOn = $addedOn;
    }


}