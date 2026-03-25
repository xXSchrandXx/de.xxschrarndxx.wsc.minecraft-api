<?php

namespace wcf\event\minecraft;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use wcf\data\minecraft\Minecraft;

class GetMinecraftEvent extends ValidateHeaderEvent
{
    private Minecraft $minecraft;

    public function __construct(ServerRequestInterface $request, Minecraft $minecraft, ?JsonResponse $response = null)
    {
        parent::__construct($request, $response);
        $this->minecraft = $minecraft;
    }

    public function getMinecraft(): Minecraft
    {
        return $this->minecraft;
    }
}
