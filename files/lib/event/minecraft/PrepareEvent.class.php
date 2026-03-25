<?php

namespace wcf\event\minecraft;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use wcf\event\IPsr14Event;

/**
 *
 * @author   xXSchrandXx
 * @license  Creative Commons Zero v1.0 Universal (http://creativecommons.org/publicdomain/zero/1.0/)
 * @package  WoltLabSuite\Core\Event\Minecraft
 */
class PrepareEvent implements IPsr14Event
{
    private ServerRequestInterface $request;
    private ?JsonResponse $response;

    public function __construct(ServerRequestInterface $request, ?JsonResponse $response = null)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function getRequest(): ServerRequestInterface
    {
        return $this->request;
    }

    public function getResponse(): ?JsonResponse
    {
        return $this->response;
    }

    public function setResponse(?JsonResponse $response = null)
    {
        $this->response = $response;
    }
}
