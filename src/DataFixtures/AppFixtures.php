<?php

namespace App\DataFixtures;

use App\Entity\Answer;
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
        $question0->setSujet("Que veut dire PHP ?");
        $question0->setTheme($theme);
        $manager->persist($question0);

        $answer0 = new Answer();
        $answer0->setProposition("PHP Hypertext Preprocessor");
        $answer0->setScore(10);
        $answer0->setQuestion($question0);
        $manager->persist($answer0);

        $answer1 = new Answer();
        $answer1->setProposition("Partially Hosted Program");
        $answer1->setScore(0);
        $answer1->setQuestion($question0);
        $manager->persist($answer1);

        $manager->flush();
    }
}
