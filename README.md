# hkm-plugin-school-api-v1

> Solves **`school.api_v1`** · namespace **`Plugins\SchoolApiV1\`** · on-demand GDA module
> Family: Elimu / school domain

FROZEN adapter for the 53 legacy /api/** endpoints consumed by the React Native app and the ElimuGateway desktop client.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `LegacyApiContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `public/api/ (53 endpoints) — see ROUTING.md section 4` |
| Legacy tables | `(none — delegates to the owning plugins)` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.api_v1"] }
```

```php
$svc = $container->make(\Plugins\SchoolApiV1\API\Contracts\LegacyApiContract::class);
```

## Installing

```bash
hkm plugins enable SchoolApiV1 <project>
```
