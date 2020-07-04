<?php

namespace NetheriteArmor;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheriteShovel extends Tool
{
    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(744, $meta, $count, "Netherite Shovel");
    }

    public function isShovel()
    {
        return Tool::TIER_DIAMOND;
    }
    
	public function getMaxDurability() : int{
		return 407;
	}
}
