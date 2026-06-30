<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Loyalty\CommerceLoyaltyPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceLoyaltyPlugin::make(),
            ]);
    }
}
