<?php

declare(strict_types=1);

namespace Potatoe\Join;

use Potatoe\Core;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class JoinMessage implements Listener {

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $player->sendMessage("Welcome To The Server");
        $player->sendMessage("Core Made By Potatoe");
    }
}