<?php

namespace App\Data;

class GameDTO
{
    /**
     * @var int
     */
    private $gameId;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $publisher;
    /**
     * @var \DateTime
     */
    private $release1Date;
    /**
     * @var int
     */
    private $controllerId;
    /**
     * @var \DateTime
     */
    private $lastPlayed;
    /**
     * @var \DateTime
     */
    private $playtime;
    /**
     * @var int
     */
    private $userId;

    /**
     * @return int
     */
    public function getGameId(): int
    {
        return $this->gameId;
    }

    /**
     * @param int $gameId
     */
    public function setGameId(int $gameId): void
    {
        $this->gameId = $gameId;
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
    public function getPublisher(): string
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher(string $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return \DateTime
     */
    public function getRelease1Date(): \DateTime
    {
        return $this->release1Date;
    }

    /**
     * @param \DateTime $release1Date
     */
    public function setRelease1Date(\DateTime $release1Date): void
    {
        $this->release1Date = $release1Date;
    }

    /**
     * @return int
     */
    public function getControllerId(): int
    {
        return $this->controllerId;
    }

    /**
     * @param int $controllerId
     */
    public function setControllerId(int $controllerId): void
    {
        $this->controllerId = $controllerId;
    }

    /**
     * @return \DateTime
     */
    public function getLastPlayed(): \DateTime
    {
        return $this->lastPlayed;
    }

    /**
     * @param \DateTime $lastPlayed
     */
    public function setLastPlayed(\DateTime $lastPlayed): void
    {
        $this->lastPlayed = $lastPlayed;
    }

    /**
     * @return \DateTime
     */
    public function getPlaytime(): \DateTime
    {
        return $this->playtime;
    }

    /**
     * @param \DateTime $playtime
     */
    public function setPlaytime(\DateTime $playtime): void
    {
        $this->playtime = $playtime;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }
}