<?php

namespace App\Builders;

use App\Interfaces\RobotBuilderInterface;
use App\Robot;
use phpDocumentor\Reflection\Types\Object_;

class RobotBuilder implements RobotBuilderInterface
{
    /**
     * $robot
     *
     * @var object
     */
    private $robot;
    /**
     * $robots
     *
     * @var array
     */
    private $robots;

    /**
     * initialize robot
     *
     * @param Robot $robot
     */
    public function __construct(Robot $robot)
    {
        $this->robot = $robot;
    }

    /**
     * Set The power move of the robot
     *
     * @return void
     */
    public function setPowerMove(string $power_move): void
    {
        $this->robot->power_move = $power_move;
    }

    /**
     * Set The type of the robot
     *
     * @return void
     */
    public function setType(string $type): void
    {
        $this->robot->type = $type;
    }

    /**
     * Set The type of the robot
     *
     * @return void
     */
    public function buildRobots(int $num = 1): void
    {
        for ($i = 0; $i < $num; $i++) {
            $this->clearCurrentRobot();
            $this->setPowerMove(Robot::POWER_MOVES[array_rand(Robot::POWER_MOVES)]);
            $this->setType(Robot::TYPES[array_rand(Robot::TYPES)]);

            $this->robots[] = $this->robot;
        }

        $this->getRobots();
    }

    /**
     * Clear the current robot
     *
     * @return void
     */
    public function clearCurrentRobot(): void
    {
        $this->robot = new Object_();
    }

    /**
     * Get the Built robot
     *
     * @return void
     */
    public function getRobots(): array
    {
        return $this->robots;
    }
}
