<?php
declare(strict_types=1);
/**
 * @package Laminas UriSigner
 * @author Dogan Ucar
 *
 *  MIT License
 *
 *  Copyright (c) 2024 Ucar Solutions UG
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 *
 */

namespace UcarSolutions\LaminasUriSigner;

use doganoo\DI\DateTime\IDateTimeService;
use doganoo\DIP\DateTime\DateTimeService;
use Laminas\ServiceManager\Factory\InvokableFactory;
use UcarSolutions\LaminasUriSigner\Middleware\VerificationMiddleware;
use UcarSolutions\LaminasUriSigner\Middleware\VerificationMiddlewareFactory;
use UcarSolutions\UriSigner\Service\UriSignerService;
use UcarSolutions\UriSigner\Service\UriSignerServiceInterface;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }

    public function getDependencyConfig(): array
    {
        return [
            'aliases'   => [
                UriSignerServiceInterface::class => UriSignerService::class,
                IDateTimeService::class          => DateTimeService::class,
            ],
            'factories' => [
                UriSignerService::class       => UriSignerServiceFactory::class,
                DateTimeService::class        => InvokableFactory::class,
                VerificationMiddleware::class => VerificationMiddlewareFactory::class
            ],
        ];
    }
}
