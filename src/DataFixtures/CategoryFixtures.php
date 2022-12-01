<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = [
        ["name" => "Horror", "slug" => "horror"],
        ["name" => "Drama", "slug" => "drama"],
        ["name" => "Comedy", "slug" => "comedy"],
        ["name" => "Action", "slug" => "action"],
        ["name" => "Psycho", "slug" => "psycho"],
        ["name" => "Documentary", "slug" => "documentary"],
        ["name" => "Sitcom", "slug" => "sitcom"],
        ["name" => "Anime", "slug" => "anime"],
        ["name" => "Art", "slug" => "art"],
        ["name" => "Reality Show", "slug" => "reality-show"]
    ];

    public function load(ObjectManager $manager): void
    {
        //Uncomment if fixture necessary
        foreach(self::CATEGORIES as $value){
            $category = new Category();
            $category->setName($value["name"]);
            $category->setSlug($value["slug"]);
            $manager->persist($category);
            $this->addReference('category_' . $value["slug"], $category);
        }
        $manager->flush();
    }
}
