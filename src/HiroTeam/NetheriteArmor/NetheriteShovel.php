<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Shovel;
use pocketmine\entity\Entity;
use pocketmine\block\Block;

class NetheriteShovel extends Shovel
{

    public function __construct(int $meta = 0)
    {
        parent ::__construct(744, $meta, "Netherite Shovel", 5);
    }

    public function getBlockToolHarvestLevel(): int
    {
        return 5;
    }

    public function getAttackPoints(): int
    {
        return self ::getBaseDamageFromTier($this -> tier) - 3;
    }

    public function onDestroyBlock(Block $block): bool
    {
        if ($block -> getHardness() > 0) {
            return $this -> applyDamage(1);
        }
        return false;
    }

    public function getMaxDurability(): int
    {
        return 407;
    }

    public function onAttackEntity(Entity $victim): bool
    {
        return $this -> applyDamage(2);
    }
}
