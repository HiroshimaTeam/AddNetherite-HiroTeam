<?php

namespace NetheriteArmor;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheriteSword extends Tool
{
    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(743, $meta, $count, "Netherite Sword");
    }

    public function isSword()
    {
        return Tool::TIER_DIAMOND;
    }
    
	public function getMaxDurability() : int{
		return 407;
	}
}
