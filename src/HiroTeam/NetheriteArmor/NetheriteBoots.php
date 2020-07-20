<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Armor;

class NetheriteBoots extends Armor
{
    public function __construct(int $meta = 0)
    {
        parent ::__construct(751, $meta, "Netherite Boots");
    }

    public function getDefensePoints(): int
    {
        return 3;
    }

    public function getMaxDurability(): int
    {
        return 481;
    }
}