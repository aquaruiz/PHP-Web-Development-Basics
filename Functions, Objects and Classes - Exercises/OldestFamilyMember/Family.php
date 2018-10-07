<?php
/**
 * Created by PhpStorm.
 * User: Obache
 * Date: 06.10.2018
 * Time: 20:49
 */

class Family
{
    private $familyMembers;

    /**
     * Family constructor.
     */
    public function __construct()
    {
        $this->familyMembers = [];
    }

    /**
     * @return array
     */
    public function getFamilyMembers(): array
    {
        return $this->familyMembers;
    }


    public function addMember(Person $member): void
    {
        $this->familyMembers[] = $member;
    }

    public function getOldestMember(): string
    {
        $members = $this->getFamilyMembers();
        usort($members, function (Person $a, Person $b) {
            return $b->getAge() <=> $a->getAge();
        });
        $oldest = array_shift($members);
        return "{$oldest->getName()} {$oldest->getAge()}";
    }
}