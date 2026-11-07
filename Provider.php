<?php

declare(strict_types=1);

namespace Plugins\SchoolApiV1;

use AlfacodeTeam\PhpServicePlatform\Kernel\Contracts\ModuleContract;
use Plugins\SchoolApiV1\API\Contracts\LegacyApiContract;
use AlfacodeTeam\PhpServicePlatform\Kernel\Container\ModuleContainer;
use AlfacodeTeam\PhpServicePlatform\Kernel\Events\EventBus;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Cli\CliPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Http\HttpPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Worker\WorkerPipeline;

/**
 * SchoolApiV1 — wires the 'school.api_v1' domain.
 *
 * FROZEN adapter for the 53 legacy /api/** endpoints consumed by the React Native app and the ElimuGateway desktop client.
 *
 * Keep this module focused on ONE business domain. Wire internal bindings with
 * $container->bindInternal(); publish cross-module contracts with $container->bind().
 */
final class Provider implements ModuleContract
{
    public function solves(): string
    {
        return 'school.api_v1';
    }

    /** @return list<string> module DOMAINS — mirrors module.json "requires" */
    public function requires(): array
    {
        return [
            'database.management',
        ];
    }

    /** @return list<class-string> */
    public function exposes(): array
    {
        return [LegacyApiContract::class];
    }

    public function register(ModuleContainer $container): void
    {
        // Bind this module's services here.
    }

    public function boot(HttpPipeline $http, CliPipeline $cli, WorkerPipeline $worker, EventBus $events): void
    {
        // Register pipeline hooks / event subscriptions here.
    }
}
