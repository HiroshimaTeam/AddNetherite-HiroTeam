<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Armor;

class NetheriteLeggings extends Armor
{
    public function __construct(int $meta = 0)
    {
        parent ::__construct(750, $meta, "Netherite Leggings");
    }

    public function getDefensePoints(): int
    {
        return 6;
    }

    public function getMaxDurability(): int
    {
        return 555;
    }
}