<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Pickaxe;
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\block\BlockToolType;

class NetheritePickaxe extends Pickaxe
{

    public function __construct(int $meta = 0)
    {
        parent ::__construct(745, $meta, "Netherite Pickaxe", 5);
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::TYPE_PICKAXE;
    }

    public function getBlockToolHarvestLevel(): int
    {
        return 5;
    }

    public function getMaxDurability(): int
    {
        return 407;
    }

    public function onDestroyBlock(Block $block): bool
    {
        if ($block -> getHardness() > 0) {
            return $this -> applyDamage(1);
        }
        return false;
    }

    public function getAttackPoints(): int
    {
        return self ::getBaseDamageFromTier($this -> tier) - 2;
    }

    public function onAttackEntity(Entity $victim): bool
    {
        return $this -> applyDamage(2);
    }

}

