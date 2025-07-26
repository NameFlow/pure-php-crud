<?php

declare(strict_types=1);

namespace App\Core;

use Closure;

final class Binding
{
    public function __construct(
        public readonly Closure $closure,
        public readonly bool $shared
    ){}
}