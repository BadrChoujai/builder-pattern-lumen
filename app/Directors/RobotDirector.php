<?php
namespace App\Directors;

use App\Interfaces\RobotBuilderInterface;

class RobotDirector
{
    /**
     * Director Builder Interface
     *
     * @param RobotBuilderInterface $robotBuilder
     * @return array
     */
    public function build(RobotBuilderInterface $robotBuilder, $robots_number)
    {
        // Specify How many robots you wanna build
        $robotBuilder->buildRobots($robots_number);

        return $robotBuilder->getRobots();
    }
}
