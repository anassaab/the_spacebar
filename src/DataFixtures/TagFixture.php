<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TagFixture extends BaseFixture
{

    protected function loadData(\Doctrine\Persistence\ObjectManager $manager)
    {
        // TODO: Implement loadData() method.
        $this->createMany(Tag::class, 10, function(Tag $tag) {
            $tag->setName($this->faker->realText(20));
        });
        $manager->flush();
    }
}
