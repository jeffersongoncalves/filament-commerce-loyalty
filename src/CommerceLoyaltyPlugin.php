<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Concerns\HasCommerceLoyaltyPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\LoyaltyAccountResource;

class CommerceLoyaltyPlugin implements Plugin
{
    use HasCommerceLoyaltyPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-loyalty';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'loyalty' => LoyaltyAccountResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
