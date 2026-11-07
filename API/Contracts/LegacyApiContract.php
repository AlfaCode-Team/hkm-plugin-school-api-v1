<?php

declare(strict_types=1);

namespace Plugins\SchoolApiV1\API\Contracts;

/**
 * Published contract for `school.api_v1`.
 *
 * FROZEN adapter for the 53 legacy /api/** endpoints consumed by the React Native app and the ElimuGateway desktop client.
 *
 * Legacy source : public/api/ (53 endpoints) — see ROUTING.md section 4
 * Legacy tables : (none — delegates to the owning plugins)
 *
 * Consumers declare `"requires": ["school.api_v1"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface LegacyApiContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
