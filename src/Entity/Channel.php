<?php

namespace Psr\OneBot\Entity;

class Channel
{
    public function __construct(public string $guildId,public string $channelId,public string $detailType = 'channel')
    {
    }
}