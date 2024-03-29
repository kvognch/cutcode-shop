<?php

declare(strict_types=1);

namespace Domain\Auth\Providers;

// use Illuminate\Support\Facades\Gate;
use Domain\Auth\Actions\RegisterNewUserAction;
use Domain\Auth\Contracts\RegisterNewUserContract;
use Illuminate\Support\ServiceProvider;

final class ActionsServiceProvider extends ServiceProvider
{
    public array $bindings = [
        RegisterNewUserContract::class => RegisterNewUserAction::class
    ];
}
