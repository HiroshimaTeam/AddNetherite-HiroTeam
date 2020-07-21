<?php

#AddNetherite plugin by HiroTeam | Plugin de AddNetherite par la HiroTeam
#██╗░░██╗██╗██████╗░░█████╗░████████╗███████╗░█████╗░███╗░░░███╗
#██║░░██║██║██╔══██╗██╔══██╗╚══██╔══╝██╔════╝██╔══██╗████╗░████║
#███████║██║██████╔╝██║░░██║░░░██║░░░█████╗░░███████║██╔████╔██║
#██╔══██║██║██╔══██╗██║░░██║░░░██║░░░██╔══╝░░██╔══██║██║╚██╔╝██║
#██║░░██║██║██║░░██║╚█████╔╝░░░██║░░░███████╗██║░░██║██║░╚═╝░██║
#╚═╝░░╚═╝╚═╝╚═╝░░╚═╝░╚════╝░░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚═╝░░░░░╚═╝

namespace HiroTeam\NetheriteArmor;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class Main extends PluginBase
{
    public function onEnable()
    {
      
        ItemFactory ::registerItem(new NetheriteBoots(), true);
        ItemFactory ::registerItem(new NetheriteChestplate(), true);
        ItemFactory ::registerItem(new NetheriteHelmet(), true);
        ItemFactory ::registerItem(new NetheriteLeggings(), true);
        ItemFactory ::registerItem(new NetheriteSword(), true);
        ItemFactory ::registerItem(new NetheritePickaxe(), true);
        ItemFactory ::registerItem(new NetheriteShovel(), true);
        Itemfactory ::registerItem(new NetheriteAxe(), true);
        ItemFactory ::registerItem(new NetheriteHoe(), true);
        ItemFactory ::registerItem(new Item(752, 0, "Netherite Scrap"));
        ItemFactory ::registerItem(new Item(742, 0, "Netherite Ingot"));
        Item ::initCreativeItems();
    }
}
