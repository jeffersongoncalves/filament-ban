<?php

use JeffersonGoncalves\Filament\Ban\Tests\Models\User;

function createUser(): User
{
    return User::create([
        'name' => 'John Doe',
        'email' => 'john'.uniqid().'@example.com',
        'password' => bcrypt('secret'),
    ]);
}

it('bans and unbans a model', function () {
    $user = createUser();

    expect($user->isBanned())->toBeFalse();

    $user->ban();

    expect($user->fresh()->isBanned())->toBeTrue();

    $user->unban();

    expect($user->fresh()->isBanned())->toBeFalse();
});

it('scopes only banned and without banned records', function () {
    $banned = createUser();
    $active = createUser();

    $banned->ban();

    expect(User::onlyBanned()->pluck('id'))->toContain($banned->id)
        ->not->toContain($active->id);

    expect(User::withoutBanned()->pluck('id'))->toContain($active->id)
        ->not->toContain($banned->id);
});
