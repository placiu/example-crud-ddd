<?php

namespace Domains\Vehicles\Traits;

trait EnumWithLabel
{
    public function label(): string
    {
        return ucfirst($this->value);
    }
}
