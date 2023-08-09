<?php

declare(strict_types=1);

namespace Domain\Auth\DTOs;

use Illuminate\Http\Request;
use Support\Traits\Makeble;

final class NewUserDTO
{
    use Makeble;

    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
    ) {
    }

    public static function fromRequest(Request $request): NewUserDTO
    {
        return self::make(...$request->only(['name', 'email', 'password']));
    }
}
