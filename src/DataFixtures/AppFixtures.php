<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Entity\Themes;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $theme = new Themes();
        $theme->setName("PHP Facile");
        $manager->persist($theme);

        $question0 = new Question();
        $question0->setSujet("Que veux dire PHP ?");
        $question0->setTheme($theme);
        $manager->persist($question0);

        $manager->flush();
    }
}
