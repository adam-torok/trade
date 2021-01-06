<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AdvertFilter extends ModelFilter
{
    public $relations = [];
    protected $camel_cased_methods = true;
    
    public function type($type)
    {
        if ($type) {
            return $this->where('console_type', $type);
        }
    }

    public function advert($type)
    {
        if ($type) {
            return $this->where('advert_type', $type);
        }
    }

    public function condition($type)
    {
        if ($type) {
            return $this->where('condition', $type);
        }
    }

    public function city($type)
    {
        if ($type) {
            return $this->where('city', $type);
        }
    }

    public function county($type)
    {
        if ($type) {
            return $this->where('county', $type);
        }
    }
}
