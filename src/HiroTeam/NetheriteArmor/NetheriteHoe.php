<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Hoe;
use pocketmine\entity\Entity;

class NetheriteHoe extends Hoe
{

    public function __construct(int $meta = 0)
    {
        parent ::__construct(747, $meta, "Netherite hoe", 5);
    }

    public function onAttackEntity(Entity $victim): bool
    {
        return $this -> applyDamage(1);
    }

    public function getMaxDurability(): int
    {
        return 407;
    }
}
