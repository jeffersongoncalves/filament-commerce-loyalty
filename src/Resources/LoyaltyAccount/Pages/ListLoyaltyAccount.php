<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\LoyaltyAccountResource;

class ListLoyaltyAccount extends ListRecords
{
    protected static string $resource = LoyaltyAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
