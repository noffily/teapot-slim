<?php

declare(strict_types=1);

namespace Noffily\TeapotSlim\Test;

use Noffily\Teapot\Core\RequestEmitter;
use Slim\Psr7\Factory\ServerRequestFactory;

final class HelloPageTestCase
{
    public function seeHelloPage(RequestEmitter $emitter): void
    {
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/hello/noffily');
        $result = $emitter->run($request);

        $result->seeResponseCodeIs(200);
        $result->seeResponseBodyContentsIs('Hello, noffily');
    }
}
