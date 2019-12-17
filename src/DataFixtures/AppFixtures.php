<?php

namespace App\DataFixtures;

use App\Entity\Pages;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $pages = new Pages();
        $pages->setTitre("CGU");
        $pages->setContenu("Conditions Générale d'Utilisation");
        $pages->setPublished(true);
        $manager->persist($pages);

        $pages2 = new Pages();
        $pages2->setTitre("Mentions");
        $pages2->setContenu("Mentions légales");
        $pages2->setPublished(true);
        $manager->persist($pages2);

        $pages3 = new Pages();
        $pages3->setTitre("Apropos");
        $pages3->setContenu("A Propos de l'équipe");
        $pages3->setPublished(true);
        $manager->persist($pages3);

        $pages2 = new Pages();
        $pages2->setTitre("Regles");
        $pages2->setContenu("Règles");
        $pages2->setPublished(true);
        $manager->persist($pages2);

        $manager->flush();
    }
}
