<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\block\BlockToolType;
use pocketmine\item\TieredTool;
use pocketmine\block\Block;
use pocketmine\entity\Entity;

class NetheriteSword extends TieredTool
{

    public function __construct(int $meta = 0)
    {
        parent ::__construct(743, $meta, "Netherite Sword", 5);
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::TYPE_SWORD;
    }

    public function getAttackPoints(): int
    {
        return 8;
    }

    public function getBlockToolHarvestLevel(): int
    {
        return 1;
    }

    public function getMiningEfficiency(Block $block): float
    {
        return parent ::getMiningEfficiency($block) * 1.5;
    }

    protected function getBaseMiningEfficiency(): float
    {
        return 9;
    }

    public function onDestroyBlock(Block $block): bool
    {
        if ($block -> getHardness() > 0) {
            return $this -> applyDamage(2);
        }
        return false;
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