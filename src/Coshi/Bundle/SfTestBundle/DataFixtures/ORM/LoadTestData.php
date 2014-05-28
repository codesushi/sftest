<?php

namespace Coshi\Bundle\SfTestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Coshi\Bundle\SfTestBundle\Entity\Test;

/**
 * class LoadTestDataa
 *
 * @author  Krzysztof Ozog <krzysztof.ozog@codesushi.co>
 */
class LoadTestData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $test = new Test();
        $test->setData('test data');

        $manager->persist($test);
        $manager->flush();
    }


}
