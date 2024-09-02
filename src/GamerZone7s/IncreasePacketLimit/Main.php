<?php

declare(strict_types=1);

namespace GamerZone7s\increasepacketlimit;

use pocketmine\event\Listener;
use pocketmine\event\server\NetworkInterfaceRegisterEvent;
use pocketmine\network\mcpe\raklib\RakLibInterface;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onNetworkInterfaceRegister(NetworkInterfaceRegisterEvent $event) : void{
        $raknetInterface = $event->getInterface();
        if($raknetInterface instanceof RakLibInterface){
            $raknetInterface->setPacketLimit(PHP_INT_MAX);
        }
    }
}