<?php
namespace Neo\Modules\HumanResource\Http\Pipelines\QueryFilters;

use Neo\Core\Http\Pipelines\QueryFilters\Filter;

class Search extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('name', 'LIKE', '%'.request($this->filterName()).'%');
    }
}
