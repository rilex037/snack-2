<?php

namespace Snack\Interfaces;

interface Db
{
    public function query(string $query);
    public function foreignKeyCkecks(int $value = 0): bool;
}
