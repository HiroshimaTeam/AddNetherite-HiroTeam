<?php

namespace NetheriteArmor;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheritePickaxe extends Tool
{
    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(745, $meta, $count, "Netherite Pickaxe");
    }

    public function isPickaxe()
    {
        return Tool::TIER_NETHERITE;
    }
    
	public function getMaxDurability() : int{
		return 407;
	}
}
