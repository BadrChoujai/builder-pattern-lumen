<?php
namespace App\Interfaces;

interface RobotBuilderInterface
{
    /**
     * Set The type of the robot
     *
     * @return void
     */
    public function setType(string $setType): void;

    /**
     * Set The power move of the robot
     *
     * @return void
     */
    public function setPowerMove(string $power_move): void;

    /**
     * build robots
     *
     * @return void
     */
    public function buildRobots(int $num = 1): void;

    /**
     * Clear the current robot
     *
     * @return void
     */
    public function clearCurrentRobot(): void;

    /**
     * Get The Built Robot
     *
     * @return void
     */
    public function getRobots(): array;
}
