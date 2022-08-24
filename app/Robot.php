<?php

namespace App;

class Robot
{
    /**
     * public $type
     *
     * @var string
     */
    public $type;

    /**
     * public $power_move
     *
     * @var string
     */
    public $power_move;

    /**
     * Robot Types
     */
    const TYPES = [
        'War Machine',
        'Civil Machine',
        'Assistant Machine',
    ];

    /**
     * Robot Power Moves
     */
    const POWER_MOVES = [
        'Soul Eater',
        'Heavy Destroyer',
        'Concrete Smasher',
    ];
}
