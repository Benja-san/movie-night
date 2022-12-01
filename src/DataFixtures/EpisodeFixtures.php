<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{

    public const EPISODES = [
        [
            "number" => 1,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Falling in love... Through a wall."
        ],
        [
            "number" => 2,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Nice to meet you, My beloved."
        ],
        [
            "number" => 3,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Labyrinth of love"
        ],
        [
            "number" => 4,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "That's when you moved my heart."
        ],
        [
            "number" => 5,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Just the two of us"
        ],
        [
            "number" => 6,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Endings and beginnings"
        ],
        [
            "number" => 7,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "The cohabitation test"
        ],
        [
            "number" => 8,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Once more and one knee."
        ],
        [
            "number" => 9,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "An ill fitting dress"
        ],
        [
            "number" => 10,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Countdown to 'I do'"
        ],
        [
            "number" => 11,
            "season" => "season_1_program_love-is-blind-japan",
            "title" => "Decision time"
        ],
    ];

    public function load(ObjectManager $manager)
    {
        //Uncomment if fixture necessary
        foreach(self::EPISODES as $value){
            $episode = new Episode();
            $episode->setNumber($value['number']);
            $episode->setTitle($value['title']);
            $episode->setSeason($this->getReference($value['season']));
            $manager->persist($episode);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          SeasonFixtures::class,
        ];
    }


}