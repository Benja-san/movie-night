<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    public const SEASONS = [
        [
            "number" => 1,
            "program" => "program_love-is-blind-japan"
        ],
        [
            "number" => 1,
            "program" => "program_the-office"
        ],
        [
            "number" => 2,
            "program" => "program_the-office"
        ],
    ];

    public function load(ObjectManager $manager)
    {
        //Uncomment if fixture necessary
        foreach(self::SEASONS as $value){
            $program = new Season();
            $program->setNumber($value['number']);
            $program->setProgram($this->getReference($value['program']));
            $manager->persist($program);
            $this->addReference('season_' . $value["number"]. '_' . $value["program"] , $program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          ProgramFixtures::class,
        ];
    }


}