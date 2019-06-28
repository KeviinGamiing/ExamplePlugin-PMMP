<?php

namespace ExamplePlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class main extends PluginBase {
    
    public function onLoad(): void{
        $this->getLogger()->info(C::GOLD . "Loading is now Loading");
    }
    public function onEnable(): void{
        $this->getLogger()->info(C::GREEN . "Plugin has been Enabled!");
    }
    public function onDisable(): void{
        $this->getLogger()->info(C::RED . "Plugin has been Disabled");
    }
    public function onCommand(CommandSender $sender, Command $cmd, String $Label, array $args): bool{
        if($cmd->getName()){
            switch($args(count) === 0){
              case "example":
                $player->sendMessage(C::GREEN . "This is an Example");
                $player->addTitle(C::GREEN . "Example" . "Plugin");
                break;
            }
        return true;
        }
    }
}
