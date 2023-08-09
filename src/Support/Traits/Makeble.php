<?php

declare(strict_types=1);

namespace Support\Traits;

trait Makeble
{
    public static function make(mixed ...$arguments): static
    {
        return new static(...$arguments);
    }
}
