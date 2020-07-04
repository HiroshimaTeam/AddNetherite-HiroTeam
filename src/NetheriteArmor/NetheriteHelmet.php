<?php

namespace NetheriteArmor;

use pocketmine\item\Armor;

class NetheriteHelmet extends Armor {
	public function __construct(int $meta = 0){
		parent::__construct(748, $meta, "Netherite Helmet");
	}
 
	public function getDefensePoints() : int{
		return 3;
	}
 
	public function getMaxDurability() : int{
		return 407;
	}
}