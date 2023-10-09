<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Load Users
        UserFactory::new()
            ->withAttributes([
                'email' => 'cap_admin@example.com'
            ]);
        UserFactory::createMany(10);

        $manager->flush();
    }
}
