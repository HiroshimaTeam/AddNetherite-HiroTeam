<?php

namespace NetheriteArmor;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheriteHoe extends Tool
{
    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(747, $meta, $count, "Netherite Hoe");
    }

    public function isHoe()
    {
        return Tool::TIER_DIAMOND;
    }
    
	public function getMaxDurability() : int{
		return 407;
	}
}
