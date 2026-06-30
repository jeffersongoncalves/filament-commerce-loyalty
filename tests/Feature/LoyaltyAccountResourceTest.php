<?php

use JeffersonGoncalves\Commerce\Loyalty\Models\LoyaltyAccount;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Pages\CreateLoyaltyAccount;
use JeffersonGoncalves\FilamentCommerce\Loyalty\Resources\LoyaltyAccount\Pages\ListLoyaltyAccount;
use Livewire\Livewire;

it('renders the loyalty list page', function () {
    LoyaltyAccount::factory()->count(2)->create();

    Livewire::test(ListLoyaltyAccount::class)->assertOk();
});

it('creates a loyalty record through the panel', function () {
    Livewire::test(CreateLoyaltyAccount::class)
        ->fillForm([
            'customer_id' => 'cus_1',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(LoyaltyAccount::query()->count())->toBe(1);
});
