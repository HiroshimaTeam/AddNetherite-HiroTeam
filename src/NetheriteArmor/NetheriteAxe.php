<?php

namespace NetheriteArmor;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheriteAxe extends Tool
{
    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(746, $meta, $count, "Netherite Axe");
    }

    public function isAxe()
    {
        return Tool::TIER_NETHERITE;
    }
    
	public function getMaxDurability() : int{
		return 407;
	}
}