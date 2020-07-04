<?php

namespace NetheriteArmor;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\items;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\item\BlockFactory;
use pocketmine\tile\Tile;

class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getLogger()->info( "§aPlugin Chargé avec succès !");
    ItemFactory::registerItem(new NetheriteBoots(),true);
    ItemFactory::registerItem(new NetheriteChestplate(),true);
    ItemFactory::registerItem(new NetheriteHelmet(),true);
    ItemFactory::registerItem(new NetheriteLeggings(),true);
    ItemFactory::registerItem(new NetheriteSword(), true);
    ItemFactory::registerItem(new NetheritePickaxe(), true);
    ItemFactory::registerItem(new NetheriteShovel(), true);
    Itemfactory::registerItem(new NetheriteAxe(), true);
    ItemFactory::registerItem(new NetheriteHoe(), true);
    Item::initCreativeItems();

    }
}
