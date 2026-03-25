<?php

namespace wcf\event\minecraft;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use wcf\data\minecraft\Minecraft;

class ReadParametersEvent extends GetMinecraftEvent
{
    private array $parameters;

    public function __construct(ServerRequestInterface $request, Minecraft $minecraft, array $parameters, ?JsonResponse $response = null)
    {
        parent::__construct($request, $minecraft, $response);
        $this->parameters = $parameters;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getParameter(mixed $key): mixed
    {
        return $this->parameters[$key];
    }

    public function setParameter(mixed $key, mixed $value)
    {
        $this->parameters[$key] = $value;
    }
}
