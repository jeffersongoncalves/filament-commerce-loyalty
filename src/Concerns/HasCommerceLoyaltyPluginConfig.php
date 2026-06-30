<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceLoyaltyPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-loyalty';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Growth';
    }
}
