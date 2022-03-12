<?php

namespace App;

class Year
{
    public function __construct(public readonly int $year)
    {
    }

    public function isLeap(): bool
    {
        if ($this->isDividedBy(400)) {
            return true;
        }

        if ($this->isDividedBy(100)) {
            return false;
        }

        if ($this->isDividedBy(4)) {
            return true;
        }

        return false;
    }

    private function isDividedBy(int $divider): bool
    {
        return $this->year % $divider === 0;
    }
}