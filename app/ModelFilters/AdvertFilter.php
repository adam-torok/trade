<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AdvertFilter extends ModelFilter
{
    public $relations = [];

    public function console_type($type)
    {
        echo 'fasy';
        if ($type) {
            return $this->where('console_type', $type);
        }
    }
}
