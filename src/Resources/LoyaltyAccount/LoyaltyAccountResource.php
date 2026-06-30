<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Loyalty\Models\LoyaltyAccount;
use JeffersonGoncalves\FilamentCommerce\Loyalty\CommerceLoyaltyPlugin;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Pages\CreateLoyaltyAccount;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Pages\EditLoyaltyAccount;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Pages\ListLoyaltyAccount;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Schemas\LoyaltyAccountForm;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Tables\LoyaltyAccountTable;

class LoyaltyAccountResource extends Resource
{
    protected static ?string $model = LoyaltyAccount::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceLoyaltyPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-loyalty.navigation_group', 'Commerce — Growth');
        }
    }

    public static function form(Form $form): Form
    {
        return LoyaltyAccountForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return LoyaltyAccountTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLoyaltyAccount::route('/'),
            'create' => CreateLoyaltyAccount::route('/create'),
            'edit' => EditLoyaltyAccount::route('/{record}/edit'),
        ];
    }
}
