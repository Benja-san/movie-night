<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{

    public const PROGRAMS = [
        [
            "title" => "Fight Club",
            "slug" => "fight-club",
            "synopsis" => "A depressed man (Edward Norton) suffering from insomnia meets a strange soap salesman named Tyler Durden (Brad Pitt) and soon finds himself living in his squalid house after his perfect apartment is destroyed. The two bored men form an underground club with strict rules and fight other men who are fed up with their mundane lives. Their perfect partnership frays when Marla (Helena Bonham Carter), a fellow support group crasher, attracts Tyler's attention.",
            "poster" => "https://movieposters2.com/images/1260109-b.jpg",
            "background" => "https://images.hdqwalls.com/wallpapers/fight-club-4k-2a.jpg",
            "category" => "category_drama",
            "type" => "movie"
        ],
        [
            "title" => "American Psycho",
            "slug" => "american-psycho",
            "synopsis" => "In New York City in 1987, a handsome, young urban professional, Patrick Bateman (Christian Bale), lives a second life as a gruesome serial killer by night. The cast is filled by the detective (Willem Dafoe), the fiance (Reese Witherspoon), the mistress (Samantha Mathis), the coworker (Jared Leto), and the secretary (Chloë Sevigny). This is a biting, wry comedy examining the elements that make a man a monster.",
            "poster" => "https://m.media-amazon.com/images/M/MV5BZTM2ZGJmNjQtN2UyOS00NjcxLWFjMDktMDE2NzMyNTZlZTBiXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg",
            "background" => "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/f02abcf10f8672675a91fcd0fbcee34484d33005db9af1f8825a186d82949529._RI_.jpg",
            "category" => "category_psycho",
            "type" => "movie"
        ],
        [
            "title" => "Your Name",
            "slug" => "your-name",
            "synopsis" => "Two teenagers share a profound, magical connection upon discovering they are swapping bodies. Things manage to become even more complicated when the boy and girl decide to meet in person.",
            "poster" => "https://www.cdiscount.com/pdt2/4/3/5/1/700x700/auc2008097385435/rw/your-name-affiche-cinema-originale-roulee-petit-fo.jpg",
            "background" => "https://images7.alphacoders.com/737/thumb-1920-737400.jpg",
            "category" => "category_anime",
            "type" => "movie"
        ],
        [
            "title" => "Hereditary",
            "slug" => "hereditary",
            "synopsis" => "When the matriarch of the Graham family passes away, her daughter and grandchildren begin to unravel cryptic and increasingly terrifying secrets about their ancestry, trying to outrun the sinister fate they have inherited.",
            "poster" => "https://m.media-amazon.com/images/I/71H6rVU1VcL._AC_SY606_.jpg",
            "background" => "https://images2.alphacoders.com/927/thumb-1920-927005.jpg",
            "category" => "category_horror",
            "type" => "movie"
        ],
        [
            "title" => "Two is a Family",
            "slug" => "two-is-a-family",
            "synopsis" => "A man's life is turned upside down when an old flame leaves a child on his doorstep, claiming it is his. He moves to London and raises the child by himself.",
            "poster" => "https://fr.web.img6.acsta.net/pictures/16/09/30/14/48/139893.jpg",
            "background" => "https://fr.web.img3.acsta.net/pictures/16/10/06/11/13/337248.jpg",
            "category" => "category_drama",
            "type" => "movie"
        ],
        [
            "title" => "get him to the greeks",
            "slug" => "get-him-to-the-greeks",
            "synopsis" => "An ambitious executive at a record company, Aaron Green (Jonah Hill) gets what looks like an easy assignment: He must escort British rock legend Aldous Snow (Russell Brand) to L.A.'s Greek Theatre for the first stop on a lucrative comeback-concert tour. Snow, however, has different plans. Learning his true love is in California, the rocker vows to win her back before starting the tour, forcing Aaron to pull out all the stops to get Snow on stage in time.",
            "poster" => "https://m.media-amazon.com/images/I/81V7lrigNkL._AC_SY679_.jpg",
            "background" => "https://www.1zoom.me/big2/52/216712-2807.jpg",
            "category" => "category_comedy",
            "type" => "movie"
        ],
        [
            "title" => "John Wick",
            "slug" => "john-wick",
            "synopsis" => "Legendary assassin John Wick (Keanu Reeves) retired from his violent career after marrying the love of his life. Her sudden death leaves John in deep mourning. When sadistic mobster Iosef Tarasov (Alfie Allen) and his thugs steal John's prized car and kill the puppy that was a last gift from his wife, John unleashes the remorseless killing machine within and seeks vengeance. Meanwhile, Iosef's father (Michael Nyqvist) -- John's former colleague -- puts a huge bounty on John's head.",
            "poster" => "https://img.fruugo.com/product/6/29/14468296_max.jpg",
            "background" => "https://wallpaperaccess.com/full/983569.jpg",
            "category" => "category_action",
            "type" => "movie"
        ],
        [
            "title" => "Tomorrow",
            "slug" => "tomorrow",
            "synopsis" => "Filmmakers Mélanie Laurent and Cyril Dion travel worldwide to investigate concrete solutions to environmental and social challenges.",
            "poster" => "https://www.lesuricate.org/wp-content/uploads/2016/01/demain-poster.jpg",
            "background" => "https://www.leffetcarbone.com/wp-content/uploads/2017/04/leffetcarbone-demain-film.jpg",
            "category" => "category_documentary",
            "type" => "movie"
        ],
        [
            "title" => "The Office",
            "slug" => "the-office",
            "synopsis" => "This mockumentary follows the everyday lives of the manager and the employees he 'manages.' The crew follows the employees around 24/7 and captures their quite humorous and bizarre encounters as they will do what it takes to keep the company thriving. This U.S. adaptation -- set at a paper company in Scranton, Pa.",
            "poster" => "https://image.tmdb.org/t/p/w500/9RPvjEGAB81upmU0z7tx7Y9vvUz.jpg",
            "background" => "https://wallpaperaccess.com/full/1146177.jpg",
            "category" => "category_sitcom",
            "type" => "serie"
        ],
        [
            "title" => "Loving Vincent",
            "slug" => "loving-vincent",
            "synopsis" => "A man visits the last hometown of Vincent Van Gogh, to deliver his final letter. Taking place in 1890 France, the man investigates what might have taken place in the last days of the painter.",
            "poster" => "https://m.media-amazon.com/images/M/MV5BMTU3NjE2NjgwN15BMl5BanBnXkFtZTgwNDYzMzEwMzI@._V1_.jpg",
            "background" => "https://wallpaperaccess.com/full/3000.jpg",
            "category" => "category_art",
            "type" => "movie"
        ],
        [
            "title" => "Love Is Blind Japan",
            "slug" => "love-is-blind-japan",
            "synopsis" => "In this reality dating series, marriage-minded singles in Japan meet, date and get engaged — before ever setting eyes on each other.",
            "poster" => "https://m.media-amazon.com/images/M/MV5BOWI3MDYwODctY2MyNy00NjQ0LWJlMjctMTkyOTE1MjAyYTcyXkEyXkFqcGdeQXVyMTM0NTc2NDgw._V1_.jpg",
            "background" => "https://hips.hearstapps.com/hmg-prod/images/love-is-blind-reveal-2-1582748897.jpg",
            "category" => "category_reality-show",
            "type" => "reality"
        ],
    ];

    public function load(ObjectManager $manager)
    {
        //Uncomment if fixture necessary
        foreach(self::PROGRAMS as $value){
            $program = new Program();
            $program->setTitle($value['title']);
            $program->setSlug($value['slug']);
            $program->setSynopsis($value['synopsis']);
            $program->setPoster($value['poster']);
            $program->setBackground($value['background']);
            $program->setType($value['type']);
            $program->setCategory($this->getReference($value['category']));
            $manager->persist($program);
            $this->addReference('program_' . $value["slug"], $program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }


}