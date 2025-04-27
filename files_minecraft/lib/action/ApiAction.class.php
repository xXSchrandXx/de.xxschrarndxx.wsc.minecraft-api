<?php

namespace minecraft\action;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use wcf\system\endpoint\RequestFailure;
use wcf\system\request\RouteHandler;

#[\wcf\http\attribute\AllowHttpMethod('DELETE')]
#[\wcf\http\attribute\DisableXsrfCheck]
final class ApiAction implements RequestHandlerInterface
{
    #[\Override]
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        if (!\str_starts_with(RouteHandler::getPathInfo(), 'api/rpc/xxschrandxx/minecraft')) {
            $reason = RequestFailure::UnknownEndpoint;
            return new JsonResponse([
                'type' => $reason->toString(),
                'code' => "unknown_endpoint",
                'message' => "",
                'param' => "",
            ], $reason->toStatusCode());
        }
        return (new \wcf\action\ApiAction())->handle($request);
    }
}
