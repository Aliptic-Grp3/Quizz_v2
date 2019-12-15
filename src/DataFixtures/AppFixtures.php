<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;



class AppFixtures extends Fixture
{
	public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {

        // $product = new Product();
        // $manager->persist($product);
		$user=new User();
		$user->setUsername('user');
		$password = $this->encoder->encodePassword($user, '1234');
		$user->setPassword($password);
		$user->setAvatar('https://www.zooplus.fr/magazine/wp-content/uploads/2017/11/fotolia_87538728-768x512.jpg');
		$user->setScore('');
        $manager->persist($user);


		$manager->flush();
        
    }
}
