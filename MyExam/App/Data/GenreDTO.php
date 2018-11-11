<?php

namespace App\Data;

class GenreDTO
{
    const GENRE_MIN_LENGTH = 3;
    const GENRE_MAX_LENGTH = 50;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     * @throws \Exception
     */
    public function setName(string $name): void
    {
        PDOValidator::validate(
            self::GENRE_MIN_LENGTH,
            self::GENRE_MAX_LENGTH,
            $name,
            "Genre Name must be between 3 and 50 characters!"
        );

        $this->name = $name;
    }
}