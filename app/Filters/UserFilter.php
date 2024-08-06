<?php

namespace App\Filters;

use EloquentFilter\ModelFilter;

class UserFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    /**
     ** Filter name
     *
     * @param $search
     * @return QueryBuilder
     */
    public function name($search)
    {
        return $this->where('name', 'LIKE', '%' . $search . '%');
    }
}
