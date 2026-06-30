<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class LoyaltyAccountForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('customer_id'),
                    ])->columns(2),
            ]);
    }
}
