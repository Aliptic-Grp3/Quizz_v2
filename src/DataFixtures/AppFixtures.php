<?php

namespace App\DataFixtures;

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

        $manager->flush();
    }
}
